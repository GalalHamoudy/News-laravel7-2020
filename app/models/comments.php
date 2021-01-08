<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','user_id','post_id','comment','status','created_at'];
    protected $hidden = ['updated_at'];


    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> Start Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    // >>>>>>>>>>>>>>>>>>>>>>>>[ one to many with posts ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function users(){
        return $this->belongsto('App\user','user_id');
    }
    public function posts(){
        return $this->belongsto('App\models\posts','post_id');
    }
    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> end Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

}
