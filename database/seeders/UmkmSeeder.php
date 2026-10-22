<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umkm;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        Umkm::create([
            'name' => 'Reze Sate',
            'owner' => 'Ibnu Fayi',
            'industry' => 'Kuliner',
            'location' => 'BSD CITY',
            'product' => 'Aneka Sate & Sambal',
            'logo' => 'sate.jpg',
            'website' => 'https://satereze.id',
            'description' => 'Aneka sate dengan daging ayam dan sapi pilihan yang dipanggang sempurna, disajikan bersama aneka sambal khas.'
        ]);

        Umkm::create([
            'name' => 'Kopi Artisan Nusantara',
            'owner' => 'Takanashi Hoshino',
            'industry' => 'Minuman',
            'location' => 'Tangerang Selatan',
            'product' => 'Biji Kopi & Cold Brew',
            'logo' => 'kopi.jpg',
            'website' => 'https://kopiartisan.com',
            'description' => 'Kedai kopi lokal yang menyajikan racikan biji kopi pilihan dari berbagai daerah di Indonesia.'
        ]);

        Umkm::create([
            'name' => 'Keripik Renyah Nusantara',
            'owner' => 'Akane Rin',
            'industry' => 'Makanan Ringan',
            'location' => 'Bandung',
            'product' => 'Keripik Singkong & Pisang',
            'logo' => 'keripik.jpg',
            'website' => 'https://keripikrenyah.id',
            'description' => 'Produsen cemilan tradisional siap makan tanpa bahan pengawet dengan berbagai varian rasa.'
        ]);

        Umkm::create([
            'name' => 'Atelier Keramik Studio',
            'owner' => 'Reina Yamada',
            'industry' => 'Kerajinan',
            'location' => 'Yogyakarta',
            'product' => 'Cangkir & Vas Keramik',
            'logo' => 'keramik.jpg',
            'website' => 'https://atelierkeramik.id',
            'description' => 'Studio keramik buatan tangan yang mengusung desain estetis, minimalis, dan elegan untuk perlengkapan rumah.'
        ]);

        Umkm::create([
            'name' => 'Bakso Malang Juara',
            'owner' => 'Dracaena',
            'industry' => 'Kuliner',
            'location' => 'Malang',
            'product' => 'Bakso Komplit & Pangsit Goreng',
            'logo' => 'bakso.jpg',
            'website' => 'https://baksomalangjuara.id',
            'description' => 'Bakso urat khas Malang dengan kuah kaldu sapi kaya rempah dan pangsit renyah.'
        ]);

        Umkm::create([
            'name' => 'Ayam Geprek Sambal Ijo',
            'owner' => 'Yong Zi Yu',
            'industry' => 'Kuliner',
            'location' => 'Jakarta Barat',
            'product' => 'Ayam Geprek Crispy',
            'logo' => 'geprek.jpg',
            'website' => 'https://gepreksambalijo.id',
            'description' => 'Ayam goreng crispy berbalut sambal ijo ulek segar dengan pilihan level pedas.'
        ]);

        Umkm::create([
            'name' => 'Sambal Juara Nusantara',
            'owner' => 'Komichi Akebi',
            'industry' => 'Kuliner',
            'location' => 'Surabaya',
            'product' => 'Sambal Bawang & Cumi Kemasan',
            'logo' => 'sambal.jpg',
            'website' => 'https://sambaljuara.id',
            'description' => 'Olahan sambal khas Jawa Timur dalam kemasan botol siap saji dengan kepedasan gurih dan mantap.'
        ]);

        Umkm::create([
            'name' => 'Roti Bakar Melted',
            'owner' => 'Gabriel Tenma',
            'industry' => 'Makanan Ringan',
            'location' => 'Tangerang',
            'product' => 'Roti Bakar Keju & Cokelat',
            'logo' => 'roti.jpg',
            'website' => 'https://rotibakarmelted.id',
            'description' => 'Kedai roti bakar kekinian dengan aneka isian keju lumer dan cokelat premium.'
        ]);
    }
}