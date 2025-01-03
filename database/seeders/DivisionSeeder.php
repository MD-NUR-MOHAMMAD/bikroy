<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            'Dhaka', 
            'Chittagong', 
            'Rajshahi', 
            'Khulna', 
            'Barisal', 
            'Sylhet', 
            'Rangpur', 
            'Mymensingh'
        ];

        $country = Country::where('name', 'Bangladesh')->first();

        if ($country) {
            foreach ($divisions as $divisionName) {
                Division::updateOrCreate(
                    [
                        'name' => $divisionName,
                        'country_id' => $country->id
                    ],
                    []
                );
            }
        } else {
            $this->command->warn("Country 'Bangladesh' not found. Skipping divisions for this country.");
        }
    }
}