<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name' => 'Veronica',
            'position' => 'CEO/Founder/Baker',
        ]);

        Staff::create([
            'name' => 'Dave Tristian',
            'position' => 'Baker',
        ]);

        Staff::create([
            'name' => 'Budi',
            'position' => 'Baker',
        ]);
    }
}
