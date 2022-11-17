<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\DemoController;
// use App\Http\Controllers\memeberController;




use App\Models\Customers;



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
/*
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/demo/{name}/{id?}',function($name,$id=null){
// echo $name ."  ";
// echo $id;
 $data=compact('name','id');
// print_r($data);
return view('demo')->with('data',$data);
});

Route::get('/api',[HomeController::class, 'checkApi']);

Route::any('/test',function(){
    return view('demo',$data);
});



// Route::get('/{name?}', function ($name=null) {
//     $demo="<h2>Demo TEst</h2>";
//     $data=compact('name','demo');
//     return view('home')->with($data);
// });

Route::get('/' ,function () {
    return view('home');
});

Route::get('/about' ,function () {
    return view('about');
});

Route::get('/contac-us' ,function () {
    return view('contactus');
});




// Route::put('/users{id?}',function(){

// });

// Route::delete('/users{id?}',function(){

// });
// Route::patch('/users{id?}',function(){

// });
*/



Route::get('/no-access',function (){
    echo "You Are Not Allowed To Enter";
});


Route::get('/demo',[DemoController::class,'index'])->middleware('guards');
Route::get('/demo-data/{group_id}',[DemoController::class,'data_index']);

// Route::middleware(['guards'])->group(function () {
//     Route::get('/demo',[DemoController::class,'index']);
//     Route::get('/demo-data',[DemoController::class,'data_index']);

//     });


Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/contact',SingleActionController::class);
Route::resource('/photo',PhotoController::class);
Route::get('/register',[RegistrationController::class,'index']);
// Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer',function(){
    $customer= Customers::All();
    p($customer->toArray());
});


Route::prefix('customer')->group(function () {
Route::post('/', [CustomerController::class ,'store']);
Route::get('/view',[CustomerController::class ,'view'])->name('customer-view');
Route::get('/trash-view',[CustomerController::class ,'trash_view'])->name('trash-view');

Route::get('/trash/{id}',[CustomerController::class ,'trash'])->name('customer-trash');
Route::get('/restore/{id}',[CustomerController::class ,'restore'])->name('customer-restore');
Route::get('/delete/{id}',[CustomerController::class ,'delete'])->name('customer-delete');

Route::get('/edit/{id}',[CustomerController::class ,'edit'])->name('customer-edit');
Route::post('/update/{id}',[CustomerController::class ,'update'])->name('customer-update');
});


Route::get('get-all-session', function (){
$session = session()->all();
p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('username','Laravel Session');
    $request->session()->put('session_year','2022');
    $request->session()->flash('status','Successfull');
    return redirect('get-all-session');
});

Route::get('destroy-session', function (Request $request) {
    $request->session()->forget('username');
    // $request->session()->forget('session_year');
    return redirect('get-all-session');
});

Route::get('destroy-session-all', function (Request $request) {
    $request->session()->flush();
    return redirect('get-all-session');
});



Route::get('/{lang?}',[HomeController::class,'home']);
