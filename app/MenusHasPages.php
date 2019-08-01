<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenusHasPages extends Model
{
    use SoftDeletes;

    protected $table = 'menus_has_pages';
    protected $fillable = ['parent_pages_id', 'pages_id', 'pages_order', 'uri'];

    // public function menu()
    // {
    //     return $this->belongsTo(Menu::class);
    // }

    // public function page()
    // {
    //     return $this->belongsTo(Page::class);
    // }
}
