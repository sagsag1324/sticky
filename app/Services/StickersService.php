<?php

namespace App\Services;

use App\Models\Sticker;

class StickersService
{
    public function getStickersForHomePage(){
        return Sticker::join('stickers_categories','stickers.id', 'stickers_categories.sticker_id')
                        ->join('categories','categories.id', 'stickers_categories.category_id')
                        ->where('present_in_home',1)
                        ->select('stickers.path','category_id','categories.title as category_title','present_in_home')
                        ->get();
    }

    public function getStickersByCategoryId($category_id){
        return Sticker::join('stickers_categories','stickers.id', 'stickers_categories.sticker_id')
                        ->join('categories','categories.id', 'stickers_categories.category_id')
                        ->where('categories.id', $category_id)
                        ->select('stickers.path','category_id','categories.title as category_title')
                        ->get();
    }
}
