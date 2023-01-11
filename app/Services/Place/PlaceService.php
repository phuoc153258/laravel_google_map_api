<?php

namespace App\Services\Place;

use App\DTO\Request\Paginate\BasePaginateRequestDTO;
use App\DTO\Response\Place\PlaceResponseDTO;
use App\Services\Paginate\PaginateService;
use App\Services\Place\IPlaceService;
use Illuminate\Support\Facades\DB;

class PlaceService implements IPlaceService
{
    protected PaginateService $paginateService;

    public function __construct()
    {
        $this->paginateService = new PaginateService();
    }

    public function getList(BasePaginateRequestDTO $option): mixed
    {

        $query =  DB::table($option->type_model->getType());

        $data = $this->paginateService->paginate($option, $query);
        $data['data']  = $data['data']->select()->get();

        $places = [];
        foreach ($data['data'] as &$item) {
            array_push($places, (new PlaceResponseDTO($item))->toJSON());
        }
        $data['data'] = $places;

        return $data;
    }
}
