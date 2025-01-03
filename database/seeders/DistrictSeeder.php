<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['name' => 'Bagerhat', 'division_id' => 1],
            ['name' => 'Bandarban', 'division_id' => 1],
            ['name' => 'Barisal', 'division_id' => 2],
            ['name' => 'Bhola', 'division_id' => 2],
            ['name' => 'Bogra', 'division_id' => 4],
            ['name' => 'Brahmanbaria', 'division_id' => 4],
            ['name' => 'Chandpur', 'division_id' => 3],
            ['name' => 'Chattogram', 'division_id' => 3],
            ['name' => 'Chuadanga', 'division_id' => 5],
            ['name' => 'Cox\'s Bazar', 'division_id' => 3],
            ['name' => 'Dinajpur', 'division_id' => 4],
            ['name' => 'Faridpur', 'division_id' => 3],
            ['name' => 'Feni', 'division_id' => 3],
            ['name' => 'Gaibandha', 'division_id' => 4],
            ['name' => 'Gazipur', 'division_id' => 5],
            ['name' => 'Gopalganj', 'division_id' => 5],
            ['name' => 'Habiganj', 'division_id' => 7],
            ['name' => 'Jamuna', 'division_id' => 4],
            ['name' => 'Jashore', 'division_id' => 5],
            ['name' => 'Jhenaidah', 'division_id' => 5],
            ['name' => 'Khagrachari', 'division_id' => 3],
            ['name' => 'Khulna', 'division_id' => 5],
            ['name' => 'Kishoreganj', 'division_id' => 5],
            ['name' => 'Kurigram', 'division_id' => 4],
            ['name' => 'Kushtia', 'division_id' => 5],
            ['name' => 'Lakshmipur', 'division_id' => 3],
            ['name' => 'Lalmonirhat', 'division_id' => 4],
            ['name' => 'Madaripur', 'division_id' => 5],
            ['name' => 'Magura', 'division_id' => 5],
            ['name' => 'Manikganj', 'division_id' => 5],
            ['name' => 'Meherpur', 'division_id' => 5],
            ['name' => 'Moulvibazar', 'division_id' => 7],
            ['name' => 'Munshiganj', 'division_id' => 5],
            ['name' => 'Mymensingh', 'division_id' => 5],
            ['name' => 'Narayanganj', 'division_id' => 5],
            ['name' => 'Narsingdi', 'division_id' => 5],
            ['name' => 'Natore', 'division_id' => 4],
            ['name' => 'Netrokona', 'division_id' => 5],
            ['name' => 'Nilphamari', 'division_id' => 4],
            ['name' => 'Noakhali', 'division_id' => 3],
            ['name' => 'Pabna', 'division_id' => 4],
            ['name' => 'Panchagarh', 'division_id' => 4],
            ['name' => 'Patuakhali', 'division_id' => 2],
            ['name' => 'Pirojpur', 'division_id' => 2],
            ['name' => 'Rajbari', 'division_id' => 5],
            ['name' => 'Rajshahi', 'division_id' => 4],
            ['name' => 'Rangamati', 'division_id' => 3],
            ['name' => 'Rangpur', 'division_id' => 4],
            ['name' => 'Satkhira', 'division_id' => 5],
            ['name' => 'Shariatpur', 'division_id' => 5],
            ['name' => 'Sherpur', 'division_id' => 5],
            ['name' => 'Shylet', 'division_id' => 7],
            ['name' => 'Sirajganj', 'division_id' => 4],
            ['name' => 'Sunamganj', 'division_id' => 7],
            ['name' => 'Tangail', 'division_id' => 5],
            ['name' => 'Thakurgaon', 'division_id' => 4],
            ['name' => 'Tangail', 'division_id' => 5],
        ];
        
        foreach ($districts as $district) {
            if (!DB::table('districts')->where('name', $district['name'])->exists()) {
                DB::table('districts')->insert($district);
            }
        }
        
    }
}
