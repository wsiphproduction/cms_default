<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $table = 'menus';
    protected $fillable = ['name', 'description'];

    public function pages()
    {
        return $this->belongsToMany(Page::class, 'menus_has_pages');
    }
}
