<?php

use Illuminate\Database\Seeder;

class ProveedoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Proveedore::class, 10)->create();
    }
}
