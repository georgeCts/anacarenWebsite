<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = array(
            [
                "category"  => "viajes",
                "slug"      => "viajes"
            ],
            [
                "category"  => "consejos",
                "slug"      => "consejos"
            ],
            [
                "category"  => "experiencias",
                "slug"      => "experiencias"
            ],
            [
                "category"  => "cartas",
                "slug"      => "cartas"
            ],
        );

        foreach($records as $record) {
            Category::create($record);
        }
    }
}
