<?php

namespace App\Services\Place;

use App\DTO\Request\Paginate\BasePaginateRequestDTO;

interface IPlaceService
{
    public function getList(BasePaginateRequestDTO $option): mixed;
}
