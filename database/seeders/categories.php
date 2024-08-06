<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'id' => 1,
            'category' => 'อาหาร'
        ]);
        category::create([
            'id' => 2,
            'category' => 'เครื่องดื่ม'
        ]);
        category::create([
            'id' => 3,
            'category' => 'ของหวาน'
        ]);
    }
}
