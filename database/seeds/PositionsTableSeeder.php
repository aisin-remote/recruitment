<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('positions')->delete();

        DB::table('positions')->insert(array (
            0 =>
            array (
                'id' => 2,
                'code' => 'SPV',
                'name' => 'Supervisor',
                'created_at' => '2019-08-16 09:34:25',
                'updated_at' => '2019-08-16 09:34:25',
            ),
            1 =>
            array (
                'id' => 4,
                'code' => 'OPR',
                'name' => 'Operator',
                'created_at' => '2019-08-19 01:28:36',
                'updated_at' => '2019-08-19 01:28:36',
            ),
        ));


    }
}