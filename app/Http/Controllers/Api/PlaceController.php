<?php

namespace App\Http\Controllers\Api;

use App\DTO\Request\Paginate\BasePaginateRequestDTO;
use App\Http\Controllers\Controller;
use App\Services\Place\PlaceService;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    use HttpResponse;

    protected PlaceService $placeService;

    public function __construct()
    {
        $this->placeService = new PlaceService();
    }

    public function index(Request $request)
    {
        try {
            $option = new BasePaginateRequestDTO($request, 'places');
            $data = $this->placeService->getList($option);
            return $this->success($data, trans('success.blog.get-list'), 200);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), trans('error.blog.get-list'), 400);
        }
    }
}
