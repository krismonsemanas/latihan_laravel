<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('mahasiswa')->insert([
            [
                'nim' => 'D1041161018',
                'nama' => 'krismon',
                'jurusan' => 'Informatika',
                'alamat' => 'Untan'
            ],
            [
                'nim' => 'D1041161002',
                'nama' => 'Fajar',
                'jurusan' => 'Informatika',
                'alamat' => 'Untan'
            ],
            [
                'nim' => 'D1041161026',
                'nama' => 'rama',
                'jurusan' => 'Informatika',
                'alamat' => 'Untan'
            ]
        ]);
    }
}
