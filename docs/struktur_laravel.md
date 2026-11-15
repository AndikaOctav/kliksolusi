# STRUKTUR APLIKASI LARAVEL (BACKEND)
## KLIK SOLUSI
### Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari

---

## DAFTAR ISI
1. [Spesifikasi Lingkungan & Framework](#1-spesifikasi-lingkungan--framework)
2. [Pohon Direktori Proyek Laravel](#2-pohon-direktori-proyek-laravel)
3. [Pemetaan Model & Eloquent ORM](#3-pemetaan-model--eloquent-orm)
4. [Lapisan Controller (Controllers Layer)](#4-lapisan-controller-controllers-layer)
5. [Validasi Data (Form Request Layer)](#5-validasi-data-form-request-layer)
6. [Lapisan Layanan Bisnis (Service Layer)](#6-lapisan-layanan-bisnis-service-layer)
7. [Rute Aplikasi (Routing Web & API)](#7-rute-aplikasi-routing-web--api)
8. [Middleware, Keamanan & Tugas Terjadwal (Artisan Schedule)](#8-middleware-keamanan--tugas-terjadwal-artisan-schedule)

---

## 1. SPESIFIKASI LINGKUNGAN & FRAMEWORK

* **Framework**: Laravel 11.x / 12.x
* **Runtime**: PHP 8.2+
* **Database Driver**: MySQL 8.0+ / MariaDB 10.6+ / SQLite (Pengujian Lokal)
* **Pola Desain**: MVC (*Model-View-Controller*) diperluas dengan *Service Layer Pattern* dan *Form Request Validation*.
* **Autentikasi**: Laravel Sanctum (Token-based API authentication) untuk relawan dan admin.

---

## 2. POHON DIREKTORI PROYEK LARAVEL

```
c:\kliksolusi/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── CategoryApiController.php
│   │   │   │   ├── SolutionApiController.php
│   │   │   │   ├── FeedbackApiController.php
│   │   │   │   ├── VolunteerTicketApiController.php
│   │   │   │   └── AdminDashboardApiController.php
│   │   │   ├── Web/
│   │   │   │   ├── HomeController.php
│   │   │   │   ├── CatalogController.php
│   │   │   │   ├── SolutionViewController.php
│   │   │   │   └── TicketTrackingController.php
│   │   │   └── Controller.php
│   │   ├── Middleware/
│   │   │   ├── CheckUserRole.php
│   │   │   └── AnonymizeIpHash.php
│   │   └── Requests/
│   │       ├── StoreTicketRequest.php
│   │       ├── SubmitFeedbackRequest.php
│   │       ├── StoreSolutionRequest.php
│   │       └── SearchSolutionRequest.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── VolunteerProfile.php
│   │   ├── Category.php
│   │   ├── Solution.php
│   │   ├── SolutionStep.php
│   │   ├── Tag.php
│   │   ├── VolunteerTicket.php
│   │   ├── TicketReply.php
│   │   ├── TicketAttachment.php
│   │   ├── SolutionFeedback.php
│   │   └── SearchLog.php
│   └── Services/
│       ├── SolutionSearchService.php
│       ├── TicketNotificationService.php
│       └── MediaOptimizationService.php
├── database/
│   ├── migrations/
│   │   ├── 2026_11_15_000001_create_users_table.php
│   │   ├── 2026_11_15_000002_create_volunteer_profiles_table.php
│   │   ├── 2026_11_15_000003_create_categories_table.php
│   │   ├── 2026_11_15_000004_create_solutions_table.php
│   │   ├── 2026_11_15_000005_create_solution_steps_table.php
│   │   ├── 2026_11_15_000006_create_tags_tables.php
│   │   ├── 2026_11_15_000007_create_volunteer_tickets_table.php
│   │   ├── 2026_11_15_000008_create_ticket_replies_table.php
│   │   ├── 2026_11_15_000009_create_ticket_attachments_table.php
│   │   ├── 2026_11_15_000010_create_solution_feedbacks_table.php
│   │   └── 2026_11_15_000011_create_search_logs_table.php
│   └── seeders/
│       ├── CategorySeeder.php
│       ├── SolutionSeeder.php
│       └── UserVolunteerSeeder.php
├── routes/
│   ├── api.php
│   ├── web.php
│   └── console.php
└── resources/
    ├── views/
    │   ├── layouts/
    │   ├── home.blade.php
    │   ├── catalog.blade.php
    │   ├── solution_detail.blade.php
    │   ├── ticket_form.blade.php
    │   └── ticket_tracking.blade.php
    └── js/ & css/
```

---

## 3. PEMETAAN MODEL & ELOQUENT ORM

### 3.1 Model `Solution`
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Solution extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'author_id', 'title', 'slug', 'problem_summary',
        'platform', 'difficulty', 'estimated_minutes', 'view_count',
        'helpful_count', 'unhelpful_count', 'is_featured', 'is_published', 'published_at'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'estimated_minutes' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(SolutionStep::class)->orderBy('step_number', 'asc');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(SolutionFeedback::class);
    }
}
```

### 3.2 Model `VolunteerTicket`
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Crypt;

class VolunteerTicket extends Model
{
    protected $fillable = [
        'ticket_number', 'solution_id', 'category_id', 'assigned_to',
        'guest_name', 'guest_contact', 'contact_channel', 'device_info',
        'subject', 'problem_detail', 'priority', 'status', 'resolved_at'
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
    ];

    // Enkripsi otomatis kontak penanya (UU PDP)
    public function setGuestContactAttribute($value)
    {
        $this->attributes['guest_contact'] = Crypt::encryptString($value);
    }

    public function getGuestContactAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    public function volunteer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(TicketReply::class)->orderBy('created_at', 'asc');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(TicketAttachment::class);
    }
}
```

---

## 4. LAPISAN CONTROLLER (CONTROLLERS LAYER)

### 4.1 Pemisahan Web & API Controllers
1. **Web Controllers (`app/Http/Controllers/Web/`)**:
   * Bertanggung jawab me-render tampilan Blade responsif untuk browser desktop dan mobile.
   * `HomeController`: Menampilkan Hero Search, Kategori Unggulan, dan Panduan Populer.
   * `SolutionViewController`: Menampilkan panduan langkah bertahap dan checklist interaktif.
   * `TicketTrackingController`: Halaman publik pelacakan status tiket via kode `#KS-...`.
2. **API Controllers (`app/Http/Controllers/Api/`)**:
   * Menyuplai data JSON murni untuk konsumsi asinkronus antarmuka web (AJAX/Fetch) dan integrasi layanan client-side.
   * Format respons seragam melalui `ApiResponseTrait`.

---

## 5. VALIDASI DATA (FORM REQUEST LAYER)

### 5.1 Contoh: `StoreTicketRequest.php`
```php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Terbuka untuk tamu publik
    }

    public function rules(): array
    {
        return [
            'guest_name' => 'required|string|max:100',
            'guest_contact' => 'required|string|max:100',
            'contact_channel' => 'required|in:whatsapp,email',
            'category_id' => 'required|exists:categories,id',
            'device_info' => 'nullable|string|max:120',
            'subject' => 'required|string|min:5|max:200',
            'problem_detail' => 'required|string|min:15|max:2000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:3072', // Max 3MB
        ];
    }
}
```

---

## 6. LAPISAN LAYANAN BISNIS (SERVICE LAYER)

### 6.1 `TicketNotificationService.php`
Mengisolasi pengiriman notifikasi dari controller saat relawan membalas tiket:
```php
namespace App\Services;

use App\Models\VolunteerTicket;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class TicketNotificationService
{
    public function notifyUser(VolunteerTicket $ticket, string $replyMessage): void
    {
        $trackingUrl = url("/lacak-tiket/{$ticket->ticket_number}");
        $text = "Halo {$ticket->guest_name}, relawan KlikSolusi telah menjawab pertanyaan Anda mengenai '{$ticket->subject}'. Cek solusinya di: {$trackingUrl}";

        if ($ticket->contact_channel === 'whatsapp') {
            // Panggilan Gateway WhatsApp API (Fonnte / Waba / Twilio)
            Http::post(config('services.whatsapp.endpoint'), [
                'target' => $ticket->guest_contact,
                'message' => $text,
            ]);
        } else {
            // Kirim Email Notifikasi
            Mail::raw($text, function ($message) use ($ticket) {
                $message->to($ticket->guest_contact)
                        ->subject("Jawaban Relawan KlikSolusi [{$ticket->ticket_number}]");
            });
        }
    }
}
```

---

## 7. RUTE APLIKASI (ROUTING WEB & API)

### 7.1 Definisi `routes/api.php`
```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CategoryApiController,
    SolutionApiController,
    FeedbackApiController,
    VolunteerTicketApiController,
    AdminDashboardApiController
};

Route::prefix('v1')->group(function () {
    // Rute Publik (Tamu)
    Route::get('/categories', [CategoryApiController::class, 'index']);
    Route::get('/solutions', [SolutionApiController::class, 'index']);
    Route::get('/solutions/{slug}', [SolutionApiController::class, 'show']);
    Route::post('/solutions/{id}/feedback', [FeedbackApiController::class, 'store']);
    
    // Rute Tiket Tamu (Dengan Rate Limiting)
    Route::middleware('throttle:3,60')->group(function () {
        Route::post('/tickets', [VolunteerTicketApiController::class, 'store']);
    });
    Route::get('/tickets/track/{ticket_number}', [VolunteerTicketApiController::class, 'track']);

    // Rute Khusus Relawan & Admin
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('/volunteer/tickets', [VolunteerTicketApiController::class, 'volunteerIndex']);
        Route::post('/volunteer/tickets/{id}/claim', [VolunteerTicketApiController::class, 'claim']);
        Route::post('/volunteer/tickets/{id}/replies', [VolunteerTicketApiController::class, 'reply']);
        Route::patch('/volunteer/tickets/{id}/resolve', [VolunteerTicketApiController::class, 'resolve']);

        // Rute Khusus Admin
        Route::middleware('role:admin')->group(function () {
            Route::get('/admin/dashboard/stats', [AdminDashboardApiController::class, 'stats']);
            Route::apiResource('/admin/categories', CategoryApiController::class)->except(['index', 'show']);
            Route::apiResource('/admin/solutions', SolutionApiController::class)->except(['index', 'show']);
        });
    });
});
```

---

## 8. MIDDLEWARE, KEAMANAN & TUGAS TERJADWAL (ARTISAN SCHEDULE)

### 8.1 Pembersihan Berkas Lampiran Otomatis (Storage Purge)
Diatur pada `routes/console.php` atau `app/Console/Kernel.php`:
```php
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Storage;
use App\Models\TicketAttachment;
use Carbon\Carbon;

// Dijalankan setiap hari tengah malam untuk membersihkan attachment tiket lama (> 30 hari selesai)
Schedule::call(function () {
    $expiredAttachments = TicketAttachment::whereHas('ticket', function ($query) {
        $query->whereIn('status', ['resolved', 'closed'])
              ->where('resolved_at', '<=', Carbon::now()->subDays(30));
    })->get();

    foreach ($expiredAttachments as $attachment) {
        if (Storage::exists($attachment->file_path)) {
            Storage::delete($attachment->file_path);
        }
        $attachment->delete();
    }
})->dailyAt('00:00');
```
