<?php

namespace App\DTO\Request\Paginate;

class TypeModelPaginateRequestDTO
{
    private string $type;
    private string $search_by;
    private string $sort_by;
    private array $select_item;

    public function __construct(string $type)
    {
        $type_model = null;

        if ($type == PAGINATE_TYPE['PLACE']['NAME'])
            $type_model = 'PLACE';

        $this->type = PAGINATE_TYPE[$type_model]['NAME'];
        $this->search_by = PAGINATE_TYPE[$type_model]['SEARCH_BY'];
        $this->sort_by = PAGINATE_TYPE[$type_model]['SORT_BY'];
        $this->select_item = PAGINATE_TYPE[$type_model]['SELECT_ITEM'];
    }
    public function getType()
    {
        return $this->type;
    }

    public function getSeachBy()
    {
        return $this->search_by;
    }

    public function getSortBy()
    {
        return $this->sort_by;
    }

    public function getSelectIem()
    {
        return $this->select_item;
    }
}
