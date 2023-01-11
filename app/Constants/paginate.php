<?php

define('PAGINATE', [
    'PAGE' => 1,
    'LIMIT' => 5,
    'SEARCH' => '',
    'SORT' => '',
    'ASC' => 'asc',
    'DESC' => 'desc',
    'IS_PAGINATE' => true
]);

define('USER_PAGINATE_TYPE', [
    'NAME' => 'users',
    'SEARCH_BY' => 'username',
    'SORT_BY' => 'id',
    'SELECT_ITEM' => []
]);

define('PLACE_PAGINATE_TYPE', [
    'NAME' => 'places',
    'SEARCH_BY' => 'name',
    'SORT_BY' => 'id',
    'SELECT_ITEM' => []
]);

define('PAGINATE_TYPE', [
    'USER' => USER_PAGINATE_TYPE,
    'PLACE' => PLACE_PAGINATE_TYPE,
]);
