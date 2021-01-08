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
class categoryCON extends Controller
{

    // #####################################################################################
    public function addCategory(CategoryREQ $request){
        // ------------------------------------------
        $file_extension = $request->picture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path='upload/category';
        $request->picture->move($path,$file_name);
        // ------------------------------------------
        categories::create([
            'type' => $request -> type ,
            'ar_name' => $request -> ar_name ,
            'en_name' => $request -> en_name ,
            'ar_description' => $request -> ar_description ,
            'en_description' => $request -> en_description ,
            'status' => $request -> status ,
            'picture' => $file_name
        ]);
        // ------------------------------------------
        activity('categories')->causedBy(\Auth::user()->id)->log(' تم اضافة قسم'.' '.$request -> ar_name);
        // ------------------------------------------
        return redirect()->back()->with('done','تم اضافة القسم بنجاح');
    }
    // #####################################################################################
    public function updateCategory(CategoryREQ $request,$id){
        // ------------------------------------------
        if ($request -> newPicture != '') {
        // ------------------------------------------
        $picture = categories::where('id', $id)->value('picture');
        unlink("upload\category\\" . $picture);
        // ------------------------------------------
        $file_extension = $request->newPicture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path='upload/category';
        $request->newPicture->move($path,$file_name);
        }else{
        $file_name = $request -> password;
        }
        // ------------------------------------------
        categories::where('id', $id)->update([
        'ar_name' => $request -> ar_name ,
        'en_name' => $request -> en_name ,
        'ar_description' => $request -> ar_description ,
        'en_description' => $request -> en_description ,
        'status' => $request -> status ,
        'picture' => $file_name
        ]);
        // ------------------------------------------
        activity('categories')->causedBy(\Auth::user()->id)->log(' تم تعديل قسم'.' '.$request -> ar_name);
        // ------------------------------------------
        return redirect()->back()->with('done','تم تعديل القسم بنجاح');
    }
    // #####################################################################################
    public function editCategory(){
        $categories = categories::paginate(5);
        return view('Dashboard/pages/edit/editCategory',compact('categories'));
    }
    // #####################################################################################
    public function stautsCategory($id){
        // ------------------------------------------
        $nameActivity = categories::where('id',$id)->value('ar_name');
        activity('categories')->causedBy(\Auth::user()->id)->log(' تم تعديل حالة القسم'.' '.$nameActivity);
        // ------------------------------------------
        $status = categories::where('id',$id)->value('status');
        if($status == 1){
            categories::where('id', $id)->update(['status' => 0]);
        }elseif($status == 0){
            categories::where('id', $id)->update(['status' => 1]);
        }
        // ------------------------------------------
        return redirect()->back()->with('done','تم تغيير الحالة بنجاح');
    }
    // #####################################################################################
    public function deleteCategory($id){
        // ------------------------------------------
        $picture = categories::where('id', $id)->value('picture');
        unlink("upload\category\\" . $picture);
        // ------------------------------------------
        $pictures = posts::where('category_id', $id)->value('picture');
        if ($pictures != '') {
        foreach ($pictures as $pic) {
                unlink("upload\post\\" . $pic);
            }
        }
        // ------------------------------------------
        $nameActivity = categories::where('id',$id)->value('ar_name');
        activity('categories')->causedBy(\Auth::user()->id)->log(' تم حذف القسم'.' '.$nameActivity);
        // ------------------------------------------
        categories::find($id)->posts()-> delete();
        categories::find($id)-> delete();
        // ------------------------------------------
        return redirect()->back()->with('done','تم حذف القسم بنجاح');
    }
    // #####################################################################################
    public function updateCategoryID($id){
        $categories = categories::where('id',$id)->first();
        return view('Dashboard/pages/update/updateCategory',compact('categories'));
    }
    // #####################################################################################
    public function activityCategory(){
        $lastActivity = Activity::where('log_name','categories')->paginate(10);
        return view('Dashboard/pages/activity/category',compact('lastActivity'));
    }
    // #####################################################################################
    public function addCategoryFuck(){
        $categories = categories::get();
        return view('Dashboard/pages/add/addCategory',compact('categories'));
    }
}
