<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AromaCategory extends Model
{
    use HasFactory;

    public function aroma_subcategories()
    {
        return $this->hasMany('App\AromaSubcategory');
    }

    public function memos()
    {
        return $this->hasMany('App\Memo');
    }
}
