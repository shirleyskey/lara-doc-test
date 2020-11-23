<?php

use Illuminate\Database\Seeder;

class BookableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bookable::class, 50)->create();
    }
}
