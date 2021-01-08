<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// ------------------------
use DB;
use App\Http\Controllers\Auth;

use Spatie\Activitylog\Models\Activity;
// ################################################
use App\models\categories;
use App\models\posts;
use App\user;
// ################################################
use App\Http\Requests\CategoryREQ;
use App\Http\Requests\PostREQ;
use App\Http\Requests\UserREQ;
// ################################################
class postCON extends Controller
{
    // #####################################################################################
    public function addPost(PostREQ $request){
        // ------------------------------------------
        $file_extension = $request->picture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path='upload/post';
        $request->picture->move($path,$file_name);
        // ------------------------------------------
        posts::create([
            'category_id' => $request -> category_id ,
            'ar_name' => $request -> ar_name ,
            'en_name' => $request -> en_name ,
            'ar_summary' => $request -> ar_summary ,
            'en_summary' => $request -> en_summary ,
            'ar_description' => $request -> ar_description ,
            'en_description' => $request -> en_description ,
            'status' => $request -> status ,
            'picture' => $file_name
        ]);
        // ------------------------------------------
        activity('posts')->causedBy(\Auth::user()->id)->log(' تم اضافة قسم'.' '.$request -> ar_name);
        // ------------------------------------------
        return redirect()->back()->with('done','تم اضافة المقال بنجاح');
    }
    // #####################################################################################
    public function updatePost(PostREQ $request,$id){
        // ------------------------------------------
        if ($request -> newPicture != '') {
            // ------------------------------------------
            $picture = posts::where('id', $id)->value('picture');
            unlink("upload\post\\" . $picture);
            // ------------------------------------------
            $file_extension = $request->newPicture->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path='upload/post';
            $request->newPicture->move($path,$file_name);
        }else{
            $file_name = $request -> picture;
        }
        // ------------------------------------------
        posts::where('id', $id)->update([
            'category_id' => $request -> category_id ,
            'ar_name' => $request -> ar_name ,
            'en_name' => $request -> en_name ,
            'ar_summary' => $request -> ar_summary ,
            'en_summary' => $request -> en_summary ,
            'ar_description' => $request -> ar_description ,
            'en_description' => $request -> en_description ,
            'status' => $request -> status ,
            'picture' => $file_name
        ]);
        // ------------------------------------------
        activity('posts')->causedBy(\Auth::user()->id)->log(' تم تعديل مقال'.' '.$request -> ar_name);
        // ------------------------------------------
        return redirect()->back()->with('done','تم تعديل المقال بنجاح');
    }
    // #####################################################################################
    public function editPost(){
        $posts = posts::with(['categories' =>function($q){
            $q->select('ar_name','en_name','id');
        }])->paginate(5);
        return view('Dashboard/pages/edit/editPost',compact('posts'));
    }
    // #####################################################################################
    public function stautsPost($id){
        // ------------------------------------------
        $nameActivity = posts::where('id',$id)->value('ar_name');
        activity('posts')->causedBy(\Auth::user()->id)->log(' تم تعديل حالة المقال'.' '.$nameActivity);
        // ------------------------------------------
        $status = posts::where('id',$id)->value('status');
        if($status == 1){
            posts::where('id', $id)->update(['status' => 0]);
        }elseif($status == 0){
            posts::where('id', $id)->update(['status' => 1]);
        }
        // ------------------------------------------
        return redirect()->back()->with('done','تم تغيير الحالة بنجاح');
    }
    // #####################################################################################
    public function deletePost($id){
        // ------------------------------------------
        $picture = posts::where('id', $id)->value('picture');
        unlink("upload\post\\" . $picture);
        // ------------------------------------------
        $nameActivity = posts::where('id',$id)->value('ar_name');
        activity('posts')->causedBy(\Auth::user()->id)->log(' تم حذف المقال'.' '.$nameActivity);
        // ------------------------------------------
        posts::find($id)-> delete();
        // ------------------------------------------
        return redirect()->back()->with('done','تم حذف المقال بنجاح');
    }
    // #####################################################################################
    public function updatePostID($id){
        $posts = posts::where('id',$id)->first();
        $categories = categories::select('id','ar_name','en_name')->get();
        return view('Dashboard/pages/update/updatePost',compact(['posts','categories']));
    }
    // #####################################################################################
    public function activityPost(){
        $lastActivity = Activity::where('log_name','posts')->paginate(10);
        return view('Dashboard/pages/activity/post',compact('lastActivity'));
    }
    // #####################################################################################
    public function addPostFuck(){
        $categories = categories::get();
        return view('Dashboard/pages/add/addPost',compact('categories'));
    }
}
