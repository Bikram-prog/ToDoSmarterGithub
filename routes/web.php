<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotmanController;
use App\Exports\JobExport;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','App\Http\Controllers\AdminController@toDoSmarterHome');
Route::get('/privacy','App\Http\Controllers\AdminController@toDoSmarterPrivacy');
Route::get('/terms','App\Http\Controllers\AdminController@toDoSmarterTerms');
Route::get('/cookies','App\Http\Controllers\AdminController@toDoSmarterCookies');
Route::get('/contactus', 'App\Http\Controllers\AdminController@contactUs');
Route::get('/u/news','App\Http\Controllers\AdminController@toDoSmarterNews');


//////////////////////// To Do Bescrow //////////////////////////////
Route::get('/u/to-do-list-bes-login','App\Http\Controllers\AdminController@toDoListBesLogin');
Route::POST('/u/todobeslogpost','App\Http\Controllers\AdminController@toDoBesLogPost');

Route::get('/u/to-do-list-bes','App\Http\Controllers\AdminController@toDoListBes');
Route::get('/u/edit-to-do-list-bes/{id}','App\Http\Controllers\AdminController@editToDoListBes');
Route::POST('/u/edittodolistaction-bes','App\Http\Controllers\AdminController@editToDoListActionBes');
Route::get('/u/add-reciepent-bes/{name}/{email}/{psswrd}/{status}','App\Http\Controllers\AdminController@addReciepentBes');
Route::get('/u/all-reciepent-bes','App\Http\Controllers\AdminController@allReciepentBes');
Route::get('/u/del-reciepent-bes/{id}','App\Http\Controllers\AdminController@delReciepentBes');
Route::POST('/u/addtodolistpost-bes','App\Http\Controllers\AdminController@addToDoListPostBes');

Route::get('/u/opentodo-bes','App\Http\Controllers\AdminController@openToDoBes');
Route::get('/u/completetodo-bes','App\Http\Controllers\AdminController@completeToDoBes');
Route::get('/u/inprogtodo-bes','App\Http\Controllers\AdminController@inProgToDoBes');
Route::get('/u/delaytodo-bes','App\Http\Controllers\AdminController@delayToDoBes');


Route::get('/u/del-todo-bes/{id}','App\Http\Controllers\AdminController@delToDoBes');
Route::get('/u/complete-todo-bes/{id}','App\Http\Controllers\AdminController@completeToDoActionBes');
Route::get('/u/in-prog-todo-bes/{id}','App\Http\Controllers\AdminController@inProgressToDoActionBes');
Route::get('/u/delay-todo-bes/{id}','App\Http\Controllers\AdminController@delayToDoActionBes');

Route::get('/u/to_do_bes_logout','App\Http\Controllers\AdminController@toDoBesLogout');

//////////////////////// End To Do Bescrow ////////////////////////////////

/////////////////////// To Do Smarter New ///////////////////////////////

Route::get('/g-login-redirect', 'App\Http\Controllers\AdminController@googleLoginAction');
Route::get('/finish/{user_id}', 'App\Http\Controllers\AdminController@finish');
Route::POST('/u/finishpost', 'App\Http\Controllers\AdminController@finishPost');
Route::get('/u/to-do-list-smarter/{id?}','App\Http\Controllers\AdminController@toDoListSmarter');
Route::get('/u/all_reciepent','App\Http\Controllers\AdminController@allReceiepent');
Route::get('/u/job-details/{id}','App\Http\Controllers\AdminController@jobDetailsView');
Route::get('/u/add-receiepent','App\Http\Controllers\AdminController@addToDoListReceiepent');
Route::POST('/u/addreciepentpost','App\Http\Controllers\AdminController@addReciepentPost');
Route::get('/u/add-to-list','App\Http\Controllers\AdminController@addToDoListNew');
Route::get('/u/add-attachment/{id}', 'App\Http\Controllers\AdminController@imgUpload');
Route::post('/post','App\Http\Controllers\AdminController@fileStore');
Route::get('/delprodimage/{id}/{pro_id}/{imgpath}', 'App\Http\Controllers\AdminController@delProductImage');
Route::get('/prodimage/{id}', 'App\Http\Controllers\AdminController@ProdImage');
Route::get('/jobfinish/{id}', 'App\Http\Controllers\AdminController@liveProduct');
Route::get('/u/edit-reciepent-smarter/{id}','App\Http\Controllers\AdminController@editReciepentView');
Route::POST('/u/editreciepentpost','App\Http\Controllers\AdminController@editReciepentPost');
Route::get('/u/setup-company','App\Http\Controllers\AdminController@setupCompanyView');
Route::POST('/u/setupcompanypost','App\Http\Controllers\AdminController@setupCompanyPost');

