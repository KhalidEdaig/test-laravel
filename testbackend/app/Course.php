<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'name', 'description', 'category_id', 'slug'
    ];
    protected $datas = ['deleted_at'];
    /**
     * Get the category that owns the course.
     */
    public function category()
    {
        return $this->belongsTo('App\Categorie');
    }

    /**
     * Get the image record associated with the course.
     */
    public function image()
    {
        return $this->hasOne('App\Image');
    }
}
