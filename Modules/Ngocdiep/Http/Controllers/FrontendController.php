<?php

namespace Modules\Ngocdiep\Http\Controllers;

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
use App\Section;
use App\User;
use App\Notifications\ToUser;
use App\Notifications\ToAdmin;

class FrontendController extends Controller
{
    protected $info;
    protected $lang;
    function __construct(Request $request)
    {
        $this->lang = $request->cookie('temp-lang') ? $request->cookie('temp-lang') : 'vi';
        \App::setLocale($this->lang);
        if($this->lang == 'en') {
            $title = 'title_en';
            $noidung = 'noidung_en';
            $description = 'description_en';
            $gioithieu = 'gioithieu_en';
            $tuyendung = 'tuyendung_en';
            $tencongty = 'tencongty_en';
        } elseif ($this->lang == 'vi') {
            $title = 'title';
            $noidung = 'noidung';
            $description = 'description';
            $gioithieu = 'gioithieu';
            $tuyendung = 'tuyendung';
            $tencongty = 'tencongty';
        }

        $slide = Slide::with(['image'])
            ->where('active', '!=', '0')
            ->orderBy('id', 'desc')
            ->get()->toArray();
        $loaicongnghe = Loaicongnghe::with(['image', 'congnghe' => function($q) {
            return $q->with(['image'])->orderBy('id', 'desc');
        }])->orderBy('id', 'desc')->get()->toArray();
        $loaiduan = Loaiduan::with(['duan' => function($q) {
            return $q->with(['image'])->orderBy('id', 'desc');
        }])->orderBy('id', 'desc')->get()->toArray();
        $loaisanpham = Loaisanpham::with(['image', 'sanpham' => function($q) {
            return $q->with(['image'])->orderBy('id', 'desc');
        }])->orderBy('id', 'desc')->get()->toArray();
        $tintuc = Tintuc::with(['image'])->orderBy('id', 'desc')->get()->toArray();
        $info = User::where('id', '1')->first()->toArray();
        $this->info = $info;

        $section = [];
        $sections = Section::with('image')->get();
        foreach($sections as $key=>$item) {
            $section[$item->position][$key]['title'] = $item->title;
            $section[$item->position][$key]['title_en'] = $item->title_en;
            $section[$item->position][$key]['video'] = $item->video;
            $section[$item->position][$key]['link'] = $item->link;
            $section[$item->position][$key]['image'] = asset('/') . $item->image->url;
        }

        view()->share('slide', $slide);
        view()->share('loaicongnghe', $loaicongnghe);
        view()->share('loaiduan', $loaiduan);
        view()->share('loaisanpham', $loaisanpham);
        view()->share('tintuc', $tintuc);
        view()->share('title', $title);
        view()->share('noidung', $noidung);
        view()->share('description', $description);
        view()->share('gioithieu', $gioithieu);
        view()->share('tuyendung', $tuyendung);
        view()->share('info', $info);
        view()->share('section', $section);
        view()->share('tencongty', $tencongty);
    }

    public function homepage(Request $request)
    {
        $duans = Duan::with(['image'])
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get()->toArray();

        $count = $this->updateCount();

        return view('ngocdiep::pages.trangchu', compact('duans', 'count'));
    }

    public function updateCount()
    {
        $user = User::where('id', '1')->first();
        $user->count = $user->count + 1;
        $user->save();
        return $user->count;
    }

    public function getCount() {
        return $user = User::where('id', '1')->first()->count;
    }

    public function getLoaicongnghe(Request $request)
    {
        $loaicongngheDetail = Loaicongnghe::with(['image', 'congnghe' => function($q) {
            return $q->with(['image']);
        }])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('ngocdiep::pages.loaicongnghe', compact('loaicongngheDetail'));
    }

