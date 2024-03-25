<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $luas = ['3x4', '2x3'];
        $nomor_kamar = ['Kamar_01', 'Kamar_02', 'Kamar_03'];
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 3; $i++) {
            Kamar::create([
                'nomor_kamar' => $nomor_kamar[$i],
                'luas_kamar' => $faker->randomElement($luas),
                'harga_sewa' => 5000000,
                'fasilitas' => 'kasur',
                'status' => 'kosong'
            ]);
        }
    }
}
