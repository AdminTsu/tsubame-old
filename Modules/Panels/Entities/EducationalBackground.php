<?php

namespace Modules\Panels\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationalBackground extends Model
{
    use SoftDeletes;
    protected $table = 'profile_education_backgrounds';
    
    protected $fillable = [];
    protected $hidden = [
        'id',
        'profile_id',
        'created_by',
        'created_at',
        'deleted_by',
        'deleted_at',
        'updated_by',
        'updated_at'
    ];

    public function profile(){
        return $this->belongsTo('\Modules\Panels\Entities\Profile');
    }
}
