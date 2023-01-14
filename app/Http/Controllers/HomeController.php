<?php

namespace App\Http\Controllers;

use App\Providers\StickersProvider;
use App\Services\CategoriesService;
use App\Services\StickersService;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    private $stickers_service;
    private $categories_service;

    function __construct(StickersService $stickers_service, CategoriesService $categories_service)
    {
        $this->stickers_service = $stickers_service;
        $this->categories_service = $categories_service;
    }

    function index()
    {
        $category_id = 1;
        self::$view_data['categories'] = $this->categories_service->getCagetories();
        self::$view_data['main_stickers'] = $this->stickers_service->getStickersForHomePage();
        self::$view_data['stickers'] = $this->stickers_service->getStickersByCategoryId($category_id);
        return view('home', self::$view_data);
    }
}
