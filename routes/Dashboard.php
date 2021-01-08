<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'Dashboard','namespace'=>'dashboard','middleware' => ['permission:THEwriter'] ], function () {


    //%%%%%%%%%%%%%%%%%> show main pages
    Route::get('addCategory', ['middleware' => ['permission:THEsupervisor'],'uses' =>  'categoryCON@addCategoryFuck'])->name('addCategory');
    Route::get('addPost',   'postCON@addPostFuck')->name('addPost');
    Route::get('addUser', ['middleware' => ['permission:THEsupervisor'],'uses' =>  'userCON@addUserFuck'])->name('addUser');
    Route::get('main', 'showCON@main')->name('main');
    Route::get('activity/user', 'userCON@activityUser')->name('activityUser');
    Route::get('activity/post', 'postCON@activityPost')->name('activityPost');
    Route::get('activity/comment', 'showCON@activityComment')->name('activityComment');
    Route::get('activity/category', 'categoryCON@activityCategory')->name('activityCategory');


    //%%%%%%%%%%%%%%%%%> show edit pages
    Route::get('editCategory',['middleware' => ['permission:THEsupervisor'],'uses' =>  'categoryCON@editCategory'])->name('editCategory');
    Route::get('editPost',  'postCON@editPost')->name('editPost');
    Route::get('allUser',['middleware' => ['permission:THEsupervisor'],'uses' => 'userCON@allUser'])->name('allUser');


    //%%%%%%%%%%%%%%%%%> change status
    Route::get('editCategory/{id}/stauts',['middleware' => ['permission:THEsupervisor'],'uses' => 'categoryCON@stautsCategory'])->name('stautsCategory');
    Route::get('editPost/{id}/stauts', 'postCON@stautsPost')->name('stautsPost');




    //%%%%%%%%%%%%%%%%%> delete
    Route::get('editCategory/{id}/delete',['middleware' => ['permission:THEsupervisor'],'uses' => 'categoryCON@deleteCategory'])->name('deleteCategory');
    Route::get('editPost/{id}/delete', 'postCON@deletePost')->name('deletePost');

    Route::get('editUser/{id}/delete',['middleware' => ['permission:THEsupervisor'],'uses' => 'userCON@deleteUser'])->name('deleteUser');



    //%%%%%%%%%%%%%%%%%> show update pages
    Route::get('editUser/{id}/update',['middleware' => ['permission:THEsupervisor'],'uses' => 'userCON@updateUserID'])->name('updateUser');
    Route::get('editCategory/{id}/update', 'categoryCON@updateCategoryID')->name('updateCategory');
    Route::get('editPost/{id}/update',['middleware' => ['permission:THEsupervisor'],'uses' => 'postCON@updatePostID'])->name('updatePost');


    //%%%%%%%%%%%%%%%%%> send request to update
    Route::post('updateCategory/{id}', 'categoryCON@updateCategory')->name('updateCategoryID');
    Route::post('updatePost/{id}', 'postCON@updatePost')->name('updatePostID');
    Route::post('updateUser/{id}', 'userCON@updateUser')->name('updateUserID');




    //%%%%%%%%%%%%%%%%%> send request to create
    Route::post('addCategory', ['middleware' => ['permission:THEsupervisor'],'uses' => 'categoryCON@addCategory']);
    Route::post('addPost',   'postCON@addPost');
    Route::post('addUser', ['middleware' => ['permission:THEsupervisor'],'uses' =>  'userCON@addUser']);

    //%%%%%%%%%%%%%%%%%> comments
    Route::post('addComment',   'showCON@addComment');
    Route::get('newComment',   'showCON@newComment')->name('newComment');
    Route::get('oldComment',   'showCON@oldComment')->name('oldComment');
    Route::get('editComment/{id}/status', 'showCON@statusComment')->name('statusComment');
    Route::get('editComment/{id}/delete', 'showCON@deleteComment')->name('deleteComment');

// $$$$$$$$$$$ end of Route group $$$$$$$$$$$
});
