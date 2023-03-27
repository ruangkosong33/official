<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Auction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuctionController extends Controller
{
    public function index()
    {
        $auction=Auction::latest()->get();

        return view('admin.pages.auction.index-auction', ['auction'=>$auction]);
    }

    public function create()
    {
        return view('admin.pages.auction.create-auction');
    }

    public function store(Request $request)
    {
        $auction=$request->validate([
            'title_auction'=>'required',
            'file_auction'=>'mimes:pdf|max:3000',
        ]);

        if($request->file('file_auction'))
        {
            $pf=$request->file('file_auction');
            $extension=$file->getClientOriginalName();
            $ex=$extension;
            $pf->move('/uploads/file-auction/', $pf);
        }

        $auction=Auction::create([
            'title_auction'=>$request->title_auction,
            'slug'=>Str::slug($request->title_auction),
            'file_auction'=>$pf,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('auction.index');
    }

    public function edit(Auction $auction)
    {
        return view('admin.pages.auction.edit-auction', ['auction'=>$auction]);
    }

    public function update(Request $request)
    {
        $auction=$request->validate([
            'title_hostel'=>'required',
            'file_auction'=>'mimes:pdf|max:3000',
        ]);

        if($request->file('file_auction'))
        {
            $pf=$request->file('file_auction');
            $extension=$file->getClientOriginalName();
            $ex=$extension;
            $pf->move('/uploads/file-auction/', $pf);
        }

        $auction->update([
            'title_auction'=>$request->title_auction,
            'slug'=>Str::slug($request->title_auction),
            'file_auction'=>$pf,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('auction.index');
    }

    public function destroy(Auction $auction)
    {
        $auction=Auction::where('id', $auction->id);

        $auction->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('auction.index');
    }

}