Route::get('/u/setup-company','App\Http\Controllers\AdminController@setupCompanyView');

Route::get('/u/make-admin/{id}','App\Http\Controllers\AdminController@makeAdminPost');

Route::get('/u/del-company/{id}','App\Http\Controllers\AdminController@deleteCompanyDetails');
Route::get('/excel','App\Http\Controllers\AdminController@excel');

Route::post('/makecolorpost','App\Http\Controllers\AdminController@makeColorPost');

/////////////////////// End To Do Smarter New ///////////////////////////

//////////////////////// To Do New //////////////////////////////
Route::get('/u/to-do-smarter-signup','App\Http\Controllers\AdminController@toDoSmarterSignup');
Route::POST('/u/todosmartersignuppost','App\Http\Controllers\AdminController@toDoSmarterSignupPost');

Route::get('/u/to-do-smarter-login','App\Http\Controllers\AdminController@toDoSmarterLogin');
Route::POST('/u/todosmarterlogpost','App\Http\Controllers\AdminController@toDoSmarterLogPost');


Route::get('/u/edit-to-do-list-smarter/{id}','App\Http\Controllers\AdminController@editToDoListSmarter');
Route::POST('/u/edittodolistaction-smarter','App\Http\Controllers\AdminController@editToDoListActionSmarter');
Route::get('/u/add-reciepent-smarter/{name}/{email}/{psswrd}/{status}','App\Http\Controllers\AdminController@addReciepentSmarter');
Route::get('/u/all-reciepent-smarter','App\Http\Controllers\AdminController@allReciepentSmarter');
Route::get('/u/del-reciepent-smarter/{id}','App\Http\Controllers\AdminController@delReciepentSmarter');
Route::POST('/u/addtodolistpost-smarter','App\Http\Controllers\AdminController@addToDoListPostSmarter');

Route::get('/u/opentodo-smarter','App\Http\Controllers\AdminController@openToDoSmarter');
Route::get('/u/completetodo-smarter','App\Http\Controllers\AdminController@completeToDoSmarter');
Route::get('/u/inprogtodo-smarter','App\Http\Controllers\AdminController@inProgToDoSmarter');
Route::get('/u/delaytodo-smarter','App\Http\Controllers\AdminController@delayToDoSmarter');


Route::get('/u/del-todo-smarter/{id}','App\Http\Controllers\AdminController@delToDoSmarter');
Route::get('/u/complete-todo-smarter/{id}','App\Http\Controllers\AdminController@completeToDoActionSmarter');
Route::get('/u/in-prog-todo-smarter/{id}','App\Http\Controllers\AdminController@inProgressToDoActionSmarter');
Route::get('/u/delay-todo-smarter/{id}','App\Http\Controllers\AdminController@delayToDoActionSmarter');

Route::POST('/propicactionsmarter', 'App\Http\Controllers\AdminController@profilePhotoAction');

Route::get('/u/to_do_smarter_logout','App\Http\Controllers\AdminController@toDoSmarterLogout');

//////////////////////// End To Do New ////////////////////////////////




Route::get('/facebook', 'App\Http\Controllers\FacebookController@redirectToFacebook');
Route::get('/facebook/callback', 'App\Http\Controllers\FacebookController@handleFacebookCallback');


