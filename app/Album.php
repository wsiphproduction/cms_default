<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    protected $table = 'albums';
    protected $fillable = ['name', 'description', 'transition_in', 'transition_out', 'transition', 'album_type'];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }
}
