<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CitykabController;
use App\Http\Controllers\FilelawController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Bbh\Filesp2dController;
use App\Http\Controllers\Profil\EventController;
use App\Http\Controllers\Profil\IssueController;
use App\Http\Controllers\TransparencyController;
use App\Http\Controllers\Integrasi\SopController;
use App\Http\Controllers\Potention\PadController;
use App\Http\Controllers\Profil\LeaderController;
use App\Http\Controllers\Profil\VisionController;
use App\Http\Controllers\Integrasi\ApbdController;
use App\Http\Controllers\Integrasi\CityController;
use App\Http\Controllers\Integrasi\LppdController;
use App\Http\Controllers\Activity\BansosController;
use App\Http\Controllers\Integrasi\LkjipController;
use App\Http\Controllers\Integrasi\RenjaController;
use App\Http\Controllers\Integrasi\RpjmdController;
use App\Http\Controllers\Potention\AssetController;
use App\Http\Controllers\FiletransparencyController;
use App\Http\Controllers\Integrasi\SidataController;
use App\Http\Controllers\Infopublik\HostelController;
use App\Http\Controllers\Integrasi\FilesopController;
use App\Http\Controllers\Integrasi\RenstraController;
use App\Http\Controllers\Potention\FilepadController;
use App\Http\Controllers\Infopublik\AuctionController;
use App\Http\Controllers\Integrasi\FileapbdController;
use App\Http\Controllers\Infopublik\DownloadController;
use App\Http\Controllers\Profil\ServiceorderController;
use App\Http\Controllers\Profil\TaskfunctionController;
use App\Http\Controllers\Activity\RealisationController;
use App\Http\Controllers\Activity\ResponsibleController;
use App\Http\Controllers\Integrasi\ActionplanController;
use App\Http\Controllers\Profil\GoalobjectiveController;
use App\Http\Controllers\Organization\DivisionController;
use App\Http\Controllers\Organization\EmployeeController;
use App\Http\Controllers\Profil\PolicydirectionController;
use App\Http\Controllers\Infopublik\FiledownloadController;
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

