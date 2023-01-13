<?php

namespace App\DTO\Response\Place;

use App\Models\PlaceImage;
use App\Models\PlaceType;

class PlaceResponseDTO
{
    private int $id;
    private string $name;
    private mixed $lat;
    private mixed $lng;
    private string $created_at;
    private string $updated_at;
    private mixed $place_type;
    private mixed $place_image;
    private string $origin_image;
    private string $address;
    private string $email;
    private string $phone_number;
    private string $plus_code;


    public function __construct($place)
    {
        $this->id = $place->id;
        $this->name = $place->name;
        $this->lat = $place->lat;
        $this->lng = $place->lng;
        $this->created_at = formatDate($place->created_at);
        $this->updated_at = formatDate($place->updated_at);
        $this->place_type = PlaceType::find($place->place_type_id);
        $this->place_image = PlaceImage::where('place_id', $place->id)->get();
        $this->origin_image = $place->origin_image;
        $this->address = $place->address;
        $this->email = $place->email;
        $this->phone_number = $place->phone_number;
        $this->plus_code = $place->plus_code;
    }

    public function toJSON()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'latLng' => [
                'lat' => $this->lat,
                'lng' => $this->lng
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'place_type' => $this->place_type,
            'place_image' => $this->place_image,
            'origin_image' => $this->origin_image,
            'address' => $this->address,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'plus_code' => $this->plus_code,
        ];
    }
}
