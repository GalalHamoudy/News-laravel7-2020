<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

use Cache;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $fillable = ['name', 'email', 'password','bio','picture'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> Start Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    // >>>>>>>>>>>>>>>>>>>>>>>>[ many to many with categories ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function users_categories(){
        return $this->belongsToMany('App\models\categories','users_categories','category_id','user_id');
    }
    // >>>>>>>>>>>>>>>>>>>>>>>>[ one to many with comments ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function comments(){
        return $this->hasMany('App\models\comments','user_id');
    }
    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> end Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> Start online function <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    public function isOnline(){
        return Cache::has('user-is-online'. $this->id);
    }
    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%>  end online function <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
}
