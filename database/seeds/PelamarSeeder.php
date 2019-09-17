<?php

use Illuminate\Database\Seeder;

class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i = 1; $i <=20; $i++){

            // insert data ke table pegawai menggunakan Faker
            DB::table('pelamar_table')->insert([
                'name' => $faker->name,
                'nationality' => $faker->nationality,
                'nik' => $faker->nik,
                'born_date' => $faker->born_date,
                'umur' => $faker->umur,
                'pendidikan' => $faker->pendidikan,
                'jurusan' => $faker->jurusan,
                'nilai' => $faker->nilai,
                'sekolah' => $faker->sekolah,
                'jenis' => $faker->jenis,
                'jenis' => $faker->jenis,
                'job' => $faker->job,
                'email' => $faker->email,
                'phone' => $faker->phone,
                'address' => $faker->address
            ]);
        }
    }
}
