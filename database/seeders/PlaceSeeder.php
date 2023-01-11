<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name' => 'Bệnh viện Trung Ương Huế',
            'lat' => 16.463199922626558,
            'lng' => 107.58788372470376
        ]);
        Place::create([
            'name' => 'Cinestar Huế',
            'lat' => 16.461491257016668,
            'lng' => 107.59008384397833
        ]);
        Place::create([
            'name' => 'Trường THPT Chuyên Quốc học Huế',
            'lat' => 16.46025903848984,
            'lng' => 107.58339987481038
        ]);
        Place::create([
            'name' => 'Trường Đại Học Y Dược Huế',
            'lat' => 16.459625405497377,
            'lng' => 107.58749274997727
        ]);
        Place::create([
            'name' => 'Cung An Định',
            'lat' => 16.456800565705098,
            'lng' => 107.59846300552597
        ]);
        Place::create([
            'name' => 'GO! Hue',
            'lat' => 16.4603974047552,
            'lng' => 107.59929385310475
        ]);
        Place::create([
            'name' => 'Trường Đại học Khoa học Huế',
            'lat' => 16.459414360492254,
            'lng' => 107.59265919881604
        ]);
        Place::create([
            'name' => 'Trường Đại học Sư Phạm Huế',
            'lat' => 16.467692641408153,
            'lng' => 107.59204283054348
        ]);
        Place::create([
            'name' => 'Cầu Trường Tiền',
            'lat' => 16.469303545864374,
            'lng' => 107.58871581300707
        ]);
        Place::create([
            'name' => 'Cầu Phú Xuân',
            'lat' => 16.465799304591936,
            'lng' => 107.58499815603851
        ]);
        Place::create([
            'name' => 'Cầu Dã Viên',
            'lat' => 16.4597389396544,
            'lng' => 107.57117852977535
        ]);
        Place::create([
            'name' => 'Cầu Bán Nguyệt',
            'lat' => 16.462310032407096,
            'lng' => 107.57637707783124
        ]);
        Place::create([
            'name' => 'Đường đi bộ trên sông Hương',
            'lat' => 16.4651714664595,
            'lng' => 107.58694822315452
        ]);
    }
}
