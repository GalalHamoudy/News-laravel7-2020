<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class categories extends Model
{

    protected $table = 'categories';
    protected $fillable = ['id','type','ar_name','en_name','ar_description','en_description', 'picture', 'status','created_at'];
    protected $hidden = ['updated_at'];


    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> Start Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    // >>>>>>>>>>>>>>>>>>>>>>>>[ one to many with posts ]>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function posts(){
        return $this->hasMany('App\models\posts','category_id');
    }
    // %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%> end Relationships <%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%



}
