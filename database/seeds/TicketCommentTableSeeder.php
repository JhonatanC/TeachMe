<?php

use Illuminate\Database\Seeder;

class TicketCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TeachMe\Entities\TicketComment::class, 10)->create();
    }
}
