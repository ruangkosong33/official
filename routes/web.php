<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profil\IssueController;
use App\Http\Controllers\Infopublik\SopController;
use App\Http\Controllers\Profil\ServiceorderController;
use App\Http\Controllers\Profil\TaskfunctionController;
use App\Http\Controllers\Profil\GoalobjectiveController;
use App\Http\Controllers\Profil\PolicydirectionController;
use App\Http\Controllers\Profil\FormationhistoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Register
Route::get('/register', [AuthController::class, 'register'])->name('register.index');
Route::post('/registerpost', [AuthController::class, 'registerpost'])->name('register.post');

//Login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Check Level 1
Route::middleware(['auth', 'checklevel:1'])->group(function()
{
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //UserList
    Route::get('/userlist', [UserController::class, 'userlist'])->name('userlist.index');
    Route::get('/userlist/edit/{id}', [UserController::class, 'edit'])->name('userlist.edit');
    Route::get('userlist/show/{id}', [UserController::class, 'show'])->name('userlist.show');
    Route::put('/userlist/{id}', [UserController::class, 'update'])->name('userlist.update');
    Route::delete('/userlist/{id}', [UserController::class, 'destroy'])->name('userlist.destroy');

    //Profile
    Route::get('/profile/issue/', [IssueController::class, 'index'])->name('issue.index');
    //Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //Post
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class ,'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::post('upload', [PostController::class, 'upload'])->name('post.upload');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    //Banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

    //Division
    Route::get('/division', [DivisionController::class, 'index'])->name('division.index');
    Route::get('/division/create', [DivisionController::class, 'create'])->name('division.create');
    Route::post('/division', [DivisionController::class, 'store'])->name('division.store');
    Route::get('/division/edit/{id}', [DivisionController::class, 'edit'])->name('division.edit');
    Route::put('/division/{id}', [DivisionController::class, 'update'])->name('division.update');
    Route::delete('/division/{id}', [DivisionController::class, 'destroy'])->name('division.destroy');

    //Employee
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

    //Taskfunction
    Route::get('/taskfunction', [TaskfunctionController::class, 'index'])->name('taskfunction.index');
    Route::get('/taskfunction/create', [TaskfunctionControlle::class, 'create'])->name('taskfunction.create');
    Route::post('/taskfunction', [TaskfunctionController::class, 'store'])->name('taskfunction.store');
    Route::get('/taskfunction/edit/{id', [TaskfunctionController::class, 'edit'])->name('taskfuntion.edit');
    Route::put('/taskfunction/{id}', [TaskfunctionController::class, 'update'])->name('taskfunction.update');
    Route::delete('/taskfunction/{id}', [TaskfunctionController::class, 'destroy'])->name('taskfunction.destroy');

    //Vision
    Route::get('/vision', [VisionController::class, 'index'])->name('vision.index');
    Route::get('/vision/create', [VisionController::class, 'create'])->name('vision.create');
    Route::post('/vision', [VisionController::class, 'store'])->name('vision.store');
    Route::get('/vision/edit/{id}', [VisionController::class, 'edit'])->name('vision.edit');
    Route::put('/vision/{id}', [VisionController::class, 'update'])->name('vision.update');
    Route::delete('/vision/{id}', [VisionController::class, 'destroy'])->name('vision.destroy');

    //Issue
    Route::get('/issue', [IssueController::class, 'index'])->name('issue.index');
    Route::get('/issue/create', [IssueController::class, 'cretae'])->name('issue.create');
    Route::post('/issue', [IssueController::class, 'store'])->name('issue.store');
    Route::get('/issue/edit/{id}', [IssueController::class, 'edit'])->name('issue.edit');
    Route::put('/issue/{id}', [IssueController::class, 'update'])->name('issue.update');
    Route::delete('/issue/{id}', [IssueController::class, 'destroy'])->name('issue.destroy');

    //Policy Direction
    Route::get('/policydirection', [PolicydirectionController::class, 'index'])->name('policydirection.index');
    Route::get('/policydirection/create', [PolicydirectionController::class, 'create'])->name('policydirection.create');
    Route::post('/policydirection', [PolicydirectionController::class, 'store'])->name('policydirection.store');
    Route::get('/policydirection/edit/{id}', [PolicydirectionController::class, 'edit'])->name('policydirection.edit');
    Route::put('/policydirection/{id}', [PolicydirectionController::class, 'update'])->name('policydirection.update');
    Route::delete('/policydirection/{id}', [PolicydirectionController::class, 'destroy'])->name('policydirection.destroy');

    //Goal Objective
    Route::get('/goalobjective', [GoalobjectiveController::class, 'index'])->name('goalobjective.index');
    Route::get('/goalobjective/create', [GoalobjectiveController::class, 'create'])->name('goalobjective.create');
    Route::post('/goalobjective', [GoalobjectiveController::class, 'store'])->name('goalobjective.store');
    Route::get('/goalobjective/edit/{id}', [GoalobjectiveController::class, 'edit'])->name('goalobjective.edit');
    Route::put('/goalobjective/{id}', [GoalobjectiveController::class, 'update'])->name('goalobjective.update');
    Route::delete('/goalobjective/{id}', [GoalobjectiveControlleR::class, 'destroy'])->name('goalobjective.destroy');

    //Formation History
    Route::get('/formationhistory', [FormationhistoryController::class, 'index'])->name('formationhistory.index');
    Route::get('/formationhistory/create', [FormationhistoryController::class, 'create'])->name('formationhistory.create');
    Route::post('/formationhistory', [FormationhistoryController::class, 'store'])->name('formationhistory.store');
    Route::get('/formationhistory/edit/{id}', [FormationhistoryController::class, 'edit'])->name('formationhistory.edit');
    Route::put('/formationhistory/{id}', [FormationhistoryController::class, 'update'])->name('formationhistory.update');
    Route::delete('/formationhistory/{id}', [FormationhistoryContoller::class, 'destroy'])->name('formationhistory.destroy');

    //Service Order
    Route::get('/serviceorder', [ServiceorderController::class, 'index'])->name('serviceorder.index');
    Route::get('/serviceorder/create', [ServiceorderController::class, 'create'])->name('serviceorder.create');
    Route::post('/serviceorder', [ServiceorderController::class, 'store'])->name('serviceorder.store');
    Route::get('/serviceorder/edit/{id}', [ServiceorderController::class, 'edit'])->name('serviceorder.edit');
    Route::put('/serviceorder/{id}', [ServiceorderController::class, 'update'])->name('serviceorder.update');
    Route::delete('/serviceorder/{id}', [ServiceorderController::class, 'destroy'])->name('serviceorder.destroy');

    //SOP
    Route::get('/sop', [SopController::class, 'index'])->name('sop.index');
    Route::get('/sop/create', [SopController::class, 'create'])->name('sop.create');
    Route::post('/sop', [SopController::class, 'store'])->name('sop.store');
    Route::get('/sop/edit/{id}', [SopController::class, 'edit'])->name('sop.edit');
    Route::put('/sop/{id}', [SopController::class, 'update'])->name('sop.update');
    Route::delete('/sop/{id}', [SopController::class, 'destroy'])->name('sop.destroy');

    //PAD
    Route::get('/pad', [PadController::class, 'index'])->name('pad.index');
    Route::get('/pad/create', [PadController::class, 'create'])->name('pad.create');
    Route::post('/pad', [PadController::class, 'store'])->name('pad.store');
    Route::get('/pad/edit/{id}', [PadController::class, 'edit'])->name('pad.edit');
    Route::put('/pad/{id}', [PadControllerc::class, 'update'])->name('pad.update');
    Route::delete('/pad/{id}', [PadController::class, 'destroy'])->name('pad.destroy');

    //Bansos
    Route::get('/bansos', [BansosController::class, 'index'])->name('bansos.index');
    Rpute::get('/bansos/create', [BansosController::class, 'create'])->name('bansos.create');
    Route::post('/bansos', [BansosController::class, 'store'])->name('bansos.store');
    Route::get('/bansos/edit/id}', [BansosController::class, 'edit'])->name('bansos.edit');
    Route::put('/bansos/{id}', [BansosController::class, 'update'])->name('bansos.update');
    Route::delete('/bansos/{id}', [BansosController::class, 'destroy'])->name('bansos.destroy');


});


//Check Level 2
Route::middleware(['auth', 'checklevel:2'])->group(function()
{
     //Dashboard
     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});

















// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['checklevel:1']], function () {
//         Route::get('/user', [UserController::class, 'userlist'])->name('userlist.index');
//         Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('userlist.edit');
//     });
//     Route::group(['middleware' => ['checklevel:2']], function () {
//         Route::resource('category', CategoryController::class);
//         Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('userlist.edit');
//     });
// });

