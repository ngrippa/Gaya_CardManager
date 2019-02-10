<?php

use Illuminate\Database\Seeder;

class CardsInSetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(gaya\CardsInSet::class, config('seeding.numbers.cardsInSets'))->create();
    }
}
