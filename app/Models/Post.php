<?php

namespace App\Models;

class Post
{
    private static $posts = [
        [
            "title" => "Beranda",
            "title_header" => "Bergabung dengan GAS",
            "p" => "Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Daftarkan tokomu dan nikmati keuntungan bersama GAS!",
            "button_register" => "Unduh Sekarang"
        ],
        [
            "title" => "Tentang GAS",
            "left_contenttext" => "GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Melalui gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.",
            "imageslide" => [
                [
                    "titleslide_content" => "Toko",
                    "imgslide_content" => "https://gas.id/files/images/gambar-toko_1616661355.png",
                    "dod_job" => [
                        "Tingkatkan pendapatan tokomu.",
                        "Jangkau pembeli lebih luas.",
                        "Bantu Kelola barang siap jualmu."
                    ]
                ],
                [
                    "titleslide_content" => "Pengantar",
                    "imgslide_content" => "https://gas.id/files/images/gambar-driver_1616661412.png",
                    "dod_job" => [
                        "Tanpa biaya daftar",
                        "tinggal daftar.",
                        "Biaya ongkir jadi milik tokomu."
                    ]
                ],
                [
                    "titleslide_content" => "Pembeli",
                    "imgslide_content" => "https://gas.id/files/images/gambar-pembeli_1616661475.png",
                    "dod_job" => [
                        "Pesan belanjaan dari rumah.",
                        "Layanan antar murah.",
                        "Harga barang asli tanpa biaya admin."
                    ]
                ],
            ]
        ],        
        [
            "title" => "Fitur",
            "left_contenttext" => "Ayo Nikmati Beragam Fitur GAS dan Kembangkan Usahamu Jadi Toko Online"
        ],
        [
            "title" => "Daftar",
            "content_text_register" => "Apa pun jenis tokomu bisa bergabung bersama GAS",
            "video_register" => "https://www.youtube.com/embed/VxVWACx9NIY"
        ],
        [
            "title" => "Karir",
            "title_jobs" => "Temukan Karier Impianmu",
            "short_title_jobs" => "Mari bergabung bersama kami. Jadilah bagian dari kami dan kembangkan bakat, kreatifmu di GAS",
            "box_jobs" => [
                [
                    "image_jobs" => "https://gas.id/files/images/digitalmarketing_1616663371.png",
                    "title_job" => "Marketing Communication",
                    "desc_job" => "Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran langsung.",
                    "title_headlinepopup" => "Marketing Communication",
                    "dod_job" => [
                        "Pria / Wanita 25-30 tahun.",
                        "Min. S1 Semua Jurusan.",
                        "Berpengalaman sebagai Marcomm Min 3 tahun."
                    ]
                ],
                [],
                [],
                [],
                [],
            ]
        ],
        [
            "title" => "Masuk Mitra",
        ],
    ];
    
    public static function all(){
        return self::$posts;
    }
}
