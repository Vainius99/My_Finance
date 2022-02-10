<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;
use App\Models\Month;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = Year::all();

        foreach($years as $year){

            $months = [
                'January', 'February', 'March', 'April',
                'May', 'June', 'July', 'August',
                'September', 'October', 'November',
                'December'
                ];

                foreach($months as $month){
                    Month::create([
                        'month' => $month,
                        'year_id' => $year->id
                    ]);
                }
        }
    }
}
