<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Auction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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
            'file_auction'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_auction'))
        {
            $file=$request->file('file_auction');
            $extension=$file->getClientOriginalName();
            $auctions=$extension;
            $file->move('uploads/file-lelang', $auctions);
        }

        $auction=Auction::create([
            'title_auction'=>$request->title_auction,
            'slug'=>Str::slug($request->title_auction),
            'file_auction'=>$auctions,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('auction.index');
    }

    public function edit(Auction $auction)
    {
        return view('admin.pages.auction.edit-auction', ['auction'=>$auction]);
    }

    public function update(Request $request, Auction $auction)
    {
        $this->validate($request,[
            'title_auction'=>'required',
            'file_auction'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_auction'))
        {
            $file=$request->file('file_auction');
            $extension=$file->getClientOriginalName();
            $auctions=$extension;
            $file->move('uploads/file-lelang', $auctions);
        }

        $auction->update([
            'title_auction'=>$request->title_auction,
            'slug'=>Str::slug($request->title_auction),
            'file_auction'=>$auctions,
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

    public function download(Auction $auction)
    {
        $filepath=public_path("uploads/file-lelang/{$auction->file_auction}");

        return response()->download($filepath);
    }
}
