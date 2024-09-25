<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;


class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function delete(){
        // if ( Auth::check() ) {
        //     $id = Auth::id();
        //     $this->deleted_by = $id;
        //     $this->save();
        // }
        $this->profile->delete();
        return parent::delete();
    }

    public function profile()
    {
        return $this->hasOne('\Modules\Panels\Entities\Profile', 'users_id');
    }


}