Route::get('/', function () {
    return view('welcome');
});

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

    Route::get('/test', [TestController::class, 'index'])->name('test.index');
    Route::post('/test', [TestController::class, 'store'])->name('test.store');


    //UserList
    Route::get('/userlist', [UserController::class, 'userlist'])->name('userlist.index');
    Route::get('/userlist/edit/{id}', [UserController::class, 'edit'])->name('userlist.edit');
    Route::get('userlist/show/{id}', [UserController::class, 'show'])->name('userlist.show');
    Route::put('/userlist/{id}', [UserController::class, 'update'])->name('userlist.update');
    Route::delete('/userlist/{id}', [UserController::class, 'destroy'])->name('userlist.destroy');

    //PROFIL//
    //Taskfunction
    Route::get('/profil/taskfunction', [TaskfunctionController::class, 'index'])->name('taskfunction.index');
    Route::get('/profil/taskfunction/create', [TaskfunctionController::class, 'create'])->name('taskfunction.create');
    Route::post('/profil/taskfunction', [TaskfunctionController::class, 'store'])->name('taskfunction.store');
    Route::get('/profil/taskfunction/edit/{id}', [TaskfunctionController::class, 'edit'])->name('taskfunction.edit');
    Route::put('/profil/taskfunction/{id}', [TaskfunctionController::class, 'update'])->name('taskfunction.update');
    Route::delete('/profil/taskfunction/{id}', [TaskfunctionController::class, 'destroy'])->name('taskfunction.destroy');

    //Vision
    Route::get('/profil/vision', [VisionController::class, 'index'])->name('vision.index');
    Route::get('/profil/vision/create', [VisionController::class, 'create'])->name('vision.create');
    Route::post('/profil/vision', [VisionController::class, 'store'])->name('vision.store');
    Route::get('/profil/vision/edit/{id}', [VisionController::class, 'edit'])->name('vision.edit');
    Route::put('/profil/vision/{id}', [VisionController::class, 'update'])->name('vision.update');
    Route::delete('/profil/vision/{id}', [VisionController::class, 'destroy'])->name('vision.destroy');

    //Issue
    Route::get('/profil/issue/', [IssueController::class, 'index'])->name('issue.index');
    Route::get('/profil/issue/create', [IssueController::class, 'create'])->name('issue.create');
    Route::post('/profil/issue/', [IssueController::class, 'store'])->name('issue.store');
    Route::get('/profil/issue/edit/{id}', [IssueController::class, 'edit'])->name('issue.edit');
    Route::put('/profil/issue/{id}', [IssueController::class, 'update'])->name('issue.update');
    Route::delete('/profil/issue/{id}', [IssueController::class, 'destroy'])->name('issue.destroy');

    //Policy Direction
    Route::get('/profil/policydirection', [PolicydirectionController::class, 'index'])->name('policydirection.index');
    Route::get('/profil/policydirection/create', [PolicydirectionController::class, 'create'])->name('policydirection.create');
    Route::post('/profil/policydirection', [PolicydirectionController::class, 'store'])->name('policydirection.store');
    Route::get('/profil/policydirection/edit/{id}', [PolicydirectionController::class, 'edit'])->name('policydirection.edit');
    Route::put('/profil/policydirection/{id}', [PolicydirectionController::class, 'update'])->name('policydirection.update');
    Route::delete('/profil/policydirection/{id}', [PolicydirectionController::class, 'destroy'])->name('policydirection.destroy');

    //Goal Objective
    Route::get('/profil/goalobjective', [GoalobjectiveController::class, 'index'])->name('goalobjective.index');
    Route::get('/profil/goalobjective/create', [GoalobjectiveController::class, 'create'])->name('goalobjective.create');
    Route::post('/profil/goalobjective', [GoalobjectiveController::class, 'store'])->name('goalobjective.store');
    Route::get('/profil/goalobjective/edit/{id}', [GoalobjectiveController::class, 'edit'])->name('goalobjective.edit');
    Route::put('/profil/goalobjective/{id}', [GoalobjectiveController::class, 'update'])->name('goalobjective.update');
    Route::delete('/profil/goalobjective/{id}', [GoalobjectiveControlleR::class, 'destroy'])->name('goalobjective.destroy');

    //Formation History
    Route::get('/profil/formationhistory', [FormationhistoryController::class, 'index'])->name('formationhistory.index');
    Route::get('/profil/formationhistory/create', [FormationhistoryController::class, 'create'])->name('formationhistory.create');
    Route::post('/profil/formationhistory', [FormationhistoryController::class, 'store'])->name('formationhistory.store');
    Route::get('/profil/formationhistory/edit/{id}', [FormationhistoryController::class, 'edit'])->name('formationhistory.edit');
    Route::put('/profil/formationhistory/{id}', [FormationhistoryController::class, 'update'])->name('formationhistory.update');
    Route::delete('/profil/formationhistory/{id}', [FormationhistoryController::class, 'destroy'])->name('formationhistory.destroy');

    //Service Order
    Route::get('/profil/serviceorder', [ServiceorderController::class, 'index'])->name('serviceorder.index');
    Route::get('/profil/serviceorder/create', [ServiceorderController::class, 'create'])->name('serviceorder.create');
    Route::post('/profil/serviceorder', [ServiceorderController::class, 'store'])->name('serviceorder.store');
    Route::get('/profil/serviceorder/edit/{id}', [ServiceorderController::class, 'edit'])->name('serviceorder.edit');
    Route::put('/profil/serviceorder/{id}', [ServiceorderController::class, 'update'])->name('serviceorder.update');
    Route::delete('/profil/serviceorder/{id}', [ServiceorderController::class, 'destroy'])->name('serviceorder.destroy');

    //Leader
    Route::get('/profil/leader', [LeaderController::class, 'index'])->name('leader.index');
    Route::get('/profil/leader/create', [LeaderController::class, 'create'])->name('leader.create');
    Route::post('/profil/leader', [LeaderController::class, 'store'])->name('leader.store');
    Route::get('/profil/leader/edit/{id}', [LeaderController::class, 'edit'])->name('leader.edit');
    Route::put('/profil/leader/{id}', [LeaderController::class, 'update'])->name('leader.update');
    Route::get('/profil/leader/{id}', [LeaderController::class, 'destroy'])->name('leader.destroy');

    //Event
    Route::get('/profil/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/profil/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/profil/event', [EventController::class, 'store'])->name('event.store');
    Route::get('/profil/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/profil/event/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/profil/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

    //ORGANIZATION//
    //Division
    Route::get('/organization/division', [DivisionController::class, 'index'])->name('division.index');
    Route::get('/organization/division/create', [DivisionController::class, 'create'])->name('division.create');
    Route::post('/organization/division', [DivisionController::class, 'store'])->name('division.store');
    Route::get('/organization/division/edit/{id}', [DivisionController::class, 'edit'])->name('division.edit');
    Route::put('/organization/division/{id}', [DivisionController::class, 'update'])->name('division.update');
    Route::delete('/organization/division/{id}', [DivisionController::class, 'destroy'])->name('division.destroy');

    //Employee
    Route::get('/organization/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/organization/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/organization/employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/organization/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/organization/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/organization/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    Route::get('/organization/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');

    //ACTIVITY//
    //Realisasi
    Route::get('/activity/realisation', [RealisationController::class, 'index'])->name('realisation.index');
    Route::get('/activity/realisation/create', [RealisationController::class, 'create'])->name('realisation.create');
    Route::post('/activity/realisation', [RealisationController::class, 'store'])->name('realisation.store');
    Route::get('/activity/realisation/edit/{id}', [RealisationController::class, 'edit'])->name('realisation.edit');
    Route::put('/activity/realisation/{id}', [RealisationController::class, 'update'])->name('realisation.update');
    Route::delete('/activity/realisation/{id}', [RealisationController::class, 'destroy'])->name('realisation.destroy');
    Route::get('/activity/realisation/{realisation}', [RealisationController::class, 'download'])->name('realisation.download');
    
    //Responsible
    Route::get('/activity/responsible', [ResponsibleController::class, 'index'])->name('responsible.index');
    Route::get('/activity/responsible/create', [ResponsibleController::class, 'create'])->name('responsible.create');
    Route::post('/activity/responsible', [ResponsibleController::class, 'store'])->name('responsible.store');
    Route::get('/activity/responsible/edit/{id}', [ResponsibleController::class, 'edit'])->name('responsible.edit');
    Route::put('/activity/responsible/{id}', [ResponsibleController::class, 'update'])->name('responsible.update');
    Route::delete('/activity/responsible/{id}', [ResponsibleController::class, 'destroy'])->name('responsible.destroy');
    Route::get('/activity/responsible/{responsible}', [ResponsibleController::class, 'download'])->name('responsible.download');

    //Bansos
    Route::get('/activity/bansos', [BansosController::class, 'index'])->name('bansos.index');
    Route::get('/activity/bansos/create', [BansosController::class, 'create'])->name('bansos.create');
    Route::post('/activity/bansos', [BansosController::class, 'store'])->name('bansos.store');
    Route::get('/activity/bansos/edit/id}', [BansosController::class, 'edit'])->name('bansos.edit');
    Route::put('/activity/bansos/{id}', [BansosController::class, 'update'])->name('bansos.update');
    Route::delete('/activity/bansos/{id}', [BansosController::class, 'destroy'])->name('bansos.destroy');
    Route::get('/activity/bansos/{bansos}', [BansosController::class, 'download'])->name('bansos.download');

    //INFO PUBLIK//
    //Hostel
    Route::get('/infopublik/hostel', [HostelController::class, 'index'])->name('hostel.index');
    Route::get('/infopublik/hostel/create', [HostelController::class, 'create'])->name('hostel.create');
    Route::post('/infopublik/hostel', [HostelController::class, 'store'])->name('hostel.store');
    Route::get('/infopublik/hostel/edit/{hostel}', [HostelController::class, 'edit'])->name('hostel.edit');
    Route::put('/infopublik/hostel/{hostel}', [HostelController::class, 'update'])->name('hostel.update');
    Route::delete('/infopublik/hostel/{hostel}', [hostelController::class, 'destroy'])->name('hostel.destroy');

    //Auction
    Route::get('/infopublik/auction', [AuctionController::class, 'index'])->name('auction.index');
    Route::get('/infopublik/auction/create', [AuctionController::class, 'create'])->name('auction.create');
    Route::post('/infopublik/auction', [AuctionController::class, 'store'])->name('auction.store');
    Route::get('/infopublik/auction/edit/{auction}', [AuctionController::class, 'edit'])->name('auction.edit');
    Route::put('/infopublik/auction/{auction}', [AuctionController::class, 'update'])->name('auction.update');
    Route::delete('/infopublik/auction/{auction}', [AuctionController::class, 'destroy'])->name('auction.destroy');
    Route::get('/infopublik/auction/{auction}', [AuctionController::class, 'download'])->name('auction.download');

    //Download
    Route::get('/infopublik/download', [DownloadController::class, 'index'])->name('download.index');
    Route::get('/infopublik/download/create', [DownloadController::class, 'create'])->name('download.create');
    Route::post('/infopublik/download', [DownloadController::class, 'store'])->name('download.store');
    Route::get('/infopublik/download/edit/{download}', [DownloadController::class, 'edit'])->name('download.edit');
    Route::put('/infopublik/dowload/{download}', [DownloadController::class, 'update'])->name('download.update');
    Route::delete('/infopublik/download/{download}', [DownloadController::class, 'destroy'])->name('download.destroy');

    //File Download
    Route::get('/infopublik/{download}/filedownload', [FiledownloadController::class, 'index'])->name('filedownload.index');
    Route::get('/infopublik/{download}/filedownload/create', [FiledownloadController::class, 'create'])->name('filedownload.create');
    Route::post('/infopublik/{download}/filedownload', [FiledownloadController::class, 'store'])->name('filedownload.store');
    Route::get('/infopublik/filedownload/edit/{filedownload}', [FiledownloadController::class, 'edit'])->name('filedownload.edit');
    Route::put('/infopublik/filedownload/{filedownload}', [FiledownloadController::class, 'update'])->name('filedownload.update');
    Route::delete('/infopublik/filedownload/{filedownload}', [FiledownloadController::class, 'destroy'])->name('filedownload.destroy');
    Route::get('/infopublik/filedownload/{filedownload}', [FiledownloadController::class, 'download'])->name('filedownload.download');


    //INTEGRATION//
    //APBD
    Route::get('/integrasi/apbd', [ApbdController::class, 'index'])->name('apbd.index');
    Route::get('/integrasi/apbd/create', [ApbdController::class, 'create'])->name('apbd.create');
    Route::post('/integrasi/apbd', [ApbdController::class, 'store'])->name('apbd.store');
    Route::get('/integrasi/apbd/{apbd}', [ApbdController::class, 'edit'])->name('apbd.edit');
    Route::put('/integrasi/apbd/{apbd}', [ApbdController::class, 'update'])->name('apbd.update');
    Route::delete('/integrasi/apbd/{apbd}', [ApbdController::class, 'destroy'])->name('apbd.destroy');

    //File APBD
    Route::get('/integrasi/{apbd}/fileapbd', [FileapbdController::class, 'index'])->name('fileapbd.index');
    Route::get('/integrasi/{apbd}/fileapbd/create', [FileapbdController::class, 'create'])->name('fileapbd.create');
    Route::post('/integrasi/fileapbd/{apbd}', [FileapbdController::class, 'store'])->name('fileapbd.store');
    Route::get('/integrasi/fileapbd/edit/{fileapbd}', [FileapbdController::class, 'edit'])->name('fileapbd.edit');
    Route::put('/integrasi/fileapbd/{fileapbd}', [FileapbdController::class, 'update'])->name('fileapbd.update');
    Route::delete('/integrasi/fileapbd/{fileapbd}', [FileapbdController::class, 'destroy'])->name('fileapbd.destroy');
    Route::get('/integrasi/fileapbd/{fileapbd}', [FileapbdController::class, 'download'])->name('fileapbd.download');


    //SOP
    Route::get('/integrasi/sop', [SopController::class, 'index'])->name('sop.index');
    Route::get('/integrasi/sop/create', [SopController::class, 'create'])->name('sop.create');
    Route::post('/integrasi/sop', [SopController::class, 'store'])->name('sop.store');
    Route::get('/integrasi/sop/edit/{id}', [SopController::class, 'edit'])->name('sop.edit');
    Route::put('/integrasi/sop/{id}', [SopController::class, 'update'])->name('sop.update');
    Route::delete('/integrasi/sop/{id}', [SopController::class, 'destroy'])->name('sop.destroy');

    //File SOP
    Route::get('/integrasi/sop/{sop}/filesop', [FilesopController::class, 'index'])->name('filesop.index');
    Route::get('/integrasi/sop/{sop}/filesop/create', [FilesopController::class, 'create'])->name('filesop.create');
    Route::post('/integrasi/sop/{sop}/filesop', [FilesopController::class, 'store'])->name('filesop.store');
    Route::get('/integrasi/sop/filesop/edit/{filesop}', [FilesopController::class, 'edit'])->name('filesop.edit');
    Route::put('/integrasi/sop/filesop/{filesop}', [FilesopController::class, 'update'])->name('filesop.update');
    Route::delete('/integrasi/sop/filesop/{filesop}', [FilesopController::class, 'destroy'])->name('filesop.destroy');
    Route::get('/integrasi/sop/filesop/{filesop}', [FilesopController::class, 'download'])->name('filesop.download');

    //Actionplan
    Route::get('/integrasi/actionplan', [ActionplanController::class, 'index'])->name('actionplan.index');
    Route::get('/integrasi/actionplan/create', [ActionplanController::class, 'create'])->name('actionplan.create');
    Route::post('/integrasi/actionplan', [ActionplanController::class, 'store'])->name('actionplan.store');
    Route::get('/integrasi/actionplan/edit/{id}', [ActionplanController::class, 'edit'])->name('actionplan.edit');
    Route::put('/integrasi/actionplan/{id}', [ActionplanController::class, 'update'])->name('actionplan.update');
    Route::delete('/integrasi/actionplan/{id}', [ActionplanController::class, 'destroy'])->name('actionplan.destroy');

    //Rencana Kerja
    Route::get('/integrasi/renja', [RenjaController::class, 'index'])->name('renja.index');
    Route::get('/integrasi/renja/create', [RenjaController::class, 'create'])->name('renja.create');
    Route::post('/integrasi/renja', [RenjaController::class, 'store'])->name('renja.store');
    Route::get('/integrasi/renja/edit/{id}', [RenjaController::class, 'edit'])->name('renja.edit');
    Route::put('/integrasi/renja/{id}', [RenjaController::class, 'update'])->name('renja.update');
    Route::delete('/integrasi/renja/{id}', [RenjaController::class, 'destroy'])->name('renja.destroy');
    Route::get('/integrasi/renja/{renja}', [RenjaController::class, 'download'])->name('renja.download');

    //Rencana Strategi
    Route::get('/integrasi/renstra', [RenstraController::class, 'index'])->name('renstra.index');
    Route::get('/integrasi/renstra/create', [RenstraController::class, 'create'])->name('renstra.create');
    Route::post('/integrasi/renstra', [RenstraController::class, 'store'])->name('renstra.store');
    Route::get('/integrasi/renstra/edit/{id}', [RenstraController::class, 'edit'])->name('renstra.edit');
    Route::put('/integrasi/renstra/{id}', [RenstraController::class, 'update'])->name('renstra.update');
    Route::delete('/integrasi/renstra/{id}', [RenstraController::class, 'destroy'])->name('renstra.destroy');
    Route::get('/integrasi/renstra/{renstra}', [RenstraController::class, 'download'])->name('renstra.download');

    //RPJMD
    Route::get('/integrasi/rpjmd', [RpjmdController::class, 'index'])->name('rpjmd.index');
    Route::get('/integrasi/rpjmd/create', [RpjmdController::class, 'create'])->name('rpjmd.create');
    Route::post('/integrasi/rpjmd', [RpjmdController::class, 'store'])->name('rpjmd.store');
    Route::get('/integrasi/rpjmd/edit/{id}', [RpjmdController::class, 'edit'])->name('rpjmd.edit');
    Route::put('/integrasi/rpjmd/{id}', [RpjmdController::class, 'update'])->name('rpjmd.update');
    Route::delete('/integrasi/rpjmd/{id}', [RpjmdController::class, 'destroy'])->name('rpjmd.destroy');
    Route::get('/integrasi/rpjmd/{rpjmd}', [RpjmdController::class, 'download'])->name('rpjmd.download');

    //LJKIP
    Route::get('/integrasi/lkjip', [LkjipController::class, 'index'])->name('lkjip.index');
    Route::get('/integrasi/lkjip/create', [LkjipController::class, 'create'])->name('lkjip.create');
    Route::post('/integrasi/lkjip', [LkjipController::class, 'store'])->name('lkjip.store');
    Route::get('/integrasi/lkjip/edit/{id}', [LkjipController::class, 'edit'])->name('lkjip.edit');
    Route::put('/integrasi/lkjip/{id}', [LkjipController::class, 'update'])->name('lkjip.update');
    Route::delete('/integrasi/lkjip/{id}', [LkjipController::class, 'destroy'])->name('lkjip.destroy');
    Route::get('/integrasi/lkjip/{lkjip}', [LkjipController::class, 'download'])->name('lkjip.download');

    //LPPD
    Route::get('/integrasi/lppd', [LppdController::class, 'index'])->name('lppd.index');
    Route::get('/integrasi/lppd/create', [LppdController::class, 'create'])->name('lppd.create');
    Route::post('/integrasi/lppd', [LppdController::class, 'store'])->name('lppd.store');
    Route::get('/integrasi/lppd/edit/{id}', [LppdController::class, 'edit'])->name('lppd.edit');
    Route::put('/integrasi/lppd/{id}', [LppdController::class, 'update'])->name('lppd.update');
    Route::delete('/integrasi/lppd/{id}', [LppdController::class, 'destroy'])->name('lppd.destroy');
    Route::get('/integrasi/lppd/{lppd}', [LppdController::class, 'download'])->name('lppd.download');

    //SIDATA
    Route::get('/integrasi/sidata', [SidataController::class, 'index'])->name('sidata.index');
    Route::get('/integrasi/sidata/create', [SidataController::class, 'create'])->name('sidata.create');
    Route::post('/integrasi/sidata', [SidataController::class, 'store'])->name('sidata.store');
    Route::get('/integrasi/sidata/edit/{id}', [SidataController::class, 'edit'])->name('sidata.edit');
    Route::put('/integrasi/sidata/{id}', [SidataController::class, 'update'])->name('sidata.update');
    Route::delete('/integrasi/sidata/{id}', [SidataController::class, 'destroy'])->name('sidata.destroy');
    Route::get('/integrasi/sidata/{sidata}', [SidataController::class, 'download'])->name('sidata.download');

    //POTENTION//
    //PAD
    Route::get('/potention/pad', [PadController::class, 'index'])->name('pad.index');
    Route::get('/potention/pad/create', [PadController::class, 'create'])->name('pad.create');
    Route::post('/potention/pad', [PadController::class, 'store'])->name('pad.store');
    Route::get('/potention/pad/edit/{id}', [PadController::class, 'edit'])->name('pad.edit');
    Route::put('/potention/pad/{id}', [PadController::class, 'update'])->name('pad.update');
    Route::delete('/potention/pad/{id}', [PadController::class, 'destroy'])->name('pad.destroy');

    //File PAD
    Route::get('/potention/{pad}/filepad', [FilepadController::class, 'index'])->name('filepad.index');
    Route::get('/potention/{pad}/filepad/create', [FilepadController::class, 'create'])->name('filepad.create');
    Route::post('/potention/{pad}/filepad', [FilepadController::class, 'store'])->name('filepad.store');
    Route::get('/potention/filepad/edit/{filepad}', [FilepadController::class, 'edit'])->name('filepad.edit');
    Route::put('/potention/filepad/{filepad}/', [FilepadController::class, 'update'])->name('filepad.update');
    Route::delete('/potention/filepad/{filepad}', [FilepadController::class, 'destroy'])->name('filepad.destroy');
    Route::get('/potention/filepad/{filepad}', [FilepadController::class, 'download'])->name('filepad.download');

    //Asset
    Route::get('/potention/asset', [AssetController::class, 'index'])->name('asset.index');
    Route::get('/potention/asset/create', [AssetController::class, 'create'])->name('asset.create');
    Route::post('/potention/asset', [AssetController::class, 'store'])->name('asset.store');
    Route::get('/potention/asset/edit/{id}', [AssetController::class, 'edit'])->name('asset.edit');
    Route::put('/potention/asset/{id}', [AssetController::class, 'update'])->name('asset.update');
    Route::delete('/potention/asset/{id}', [AssetController::class, 'destroy'])->name('asset.destroy');
    Route::get('/potention/asset/{asset}', [AssetController::class, 'download'])->name('asset.download');

    //CATEGORY//
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //POST//
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class ,'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::post('upload', [PostController::class, 'upload'])->name('post.upload');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    //CITYKAB//
    Route::get('/citykab', [CitykabController::class, 'index'])->name('citykab.index');
    Route::get('/citykab/create', [CitykabController::class ,'create'])->name('citykab.create');
    Route::post('/citykab', [CitykabController::class, 'store'])->name('citykab.store');
    Route::get('/citykab/edit/{citykab}', [CitykabController::class, 'edit'])->name('citykab.edit');
    Route::put('/citykab/{citykab}', [CitykabController::class, 'update'])->name('citykab.update');
    Route::delete('/citykab/{citykab}', [CitykabController::class, 'destroy'])->name('citykab.destroy');

    //TRANSPARANSI
    Route::get('/transparency', [TransparencyController::class ,'index'])->name('transparency.index');
    Route::get('/transparency/create', [TransparencyController::class, 'create'])->name('transparency.create');
    Route::post('/transparency', [TransparencyController::class, 'store'])->name('transparency.store');
    Route::get('/transparency/{transparency}/edit', [TransparencyController::class, 'edit'])->name('transparency.edit');
    Route::put('/transprency/{transparency}', [TransparencyController::class, 'update'])->name('transparency.update');
    Route::delete('/transparency/{transparency}', [TransparencyController::class, 'destroy'])->name('transparency.destroy');

    //FILE TRANSPARANSI//
    Route::get('/transparency/{transparency}/filetransparency', [FiletransparencyController::class, 'index'])->name('filetransparency.index');
    Route::get('/transparency/{transparency}/filetransparency/create', [FiletransparencyController::class, 'create'])->name('filetransparency.create');
    Route::post('/transparency/{transparency}/filetransparency', [FiletransparencyController::class, 'store'])->name('filetransparency.store');
    Route::get('/transparency/filetransparency/{filetransparency}/edit', [FiletransparencyController::class, 'edit'])->name('filetransparency.edit');
    Route::put('/transparency/filetransparency{filetransparency}', [FiletransparencyController::class, 'update'])->name('filetransparency.update');
    Route::delete('/transparency/filetransparency/{filetransparency}', [FiletransparencyController::class, 'destroy'])->name('filetransparency.destroy');
    Route::get('/transparency/filetransparency/{filetransparency}', [FiletransparencyController::class, 'download'])->name('filetransparency.download');

    //BANNER//
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

    //Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery' , [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    //VIDEO//
    Route::get('/video', [VideoController::class, 'index'])->name('video.index');
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video' , [VideoController::class, 'store'])->name('video.store');
    Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('/video/{id}', [VideoController::class, 'destroy'])->name('video.destroy');

    //LAW//
    //Law
    Route::get('/law', [LawController::class, 'index'])->name('law.index');
    Route::get('law/create', [LawController::class, 'create'])->name('law.create');
    Route::post('/law', [LawController::class, 'store'])->name('law.store');
    Route::get('/law/edit/{law}', [LawController::class, 'edit'])->name('law.edit');
    Route::put('/law/{law}', [LawController::class, 'update'])->name('law.update');
    Route::delete('/law/{law}', [LawController::class, 'destroy'])->name('law.destroy');

    //Filelaw
    Route::get('/law/{law}/filelaw', [FilelawController::class, 'index'])->name('filelaw.index');
    Route::get('/law/{law}/filelaw/create', [FilelawController::class, 'create'])->name('filelaw.create');
    Route::post('/law/{law}/filelaw', [FilelawController::class, 'store'])->name('filelaw.store');
    Route::get('/law/filelaw/edit/{filelaw}', [FilelawController::class, 'edit'])->name('filelaw.edit');
    Route::put('/law/filelaw/{filelaw}', [FilelawController::class, 'update'])->name('filelaw.update');
    Route::delete('/law/filelaw/{filelaw}', [FilelawController::class, 'destroy'])->name('filelaw.destroy');
    Route::get('/law/filelaw/{filelaw}', [FilelawController::class, 'download'])->name('filelaw.download');

    //Belanja Bagi Hasil( BBH )//
    //File SP2D
    Route::get('/bbh/filesp2d', [Filesp2dController::class, 'index'])->name('filesp2d.index');
    Route::get('/bbh/filesp2d/create', [Filesp2dController::class, 'create'])->name('filesp2d.create');
    Route::post('/bbh/filesp2d', [Filesp2dController::class, 'store'])->name('filesp2d.store');
    Route::get('/bbh/filesp2d/edit/{sp2d}', [Filesp2dController::class, 'edit'])->name('filesp2d.edit');
    Route::put('/bbh/filesp2d/{sp2d}', [Filesp2dController::class, 'update'])->name('filesp2d.update');
    Route::delete('/bbh/filesp2d/{sp2d}', [Filesp2dController::class, 'destroy'])->name('filesp2d.destroy');
    Route::get('/bbh/filesp2d/{sp2d}', [Filesp2dControllerr::class, 'download'])->name('filesp2d.download');

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

