<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
        'file_name', 'imageable_type', 'imageable_id',
    ];
    /**
     * Get the image that owns the category.

     * public function category()
     *{
     *    return $this->belongsTo('App\Categorie');
     *}
     */
    /**
     * Get the image that owns the course.
     */
    public function course()
    {
        return $this->belongsTo('App\Categorie');
    }
}
