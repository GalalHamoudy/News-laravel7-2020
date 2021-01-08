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
class userCON extends Controller
{
    // #####################################################################################
    function addUser(UserREQ $request){
        // ------------------------------------------
        $file_extension = $request->picture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path='upload/user';
        $request->picture->move($path,$file_name);
        // ------------------------------------------
        $user = user::create([
            'name' => $request -> name ,
            'email' => $request -> email ,
            'bio' => $request -> bio,
            'picture' => $file_name,
            'password' => Hash::make($request -> password)
        ]);
        // ------------------------------------------
        $user->attachRole( $request->role );
        // ------------------------------------------
        activity('user')->causedBy(\Auth::user()->id)->log(' تم اضافة العضو'.' '.$request -> name);
        // ------------------------------------------
        return redirect()->back()->with('done','تم اضافة العضو بنجاح');
    }
    // #####################################################################################
    public function updateUser(UserREQ $request,$id){
        // ------------------------------------------
        activity('user')->causedBy(\Auth::user()->id)->log(' تم تعديل العضو'.' '.$request -> name);
        // ------------------------------------------
        if ($request -> newPicture != '') {
            // ------------------------------------------
            $picture = user::where('id', $id)->value('picture');
            unlink("upload\user\\" . $picture);
            // ------------------------------------------
            $file_extension = $request->newPicture->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path='upload/user';
            $request->newPicture->move($path,$file_name);
        }else{
            $file_name = $request -> picture;
        }
        // ------------------------------------------
        $user = user::where('id', $id)->update([
            'name' => $request -> name ,
            'email' => $request -> email ,
            'bio' => $request -> bio,
            'picture' => $file_name,
            'password' => Hash::make($request -> password)
        ]);
        // ------------------------------------------
        $lol = user::where('id', $id)->first();
        $lol->syncRoles([$request -> role]);
        // ------------------------------------------
        return redirect()->back()->with('done','تم تعديل العضو بنجاح');
    }
    // #####################################################################################
    public function editUser(){
        $users = user::paginate(5);
        return view('Dashboard/pages/edit/editUser',compact('users'));
    }
    // #####################################################################################
    public function updateUserID($id){
        $users = user::where('id',$id)->first();
        return view('Dashboard/pages/update/updateUser',compact('users'));
    }
    // #####################################################################################
    public function deleteUser($id){
        // ------------------------------------------
        $picture = user::where('id', $id)->value('picture');
        unlink("upload\user\\" . $picture);
        // ------------------------------------------
        $nameActivity = user::where('id',$id)->value('name');
        activity('user')->causedBy(\Auth::user()->id)->log(' تم حذف العضو'.' '.$nameActivity);
        // ------------------------------------------
        user::find($id)-> delete();
        // ------------------------------------------
        return redirect()->back()->with('done','تم حذف العضو بنجاح');
    }
    // #####################################################################################
    public function activityUser(){
        $lastActivity = Activity::where('log_name','user')->paginate(10);
        return view('Dashboard/pages/activity/user',compact('lastActivity'));
    }
    // #####################################################################################
        public function addUserFuck(){
            return view('Dashboard/pages/add/addUser');
        }
        // #####################################################################################
        public function allUser(){
            $users = user::paginate(5);
            return view('Dashboard/pages/edit/allUser',compact('users'));
        }
}
