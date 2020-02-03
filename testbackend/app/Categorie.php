<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{


    use SoftDeletes;
    protected $fillable = [
        'name', 'slug'
    ];

    protected $datas = ['deleted_at'];
    /**
     * Get the course record associated with the category.
     */
    public function course()
    {
        return $this->hasMany('App\Course');
    }
}