/*
* Botman Routes 
*/

 Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

 /* 
 * Video call from Twilio 
 */

Route::get('access_token/{room}', 'App\Http\Controllers\AccessTokenController@generate_token');
Route::get('videocall', 'App\Http\Controllers\AccessTokenController@videocall');

/*
* mesages inbox, sent, delete
*/
Route::get('messages/inbox2', 'App\Http\Controllers\MessagesController@inbox2');
Route::get('messages/inbox', 'App\Http\Controllers\MessagesController@inbox');
Route::get('messages/sent', 'App\Http\Controllers\MessagesController@sent');


Route::get('/bshjgshsg/clear-cache', function() {
    return Artisan::call('cache:clear');
    
});


// Sumanta's Customer Support Route

Route::POST('/chatdisplay', 'App\Http\Controllers\MessagesController@loadMsgs');
Route::post('/postinsert', 'App\Http\Controllers\UsersController@ajaxRequestPost');
Route::POST('/chatinsert', 'App\Http\Controllers\MessagesController@chatinsert');
Route::POST('/sendfile', 'App\Http\Controllers\MessagesController@sendFile');
Route::get('/cs/todo/clear/chat/{id}', 'App\Http\Controllers\MessagesController@clearChat')->name('cs.clear.chat');


Route::get('/u/export/excel/{id?}', function($id=null) {
    return Excel::download(new JobExport($id), 'jobs.xlsx');
})->name('export.excel');

// End Customer Support

Route::get('/u/monthlybreakdown','App\Http\Controllers\AdminController@monthlyBreakdownView');

Route::get('/colorpicker','App\Http\Controllers\AdminController@colorPicker');

// alogo

Route::get('/algo', function() {

    $arr = [];

    $months = DB::table("todo_job_months")->orderBy("m_month", "asc")->groupBy("m_month")->get();

       foreach($months as $m) {
            $data = DB::table("to_do_list_new")->where("todo_month", "=", $m->m_month)->get();

            
                
                    $arr[] = [
                        'month' => $m->m_month,
                         [
                            $data
                        ]
                        
                    ];
                
            
       }

       
        
       //return view('admin.admin_to_do_list_smarter_new')->with(['data'=> $arr]);
//   dd($arr);
foreach($arr as $mo) {
    $dateObj   = DateTime::createFromFormat('!m', $mo['month']);
    $monthName = $dateObj->format('F'); // March
    
    echo $monthName . "<br>";
    
    
    
    foreach($mo[0][0] as $key=>$a) {
       echo $a->to_do_list_title . "--- <br>";
       echo $a->to_do_list_status . "--- <br>";
    }
}

    

});

// Route::get('/update/algo', function() {
//     $data = DB::table("to_do_list_new")->select("to_do_list_id")->get();

//     foreach($data as $d) {
//         DB::table('todo_job_months')->insert([
//             'm_month' => "03",
//             'm_job_id' => $d->to_do_list_id,
//             ]);
//     }
    

    
// });

Route::get('/testing', function() {
    dd("testing");
});

Route::get('/index', function () {
    
    return view('admin.tds_index');
    });


Route::post('/post/secure/add/testimonial', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'cate' => 'required',
        'username' => 'required',
        'country' => 'required',
        'remarks' => 'required'
    ]);
    
        try {

            DB::table('testimonials')->insert([
                'category' => $request->cate,
                'name' => $request->username,
                'country' => $request->country,
                'remarks' => $request->remarks]);
    
            return back()->with('msg', "Your testimonial has been successfully submitted. It will under review process.");
        } catch (\Throwable $th) {
            dd("Some error occured.");
        }
    
    })->name('add.testimonial.post');

    Route::POST('/suggestionupdatepost','App\Http\Controllers\AdminController@suggestionUpdatePost');

    Route::get('/verifyaccount/{id}','App\Http\Controllers\AdminController@viewVerifyAccount');