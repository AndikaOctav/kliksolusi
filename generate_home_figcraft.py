import json
import subprocess
import os
import sys
from figcraft_mcp.icons import icon_cmds

def build_figcraft_commands():
    cmds = []
    
    # 1. Root Frame: 1440 x 1600
    cmds.append({
        "command": "node.create",
        "as": "root_frame",
        "params": {
            "type": "frame",
            "name": "KlikSolusi - Beranda (Home)",
            "x": 0,
            "y": 0,
            "width": 1440,
            "height": 1600,
            "props": {
                "fill": "#F8F9FA",
                "clip": True
            }
        }
    })
    
    # ==========================================
    # NAVBAR (y: 0, height: 80)
    # ==========================================
    cmds.append({
        "command": "node.create",
        "as": "nav_bg",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Navbar Background",
            "x": 0,
            "y": 0,
            "width": 1440,
            "height": 80,
            "props": {
                "fill": "#FFFFFF"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Navbar Border Bottom",
            "x": 0,
            "y": 79,
            "width": 1440,
            "height": 1,
            "props": {
                "fill": "#E2E8F0"
            }
        }
    })
    # Logo Box
    cmds.append({
        "command": "node.create",
        "as": "logo_box",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Logo Box",
            "x": 80,
            "y": 18,
            "width": 44,
            "height": 44,
            "props": {
                "fill": "#2563EB",
                "cornerRadius": 10
            }
        }
    })
    # Logo Icon (zap)
    cmds.extend(icon_cmds({"$ref": "root_frame"}, "Logo Icon", "zap", 92, 30, 20, "#FFFFFF", 2.0))
    
    # Brand Text
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Brand Title",
            "x": 136,
            "y": 20,
            "text": "KlikSolusi",
            "props": {
                "fontSize": 20,
                "fontStyle": "Bold",
                "fill": "#0F172A"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Brand Tagline",
            "x": 136,
            "y": 45,
            "text": "Panduan Teknologi Sehari-hari",
            "props": {
                "fontSize": 11,
                "fontStyle": "Medium",
                "fill": "#64748B"
            }
        }
    })
    
    # Navbar Links (4 menu items, NO login button)
    nav_items = [
        {"name": "Beranda", "x": 760, "active": True},
        {"name": "Katalog Panduan", "x": 860, "active": False},
        {"name": "Tanya Relawan", "x": 1030, "active": False},
        {"name": "Tentang KlikSolusi", "x": 1180, "active": False},
    ]
    for item in nav_items:
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": f"Nav Link - {item['name']}",
                "x": item["x"],
                "y": 30,
                "text": item["name"],
                "props": {
                    "fontSize": 15,
                    "fontStyle": "Bold" if item["active"] else "Medium",
                    "fill": "#2563EB" if item["active"] else "#334155"
                }
            }
        })
        if item["active"]:
            cmds.append({
                "command": "node.create",
                "params": {
                    "type": "rectangle",
                    "parent": {"$ref": "root_frame"},
                    "name": "Nav Active Indicator",
                    "x": item["x"],
                    "y": 56,
                    "width": 64,
                    "height": 3,
                    "props": {
                        "fill": "#2563EB",
                        "cornerRadius": 2
                    }
                }
            })

    # ==========================================
    # HERO SECTION (y: 80 to 490)
    # ==========================================
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Background",
            "x": 0,
            "y": 80,
            "width": 1440,
            "height": 410,
            "props": {
                "fill": "#FFFFFF"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Border Bottom",
            "x": 0,
            "y": 489,
            "width": 1440,
            "height": 1,
            "props": {
                "fill": "#E2E8F0"
            }
        }
    })

    # Hero Badge Pill
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Badge Background",
            "x": 80,
            "y": 115,
            "width": 460,
            "height": 32,
            "props": {
                "fill": "#EFF6FF",
                "stroke": "#BFDBFE",
                "strokeWeight": 1,
                "cornerRadius": 16
            }
        }
    })
    cmds.extend(icon_cmds({"$ref": "root_frame"}, "Hero Badge Icon", "info", 92, 123, 16, "#2563EB", 1.8))
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Badge Text",
            "x": 116,
            "y": 122,
            "text": "Pusat Solusi Kendala Digital Bebas Biaya untuk Semua Umur",
            "props": {
                "fontSize": 12.5,
                "fontStyle": "SemiBold",
                "fill": "#1D4ED8"
            }
        }
    })

    # Hero Title (large, friendly, high contrast)
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Heading 1",
            "x": 80,
            "y": 162,
            "text": "Ada Kendala Teknologi Hari Ini?",
            "props": {
                "fontSize": 38,
                "fontStyle": "Bold",
                "fill": "#0F172A"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Heading 2",
            "x": 80,
            "y": 210,
            "text": "Cari Solusinya di Sini",
            "props": {
                "fontSize": 38,
                "fontStyle": "Bold",
                "fill": "#2563EB"
            }
        }
    })

    # Hero Subtitle
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Hero Subtitle",
            "x": 80,
            "y": 268,
            "width": 900,
            "text": "Panduan praktis langkah demi langkah untuk menyelesaikan kendala HP, aplikasi, dan internet sehari-hari. Nyaman dibaca pemula dan lansia.",
            "props": {
                "fontSize": 16.5,
                "fontStyle": "Regular",
                "fill": "#475569"
            }
        }
    })

    # Large Search Bar Container
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Search Bar Box",
            "x": 80,
            "y": 320,
            "width": 880,
            "height": 68,
            "props": {
                "fill": "#FFFFFF",
                "stroke": "#CBD5E1",
                "strokeWeight": 1.5,
                "cornerRadius": 16
            }
        }
    })
    # Search Icon inside bar
    cmds.extend(icon_cmds({"$ref": "root_frame"}, "Search Bar Icon", "search", 104, 342, 24, "#64748B", 2.0))
    # Search Placeholder
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Search Placeholder Text",
            "x": 142,
            "y": 343,
            "text": "Ketik masalah Anda di sini (misal: cara ubah Word ke PDF, memori HP penuh)...",
            "props": {
                "fontSize": 15.5,
                "fontStyle": "Medium",
                "fill": "#94A3B8"
            }
        }
    })
    # Search Button
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Search Button Box",
            "x": 780,
            "y": 328,
            "width": 170,
            "height": 52,
            "props": {
                "fill": "#2563EB",
                "cornerRadius": 12
            }
        }
    })
    cmds.extend(icon_cmds({"$ref": "root_frame"}, "Search Button Icon", "search", 802, 344, 18, "#FFFFFF", 2.0))
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Search Button Text",
            "x": 830,
            "y": 344,
            "text": "Cari Solusi",
            "props": {
                "fontSize": 15.5,
                "fontStyle": "Bold",
                "fill": "#FFFFFF"
            }
        }
    })

    # Quick Search Tags under Search Bar
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Quick Search Label",
            "x": 80,
            "y": 412,
            "text": "Pencarian Cepat:",
            "props": {
                "fontSize": 13.5,
                "fontStyle": "SemiBold",
                "fill": "#64748B"
            }
        }
    })
    tags = [
        {"name": "Ubah ke PDF", "x": 205, "w": 115},
        {"name": "Memori HP Penuh", "x": 335, "w": 140},
        {"name": "Kirim Email", "x": 490, "w": 110},
        {"name": "Lupa Password Google", "x": 615, "w": 170},
        {"name": "Antrean Paspor", "x": 800, "w": 130},
    ]
    for tag in tags:
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": f"Tag Pill - {tag['name']}",
                "x": tag["x"],
                "y": 406,
                "width": tag["w"],
                "height": 30,
                "props": {
                    "fill": "#F1F5F9",
                    "stroke": "#E2E8F0",
                    "strokeWeight": 1,
                    "cornerRadius": 8
                }
            }
        })
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": f"Tag Text - {tag['name']}",
                "x": tag["x"] + 12,
                "y": 412,
                "text": tag["name"],
                "props": {
                    "fontSize": 12.5,
                    "fontStyle": "Medium",
                    "fill": "#334155"
                }
            }
        })

    # ==========================================
    # GRID KATEGORI POPULER (y: 520 to 760)
    # ==========================================
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Kategori Section Title",
            "x": 80,
            "y": 520,
            "text": "Kategori Permasalahan Populer",
            "props": {
                "fontSize": 24,
                "fontStyle": "Bold",
                "fill": "#0F172A"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Kategori Section Subtitle",
            "x": 80,
            "y": 552,
            "text": "Pilih topik kendala yang sedang Anda hadapi untuk solusi cepat dan terarah",
            "props": {
                "fontSize": 14.5,
                "fontStyle": "Regular",
                "fill": "#64748B"
            }
        }
    })

    # 5 Kategori Cards
    categories = [
        {"title": "Dokumen & Office", "desc": "Word, PDF, Excel, Cetak", "icon": "bookOpen", "color": "#2563EB", "bg": "#EFF6FF", "x": 80},
        {"title": "Perangkat & HP", "desc": "Memori, Baterai, Layar", "icon": "box", "color": "#059669", "bg": "#ECFDF5", "x": 341},
        {"title": "Penyimpanan & Cloud", "desc": "Google Drive, Backup, Foto", "icon": "download", "color": "#7C3AED", "bg": "#F5F3FF", "x": 602},
        {"title": "Komunikasi & Email", "desc": "Gmail, WhatsApp, Kontak", "icon": "mail", "color": "#D97706", "bg": "#FFFBEB", "x": 863},
        {"title": "Layanan Publik Digital", "desc": "Paspor, BPJS, Pajak, KTP", "icon": "building2", "color": "#DC2626", "bg": "#FEF2F2", "x": 1124},
    ]

    card_y = 590
    card_w = 236
    card_h = 160

    for cat in categories:
        # Card Background
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": f"Cat Card - {cat['title']}",
                "x": cat["x"],
                "y": card_y,
                "width": card_w,
                "height": card_h,
                "props": {
                    "fill": "#FFFFFF",
                    "stroke": "#E2E8F0",
                    "strokeWeight": 1,
                    "cornerRadius": 16
                }
            }
        })
        # Icon Box
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": f"Cat Icon Box - {cat['title']}",
                "x": cat["x"] + 20,
                "y": card_y + 20,
                "width": 46,
                "height": 46,
                "props": {
                    "fill": cat["bg"],
                    "cornerRadius": 12
                }
            }
        })
        # Lucide Icon
        cmds.extend(icon_cmds({"$ref": "root_frame"}, f"Cat Icon - {cat['title']}", cat["icon"], cat["x"] + 31, card_y + 31, 24, cat["color"], 2.0))

        # Title
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": f"Cat Title - {cat['title']}",
                "x": cat["x"] + 20,
                "y": card_y + 80,
                "text": cat["title"],
                "props": {
                    "fontSize": 15.5,
                    "fontStyle": "Bold",
                    "fill": "#0F172A"
                }
            }
        })
        # Subtitle
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": f"Cat Desc - {cat['title']}",
                "x": cat["x"] + 20,
                "y": card_y + 104,
                "text": cat["desc"],
                "props": {
                    "fontSize": 12,
                    "fontStyle": "Medium",
                    "fill": "#64748B"
                }
            }
        })
        # Link action
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": f"Cat Link - {cat['title']}",
                "x": cat["x"] + 20,
                "y": card_y + 128,
                "text": "Buka Topik →",
                "props": {
                    "fontSize": 12.5,
                    "fontStyle": "SemiBold",
                    "fill": "#2563EB"
                }
            }
        })

    # ==========================================
    # PANDUAN PALING SERING DICARI (y: 780 to 1240)
    # ==========================================
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Panduan Section Title",
            "x": 80,
            "y": 780,
            "text": "Panduan Paling Sering Dicari",
            "props": {
                "fontSize": 24,
                "fontStyle": "Bold",
                "fill": "#0F172A"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Panduan Section Subtitle",
            "x": 80,
            "y": 812,
            "text": "Solusi teruji yang telah membantu ribuan masyarakat menyelesaikan kendala mandiri",
            "props": {
                "fontSize": 14.5,
                "fontStyle": "Regular",
                "fill": "#64748B"
            }
        }
    })

    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Panduan View All Link",
            "x": 1180,
            "y": 790,
            "text": "Lihat Semua Panduan →",
            "props": {
                "fontSize": 14.5,
                "fontStyle": "Bold",
                "fill": "#2563EB"
            }
        }
    })

    articles = [
        {
            "category": "Dokumen & Office",
            "helpful": "98% Membantu",
            "title": "Cara Mengubah File Word Menjadi PDF Tanpa Aplikasi Tambahan",
            "meta": "3 Langkah Praktis • 2 Menit Baca",
            "col": 0, "row": 0
        },
        {
            "category": "Perangkat & HP",
            "helpful": "96% Membantu",
            "title": "Mengatasi Memori WhatsApp Penuh Tanpa Hapus Chat Penting",
            "meta": "4 Langkah Praktis • 4 Menit Baca",
            "col": 1, "row": 0
        },
        {
            "category": "Komunikasi & Email",
            "helpful": "95% Membantu",
            "title": "Langkah Aman Masuk Akun Google yang Lupa Kata Sandi",
            "meta": "5 Langkah Aman • 5 Menit Baca",
            "col": 2, "row": 0
        },
        {
            "category": "Penyimpanan & Cloud",
            "helpful": "97% Membantu",
            "title": "Cara Membersihkan Penyimpanan Google Drive yang Penuh",
            "meta": "4 Langkah Praktis • 3 Menit Baca",
            "col": 0, "row": 1
        },
        {
            "category": "Layanan Publik Digital",
            "helpful": "94% Membantu",
            "title": "Panduan Mendaftar Antrean Paspor Online Lewat Aplikasi M-Paspor",
            "meta": "6 Langkah Resmi • 6 Menit Baca",
            "col": 1, "row": 1
        },
        {
            "category": "Perangkat & HP",
            "helpful": "93% Membantu",
            "title": "Mengatasi Layar HP Macet atau Hang Sendiri dengan Aman",
            "meta": "3 Langkah Mudah • 3 Menit Baca",
            "col": 2, "row": 1
        },
    ]

    art_col_xs = [80, 520, 960]
    art_row_ys = [850, 1045]
    art_w = 400
    art_h = 175

    for art in articles:
        ax = art_col_xs[art["col"]]
        ay = art_row_ys[art["row"]]

        # Card container
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": f"Article Card - {art['title'][:20]}",
                "x": ax,
                "y": ay,
                "width": art_w,
                "height": art_h,
                "props": {
                    "fill": "#FFFFFF",
                    "stroke": "#E2E8F0",
                    "strokeWeight": 1,
                    "cornerRadius": 16
                }
            }
        })

        # Category Badge
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": "Badge Bg",
                "x": ax + 18,
                "y": ay + 18,
                "width": 140,
                "height": 26,
                "props": {
                    "fill": "#F1F5F9",
                    "cornerRadius": 6
                }
            }
        })
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": "Badge Text",
                "x": ax + 28,
                "y": ay + 23,
                "text": art["category"],
                "props": {
                    "fontSize": 12,
                    "fontStyle": "SemiBold",
                    "fill": "#334155"
                }
            }
        })

        # Helpful indicator (Green pill)
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "rectangle",
                "parent": {"$ref": "root_frame"},
                "name": "Helpful Bg",
                "x": ax + 265,
                "y": ay + 18,
                "width": 115,
                "height": 26,
                "props": {
                    "fill": "#ECFDF5",
                    "stroke": "#A7F3D0",
                    "strokeWeight": 1,
                    "cornerRadius": 13
                }
            }
        })
        cmds.extend(icon_cmds({"$ref": "root_frame"}, "Helpful Icon", "check", ax + 273, ay + 24, 14, "#059669", 2.2))
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": "Helpful Text",
                "x": ax + 293,
                "y": ay + 23,
                "text": art["helpful"],
                "props": {
                    "fontSize": 11.5,
                    "fontStyle": "Bold",
                    "fill": "#059669"
                }
            }
        })

        # Article Title
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": "Article Title",
                "x": ax + 18,
                "y": ay + 56,
                "width": 364,
                "text": art["title"],
                "props": {
                    "fontSize": 16,
                    "fontStyle": "Bold",
                    "fill": "#0F172A"
                }
            }
        })

        # Bottom row: Meta & Read Link
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": "Article Meta",
                "x": ax + 18,
                "y": ay + 138,
                "text": art["meta"],
                "props": {
                    "fontSize": 12.5,
                    "fontStyle": "Medium",
                    "fill": "#64748B"
                }
            }
        })
        cmds.append({
            "command": "node.create",
            "params": {
                "type": "text",
                "parent": {"$ref": "root_frame"},
                "name": "Read Article Link",
                "x": ax + 288,
                "y": ay + 138,
                "text": "Buka Panduan →",
                "props": {
                    "fontSize": 12.5,
                    "fontStyle": "Bold",
                    "fill": "#2563EB"
                }
            }
        })

    # ==========================================
    # BANNER AJAKAN (CTA) (y: 1250 to 1430)
    # ==========================================
    cta_y = 1250
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Container Box",
            "x": 80,
            "y": cta_y,
            "width": 1280,
            "height": 175,
            "props": {
                "fill": "#0F172A",
                "cornerRadius": 20
            }
        }
    })

    # CTA Badge
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Badge Box",
            "x": 120,
            "y": cta_y + 24,
            "width": 180,
            "height": 26,
            "props": {
                "fill": "#1E293B",
                "cornerRadius": 6
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Badge Text",
            "x": 132,
            "y": cta_y + 29,
            "text": "Layanan Relawan Bebas Biaya",
            "props": {
                "fontSize": 11.5,
                "fontStyle": "SemiBold",
                "fill": "#93C5FD"
            }
        }
    })

    # CTA Heading
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Heading",
            "x": 120,
            "y": cta_y + 60,
            "text": "Solusi belum ditemukan? Tanya langsung ke Relawan Digital kami",
            "props": {
                "fontSize": 23,
                "fontStyle": "Bold",
                "fill": "#FFFFFF"
            }
        }
    })

    # CTA Description
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Subtitle",
            "x": 120,
            "y": cta_y + 98,
            "width": 800,
            "text": "Relawan teknologi kami siap membantu memandu Anda langkah demi langkah dengan sabar, gratis, dan bahasa sehari-hari yang mudah dipahami.",
            "props": {
                "fontSize": 14.5,
                "fontStyle": "Regular",
                "fill": "#94A3B8"
            }
        }
    })

    # CTA Action Button
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Button Box",
            "x": 960,
            "y": cta_y + 58,
            "width": 260,
            "height": 56,
            "props": {
                "fill": "#2563EB",
                "cornerRadius": 14
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "CTA Button Text",
            "x": 985,
            "y": cta_y + 75,
            "text": "Tanya Relawan Sekarang",
            "props": {
                "fontSize": 15,
                "fontStyle": "Bold",
                "fill": "#FFFFFF"
            }
        }
    })
    cmds.extend(icon_cmds({"$ref": "root_frame"}, "CTA Arrow Icon", "arrowRight", 1185, cta_y + 76, 18, "#FFFFFF", 2.2))

    # ==========================================
    # FOOTER BAR (y: 1470 to 1570)
    # ==========================================
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "rectangle",
            "parent": {"$ref": "root_frame"},
            "name": "Footer Divider",
            "x": 80,
            "y": 1470,
            "width": 1280,
            "height": 1,
            "props": {
                "fill": "#E2E8F0"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Footer Copyright",
            "x": 80,
            "y": 1500,
            "text": "© 2026 KlikSolusi. Sistem Informasi Pusat Panduan dan Penyelesaian Masalah Teknologi Digital Sehari-hari.",
            "props": {
                "fontSize": 13.5,
                "fontStyle": "Regular",
                "fill": "#64748B"
            }
        }
    })
    cmds.append({
        "command": "node.create",
        "params": {
            "type": "text",
            "parent": {"$ref": "root_frame"},
            "name": "Footer Note",
            "x": 920,
            "y": 1500,
            "text": "Dirancang Ramah Pemula & Lansia • Tanpa Registrasi Rumit",
            "props": {
                "fontSize": 13.5,
                "fontStyle": "SemiBold",
                "fill": "#475569"
            }
        }
    })

    return cmds

