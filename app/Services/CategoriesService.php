<?php

namespace App\Services;

use App\Models\Categorie;

class CategoriesService
{
    public function getCagetories(){
        return Categorie::select('title','button_style')->get();
    }
}
