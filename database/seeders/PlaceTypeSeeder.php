<?php

namespace Database\Seeders;

use App\Models\PlaceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaceType::create([
            'name' => 'Trường Trung Học Phổ Thông'
        ]);
        PlaceType::create([
            'name' => 'Bệnh viện'
        ]);
        PlaceType::create([
            'name' => 'Trường Đại Học'
        ]);
        PlaceType::create([
            'name' => 'Trường Tiểu Học'
        ]);
        PlaceType::create([
            'name' => 'Cầu'
        ]);
        PlaceType::create([
            'name' => 'Siêu thị'
        ]);
        PlaceType::create([
            'name' => 'Điểm du lịch'
        ]);
        PlaceType::create([
            'name' => 'Rạp chiếu phim'
        ]);
        PlaceType::create([
            'name' => 'Phố đi bộ'
        ]);
    }
}
