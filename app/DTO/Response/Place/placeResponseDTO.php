<?php

namespace App\DTO\Response\Place;

class PlaceResponseDTO
{
    private int $id;
    private string $name;
    private mixed $lat;
    private mixed $lng;
    private string $created_at;
    private string $updated_at;

    public function __construct($place)
    {
        $this->id = $place->id;
        $this->name = $place->name;
        $this->lat = $place->lat;
        $this->lng = $place->lng;
        $this->created_at = formatDate($place->created_at);
        $this->updated_at = formatDate($place->updated_at);
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
            'updated_at' => $this->updated_at
        ];
    }
}
