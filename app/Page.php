<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $table = 'pages';
    protected $fillable = ['parent_pages_id', 'albums_id', 'slug', 'name', 'label', 'contents', 'status', 'page_type', 'image_path', 'meta_title', 'meta_keyword', 'meta_description'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menus_has_pages');
    }
}
