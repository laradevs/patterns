<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Documents::factory(10)->create();
    }
}
