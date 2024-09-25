<?php
namespace Modules\Panels\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profile extends Model
{
    use SoftDeletes;

    protected $table = 'profile';
    protected $fillable = [
        'users_id',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'phone_number',
        'married',
        'ktp_number',
        'family_background',
        'hobbies',
        'is_in_company',
        'company_name',
        'body_height',
        'body_weight',
        'blood_type',
        'jltp_score',
        'epa_score',
        'nat_score',
        'is_ever_to_japan',
        'experience_abroad',
        'photo',
        'activated'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function education_backgrounds(){
        return $this->hasMany('\Modules\Panels\Entities\EducationalBackground');
    }

    public function work_backgrounds(){
        return $this->hasMany('\Modules\Panels\Entities\WorkBackground');
    }
    
}
