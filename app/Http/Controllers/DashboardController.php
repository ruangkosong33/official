<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Filedownload;
use App\Models\Auction;
use App\Models\Video;
use App\Models\User;
use App\Models\Division;
use App\Models\Employee;
use App\Models\Category;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $countVisitor = Visitor::count();
        $countGallery = Gallery::count();
        $countPost = Post::count();
        $countFiledownload = Filedownload::count();
        $countAuction = Auction::count();
        $countFilePublicInfo = $countFiledownload+$countAuction;
        $countVideo = Video::count();
        $countEmployee = Employee::count();
        $countDivision = Division::count();
        $countUser = User::count();

        $latestPost = Post::latest()->take(4)->get();

        return view('admin.pages.dashboard.index-dashboard',[
            'countVisitor'=>$countVisitor,
            'countGallery'=>$countGallery,
            'countPost'=>$countPost,
            'countFilePublicInfo'=>$countFilePublicInfo,
            'countVideo'=>$countVideo,
            'countEmployee'=>$countEmployee,
            'countDivision'=>$countDivision,
            'countUser'=>$countUser,
            'latestPost'=>$latestPost,
        ]);
    }

    public function getDataChartVisitor(){
        $now = Carbon::now();
        $visitors = Visitor::all();
        $months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Oct','Nov','Des'];
        $visitor = [0,0,0,0,0,0,0,0,0,0,0,0];
        for ($i=0; $i < count($months); $i++) {
            $visitor[$i] = Visitor::whereMonth('date',$i+1)->whereYear('date',$now->year)->count();
        }
        return response()->json([
            'months'=>$months,
            'visitor'=>$visitor,
        ], 200);
    }

    public function getDataChartArticles(){
        $now = Carbon::now();
        $months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Oct','Nov','Des'];
        $data['post'] = [0,0,0,0,0,0,0,0,0,0,0,0];
        $data['video'] = [0,0,0,0,0,0,0,0,0,0,0,0];
        $data['gallery'] = [0,0,0,0,0,0,0,0,0,0,0,0];
        for ($i=0; $i < count($months); $i++) {
            $data['post'][$i] = Post::whereMonth('created_at',$i+1)->whereYear('created_at',$now->year)->count();
            $data['video'][$i] = Video::whereMonth('created_at',$i+1)->whereYear('created_at',$now->year)->count();
            $data['gallery'][$i] = Gallery::whereMonth('created_at',$i+1)->whereYear('created_at',$now->year)->count();
        }
        return response()->json([
            'months'=>$months,
            'data'=>$data,
        ], 200);
    }

    public function getDataChartCategory()
    {
        $categories = Category::all();
        $dataChartKategori = [];
        foreach ($categories as $key => $category) {
            $dataChartKategori['labels'][] = $category->title_category;
            $count = $category->post()->count() + $category->gallery()->count();
			$dataChartKategori['data'][] = $count;
        }
        return response()->json($dataChartKategori, 200);
    }
}
