<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// ################################################
use App\models\categories;
use App\models\posts;
use App\user;
use App\models\comments;
// ################################################
class showCON extends Controller
{
    // ###################### show main page ##########################
    public function mainPage(){
        $categories = categories::paginate(8);
        return view('website/pages/main',compact('categories'));
    }
    // ################################################
    public function facebook(){
        return view('website/pages/facebook');
    }
    // ################################################
    public function categoriesPage(){
        $categories = categories::get();
        return view('website/pages/categoriesPage',compact('categories'));
    }
    // ################################################
    public function userPage(){
        $user = user::get();
        return view('website/pages/userPage',compact('user'));
    }
    // ################################################
    public function categorySHOW($id){
        $posts = posts::where('category_id',$id)->get();
        $category = categories::where('id',$id)->first();
        $categories = categories::where('type',$id)->get();
        return view('website/pages/categorySHOW',compact(['posts','category','categories']));
    }
    // ################################################
    public function contactUs(){
        return view('website/pages/contactUs');
    }
    // ################################################
    public function oneSHOW($id){
        $posts = posts::where('id',$id)->first();
        // $comments = comments::where('post_id',$id)->get();


        $comments = comments::where('post_id',$id)->with(['users' =>function($q){
            $q->select('name','picture','id');
        }])->get();


        return view('website/pages/one',compact(['posts','comments']));
        // return $comments;
    }
}
