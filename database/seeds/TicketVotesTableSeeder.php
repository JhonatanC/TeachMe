<?php

use Illuminate\Database\Seeder;

class TicketVotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TeachMe\Entities\TicketVote::class, 10)->create();
    }
}
