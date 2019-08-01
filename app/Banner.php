<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $table = 'banners';
    protected $fillable = ['albums_id', 'name', 'description', 'image_path', 'url'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
