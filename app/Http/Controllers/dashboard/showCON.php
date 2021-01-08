<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
// ################################################
use App\models\categories;
use App\models\posts;
use App\models\comments;
use App\user;
use App\Http\Requests\CommentREQ;
// ################################################
class showCON extends Controller
{
    // #####################################################################################
    public function main(){
        $users = user::paginate(5);
        return view('Dashboard/pages/main',compact('users'));
    }
    // #####################################################################################
    // comments ----------------------------------------------------------------------------
    // #####################################################################################

    public function addComment(CommentREQ $request){
        // ------------------------------------------
        comments::create([
            'post_id' => $request -> post_id ,
            'user_id' => \Auth::user()->id ,
            'comment' => $request -> com ,
            'status' => 0 ,
        ]);
        // ------------------------------------------
        activity('comments')->causedBy(\Auth::user()->id)->log(' تم اضافة تعليق '.' '.$request ->com);
        // ------------------------------------------
        return redirect()->back()->with('done','تم اضافة تعليق بنجاح');
    }
    // #####################################################################################
    public function activityComment(){
        $lastActivity = Activity::where('log_name','comments')->paginate(10);
        return view('Dashboard/pages/activity/comment',compact('lastActivity'));
    }
    // #####################################################################################
    public function newComment(){
        $comments = comments::where('status',0)->with(['users' =>function($q){$q->select('name','id');}])
        ->with(['posts' =>function($q){$q->select('ar_name','id');}])->get();

        return view('Dashboard/pages/edit/newComment',compact('comments'));
    }
    // #####################################################################################
    public function oldComment(){
        $comments = comments::where('status',1)->with(['users' =>function($q){$q->select('name','id');}])
        ->with(['posts' =>function($q){$q->select('ar_name','id');}])->get();

        return view('Dashboard/pages/edit/oldComment',compact('comments'));
    }
    // #####################################################################################
    public function statusComment($id){
        // ------------------------------------------
        $nameActivity = comments::where('id',$id)->value('comment');
        activity('comments')->causedBy(\Auth::user()->id)->log(' تم تعديل حالة التعليق'.' '.$nameActivity);
        // ------------------------------------------
        $status = comments::where('id',$id)->value('status');
        if($status == 1){
            comments::where('id', $id)->update(['status' => 0]);
        }elseif($status == 0){
            comments::where('id', $id)->update(['status' => 1]);
        }
        // ------------------------------------------
        return redirect()->back()->with('done','تم تغيير  الحالة التعليق بنجاح');
    }
    // #####################################################################################
    // #####################################################################################
    public function deleteComment($id){
        $nameActivity = comments::where('id',$id)->value('comment');
        activity('comments')->causedBy(\Auth::user()->id)->log(' تم حذف التعليق'.' '.$nameActivity);
        // ------------------------------------------
        comments::find($id)-> delete();
        // ------------------------------------------
        return redirect()->back()->with('done','تم حذف التعليق بنجاح');
    }
}