    public function getCongnghe(Request $request)
    {
        $congnghe = Congnghe::with(['image', 'loaicongnghe'])
            ->where('id', $request->id)
            ->first()->toArray();

        $congnghelienquan = Congnghe::with(['image'])
            ->where('id', '!=', $congnghe['id'])
            ->where('loaicongnghe_id', $congnghe['loaicongnghe']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('ngocdiep::pages.chitietcongnghe', compact('congnghe', 'congnghelienquan'));
    }

    public function getLoaisanpham(Request $request)
    {
        $loaisanphamDetail = Loaisanpham::with(['image', 'sanpham' => function($q) {
            return $q->with(['image']);
        }])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('ngocdiep::pages.loaisanpham', compact('loaisanphamDetail'));
    }

    public function getSanpham(Request $request)
    {
        $sanpham = Sanpham::with(['image', 'loaisanpham'])
            ->where('id', $request->id)
            ->first()->toArray();
        $sanphamlienquan = Sanpham::with(['image'])
            ->where('id', '!=', $sanpham['id'])
            ->where('loaisanpham_id', $sanpham['loaisanpham']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('ngocdiep::pages.chitietsanpham', compact('sanpham', 'sanphamlienquan'));
    }

    public function getLoaiduan(Request $request)
    {
        $loaiduanDetail = Loaiduan::with(['duan' => function($q) {
            return $q->with(['image'])->orderBy('id', 'desc');
        }])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('ngocdiep::pages.loaiduan', compact('loaiduanDetail'));
    }

    public function getDuan(Request $request)
    {
        $duan = Duan::with(['loaiduan', 'image'])
            ->where('id', $request->id)
            ->first()->toArray();
        $duanlienquan = Duan::with(['image'])
            ->where('id', '!=', $duan['id'])
            ->where('loaiduan_id', $duan['loaiduan']['id'])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get()->toArray();
        return view('ngocdiep::pages.chitietduan', compact('duan', 'duanlienquan'));
    }

    public function getTintuc(Request $request)
    {
        $tintucs = Tintuc::with(['image'])->orderBy('id', 'desc')->paginate(5);

        return view('ngocdiep::pages.tintuc', compact('tintucs'));
    }

    public function getTintucdetail(Request $request)
    {
        $tintucDetail = Tintuc::with(['image'])
            ->where('id', $request->id)
            ->first()->toArray();
        return view('ngocdiep::pages.chitiettintuc', compact('tintucDetail'));
    }


    public function getLienhethanhcong(Request $request)
    {
        return view('ngocdiep::pages.lienhethanhcong');
    }

    public function getLienhe(Request $request)
    {
        return view('ngocdiep::pages.lienhe');
    }

    public function postLienhe(Request $request)
    {
        $req = $request->all();
        $create = Lienhe::create($req);
        if($create)
        {
            $this->sendMailUser($request->email, $request->all());
            $this->sendMailAdmin(($this->info)['emailcongty'], $request->all());

            return redirect()->route('get.thanhcong');

        }
        return view('ngocdiep::pages.lienhe');
    }

    public function getSearch(Request $request)
    {
        $keyword = $request->keyword;
        $request->flashOnly(['keyword']);
        $key = preg_replace("/[^a-zA-Z0-9]+/", "", $keyword);

        $data = Congnghe::with(['image'])
            ->where('title', 'like', '%'.$key.'%')
            ->orWhere('description', 'like', '%'.$key.'%')
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('ngocdiep::pages.search', compact('data','keyword'));
    }

    public function getGioithieu(Request $request)
    {
        $data = User::where('id', '1')->first()->toArray();
        return view('ngocdiep::pages.gioithieu', compact('data'));
    }


    public function sendMailUser($email, $data)
    {
        $user = new User();
        $user->email = $email;
        $user->notify(new ToUser($data));
    }

    public function sendMailAdmin($email, $data)
    {
        $user = new User();
        $user->email = $email;
        $user->notify(new ToAdmin($data));
    }

    public function getSitemap(Request $request)
    {
        $data = '';
        return view('ngocdiep::pages.sitemap', compact('data'));
    }

    public function getCatalogs(Request $request) {

        $data_log = Sanpham::orderBy('id', 'desc')
            ->get()->toArray();

        return view('ngocdiep::pages.catalogs', compact('data_log'));
    }

    public function getTuyendung(Request $request)
    {
        $data = User::where('id', '1')->first()->toArray();
        return view('ngocdiep::pages.tuyendung', compact('data'));
    }

}
