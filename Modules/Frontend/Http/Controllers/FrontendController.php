<?php

namespace Modules\Frontend\Http\Controllers;

use App\Lienhe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Slide;
use App\Loaicongnghe;
use App\Loaiduan;
use App\Loaisanpham;
use App\Tintuc;
use App\Congnghe;
use App\Sanpham;
use App\Duan;

class FrontendController extends Controller
{
    private $rooms;

    function __construct(Request $request)
    {
        $slide = Slide::with(['image'])->orderBy('id', 'desc')->get()->toArray();
        $loaicongnghe = Loaicongnghe::with(['image'])->orderBy('id', 'desc')->get()->toArray();
        $loaiduan = Loaiduan::orderBy('id', 'desc')->get()->toArray();
        $loaisanpham = Loaisanpham::with(['image'])->orderBy('id', 'desc')->get()->toArray();
        $tintuc = Tintuc::with(['image'])->orderBy('id', 'desc')->get()->toArray();

        view()->share('slide', $slide);
        view()->share('loaicongnghe', $loaicongnghe);
        view()->share('loaiduan', $loaiduan);
        view()->share('loaisanpham', $loaisanpham);
        view()->share('tintuc', $tintuc);
    }

    public function homepage(Request $request)
    {
        return view('frontend::pages.trangchu');
    }

    public function getLoaicongnghe(Request $request)
    {
        $loaicongngheDetail = Loaicongnghe::with(['image', 'congnghe' => function($q) {
            return $q->with(['image']);
        }])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('frontend::pages.loaicongnghe', compact('loaicongngheDetail'));
    }

    public function getCongnghe(Request $request)
    {
        $congnghe = Congnghe::with(['image', 'loaicongnghe'])
            ->where('id', $request->id)
            ->first()->toArray();
        $congnghelienquan = Congnghe::with(['image'])
            ->where('loaicongnghe_id', $congnghe['loaicongnghe']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('frontend::pages.chitietcongnghe', compact('congnghe', 'congnghelienquan'));
    }

    public function getLoaisanpham(Request $request)
    {
        $loaisanphamDetail = Loaisanpham::with(['image', 'sanpham' => function($q) {
            return $q->with(['image']);
        }])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('frontend::pages.loaisanpham', compact('loaisanphamDetail'));
    }

    public function getSanpham(Request $request)
    {
        $sanpham = Sanpham::with(['image', 'loaisanpham'])
            ->where('id', $request->id)
            ->first()->toArray();
        $sanphamlienquan = Sanpham::with(['image'])
            ->where('loaisanpham_id', $sanpham['loaisanpham']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('frontend::pages.chitietsanpham', compact('sanpham', 'sanphamlienquan'));
    }

    public function getLoaiduan(Request $request)
    {
        $loaiduanDetail = Loaiduan::with(['duan'])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('frontend::pages.loaiduan', compact('loaiduanDetail'));
    }

    public function getDuan(Request $request)
    {
        $duan = Duan::with(['loaiduan'])
            ->where('id', $request->id)
            ->first()->toArray();
        $duanlienquan = Duan::with(['image'])
            ->where('loaiduan_id', $duan['loaiduan']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('frontend::pages.chitietduan', compact('duan', 'duanlienquan'));
    }

    public function getTintuc(Request $request)
    {
        return view('frontend::pages.tintuc');
    }

    public function getTintucdetail(Request $request)
    {
        $tintucDetail = Tintuc::with(['image'])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('frontend::pages.chitiettintuc', compact('tintucDetail'));
    }



    public function getLienhethanhcong(Request $request)
    {
        return view('frontend::pages.lienhethanhcong');
    }

    public function getLienhe(Request $request)
    {
        return view('frontend::pages.lienhe');
    }

    public function postLienhe(Request $request)
    {
        $req = $request->all();
        $create = Lienhe::create($req);
        if($create)
            return redirect()->route('frontend.get.thanhcong');
        return view('frontend::pages.lienhe');
    }

    public function getSearch(Request $request)
    {
        $keyword = $request->keyword;
        $request->flashOnly(['keyword']);
        $key = preg_replace("/[^a-zA-Z0-9]+/", "", $keyword);

        $data = Product::with(['images'])
            ->where('title', 'like', '%'.$key.'%')
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('frontend::pages.search', compact('data','keyword'));
    }

}
