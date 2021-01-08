<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['id','category_id','ar_name', 'ar_summary', 'ar_description','en_name', 'en_summary', 'en_description','picture','status','created_at'];
    protected $hidden = ['updated_at'];


    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> Start Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    // >>>>>>>>>>>>>>>>>>>>>>>>[ one to many with categories ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function categories(){
        return $this->belongsto('App\models\categories','category_id');
    }
    // >>>>>>>>>>>>>>>>>>>>>>>>[ one to many with comments ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function comments(){
        return $this->hasMany('App\models\comments','post_id');
    }
    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> end Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
}