def main():
    script_path = "c:\\kliksolusi\\home_script.json"
    target_figcraft = "c:\\kliksolusi\\landing_page_kliksolusi.figcraft"
    preview_png = "c:\\kliksolusi\\landing_page_kliksolusi_preview.png"
    
    print("[1/3] Building FigCraft command sequence...")
    cmds = build_figcraft_commands()
    with open(script_path, "w", encoding="utf-8") as f:
        json.dump(cmds, f, indent=2)
    print(f"      Saved {len(cmds)} commands to {script_path}")

    print("[2/3] Compiling .figcraft document via figcraft-cli...")
    cli_path = r"C:\Program Files\ArtCraft\FigCraft\figcraft-cli.exe"
    res = subprocess.run([cli_path, "run", "--out", target_figcraft, script_path], capture_output=True, text=True)
    if res.returncode != 0:
        print(f"Error compiling figcraft: {res.stderr}")
        sys.exit(1)
    print(f"      Generated: {target_figcraft}")

    print("[3/3] Rendering 2x high-resolution visual preview...")
    res2 = subprocess.run([cli_path, "render", "--scale", "1.5", "--out", preview_png, target_figcraft], capture_output=True, text=True)
    if res2.returncode != 0:
        print(f"Warning rendering preview: {res2.stderr}")
    else:
        print(f"      Rendered visual preview: {preview_png}")

if __name__ == "__main__":
    main()
