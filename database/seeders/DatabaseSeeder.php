<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Obat;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Kategori::factory(4)->create();
        Obat::factory(6)->create();
        Supplier::factory(4)->create();
    }
}
