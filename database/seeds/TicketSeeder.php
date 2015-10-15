<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'title' => 'Concierto - Roberto Lugo',
            'status' => 'open',
            'user_id' => rand(1,10),
            'created_at' => '15/10/2015 16:19:58',
            'updated_at' => '15/10/2015 16:19:58',
        ]);

        DB::table('tickets')->insert([
            'title' => 'Concierto - Tirso Duarte',
            'status' => 'open',
            'user_id' => rand(1,10),
            'created_at' => '15/10/2015 16:19:58',
            'updated_at' => '15/10/2015 16:19:58',
        ]);

        DB::table('tickets')->insert([
            'title' => 'Concierto - En Homenaje a Juan Formell, La Van Van de Cuba',
            'status' => 'open',
            'user_id' => rand(1,10),
            'created_at' => '15/10/2015 16:19:58',
            'updated_at' => '15/10/2015 16:19:58',
        ]);

        DB::table('tickets')->insert([
            'title' => 'Concierto - Marc',
            'status' => 'open',
            'user_id' => rand(1,10),
            'created_at' => '15/10/2015 16:19:58',
            'updated_at' => '15/10/2015 16:19:58',
        ]);

        //factory(TeachMe\Entities\Ticket::class, 5)->create();
    }
}
