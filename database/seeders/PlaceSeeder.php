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
            'lng' => 107.58788372470376,
            "origin_image" => 'image/cau-truong-tien-origin.jpg',
            "address" => '1 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "bvtuh@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 1,
        ]);
        Place::create([
            'name' => 'Cinestar Huế',
            'lat' => 16.461491257016668,
            'lng' => 107.59008384397833,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '123 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "cinestarhue@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 2,
        ]);
        Place::create([
            'name' => 'Trường THPT Chuyên Quốc học Huế',
            'lat' => 16.46025903848984,
            'lng' => 107.58339987481038,
            "origin_image" => 'image/cung-an-dinh-origin.jpg',
            "address" => '111 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "quochochue@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 3,
        ]);
        Place::create([
            'name' => 'Trường Đại Học Y Dược Huế',
            'lat' => 16.459625405497377,
            'lng' => 107.58749274997727,
            "origin_image" => 'image/khoa-hoc-origin.jpg',
            "address" => '101 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "daihocyduoc@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 4,
        ]);
        Place::create([
            'name' => 'Cung An Định',
            'lat' => 16.456800565705098,
            'lng' => 107.59846300552597,
            "origin_image" => 'image/cung-an-dinh-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "cungandinh@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 5,
        ]);
        Place::create([
            'name' => 'GO! Hue',
            'lat' => 16.4603974047552,
            'lng' => 107.59929385310475,
            "origin_image" => 'image/cung-an-dinh-origin.jpg',
            "address" => '333 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "gohue@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 6,
        ]);
        Place::create([
            'name' => 'Trường Đại học Khoa học Huế',
            'lat' => 16.459414360492254,
            'lng' => 107.59265919881604,
            "origin_image" => 'image/khoa-hoc-origin.jpg',
            "address" => '111 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "daihockhoahoc@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 7,
        ]);
        Place::create([
            'name' => 'Trường Đại học Sư Phạm Huế',
            'lat' => 16.467692641408153,
            'lng' => 107.59204283054348,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "suphamhue@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 8,
        ]);
        Place::create([
            'name' => 'Cầu Trường Tiền',
            'lat' => 16.469303545864374,
            'lng' => 107.58871581300707,
            "origin_image" => 'image/cau-truong-tien-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "cautruongtien@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 8,
        ]);
        Place::create([
            'name' => 'Cầu Phú Xuân',
            'lat' => 16.465799304591936,
            'lng' => 107.58499815603851,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "cauphuxuan@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 7,
        ]);
        Place::create([
            'name' => 'Cầu Dã Viên',
            'lat' => 16.4597389396544,
            'lng' => 107.57117852977535,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "caudavien@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 6,
        ]);
        Place::create([
            'name' => 'Cầu Bán Nguyệt',
            'lat' => 16.462310032407096,
            'lng' => 107.57637707783124,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "caubannguyet@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 5,
        ]);
        Place::create([
            'name' => 'Đường đi bộ trên sông Hương',
            'lat' => 16.4651714664595,
            'lng' => 107.58694822315452,
            "origin_image" => 'image/cinestar-origin.jpg',
            "address" => '112 Nguyễn Huệ, Thừa Thiên Huế',
            "email" => "caugolim@gmail.com",
            "phone_number" => "+84123456789",
            "plus_code" => "+ABC XYZ",
            "place_type_id" => 4,
        ]);
    }
}
