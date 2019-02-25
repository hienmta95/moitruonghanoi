<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use App\Congnghe;
use App\Loaicongnghe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Backend\Components\ImageFile;
use DataTables;

class CongngheController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::congnghe.index');
    }

    public function indexData()
    {
        $congnghes = Congnghe::with(['image', 'loaicongnghe'])->get();
        return DataTables::of($congnghes)
            ->addColumn('image',function ($row){
                $url = $row->image ? $row->image->url : "";
                return "<img class='index-images' src='".asset('/') .$url."' alt=''>";
            })
            ->editColumn('description',function ($row){
                return "<p>". substr($row->description, 0, 100) ."</p>";
            })
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.congnghe.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.congnghe.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.congnghe.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button congnghe="submit" class="submit-with-icon">
                   <span class="glyphicon glyphicon-trash"></span>
                </button>
            </form>';
            })
            ->rawColumns(['action' => 'action', 'description' => 'description', 'image' => 'image'])
            ->addIndexColumn()
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $loaicongnghe = LoaiCongnghe::all();
        return view('backend::congnghe.create', compact('loaicongnghe'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_en' => 'required',
            'slug' => 'required',
            'noidung' => 'required',
            'noidung_en' => 'required',
            'loaicongnghe_id' => 'required',
            'image' => 'required',
        ]);

        $image_id = 0;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageFile = new ImageFile();
            $image_id = $imageFile->saveImage($file);
        }

        $req = $request->all();
        $congnghe = $image_id != 0 ? Congnghe::create(array_merge($req, ['image_id' => $image_id])) : Congnghe::create($req);

        return redirect()->route('backend.congnghe.show', $congnghe->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $congnghe = Congnghe::with(['image', 'loaicongnghe'])->find($id);
        if($congnghe)
            return view('backend::congnghe.show', compact(['congnghe']));
        return redirect()->route('backend.congnghe.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $congnghe = Congnghe::with(['image', 'loaicongnghe'])->find($id);
        $loaicongnghe = Loaicongnghe::all();
        if($congnghe)
            return view('backend::congnghe.update', compact(['congnghe', 'loaicongnghe']));
        return redirect()->route('backend.congnghe.index');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'title' => 'required',
            'title_en' => 'required',
            'slug' => 'required',
            'noidung' => 'required',
            'noidung_en' => 'required',
        ]);
        $congnghe = Congnghe::find($id);

        if($congnghe) {
            if ($request->hasFile('image')) {
                $file = $request->image;
                $imageFile = new ImageFile();
                $image_id = $imageFile->updateImage($file, $congnghe->image_id);
            } else {
                $image_id = $request->image_old;
            }
            $congnghe->title = $request->title;
            $congnghe->title_en = $request->title_en;
            $congnghe->slug = $request->slug;
            $congnghe->loaicongnghe_id = $request->loaicongnghe_id;
            $congnghe->noidung = $request->noidung;
            $congnghe->noidung_en = $request->noidung_en;
            $congnghe->image_id = $image_id;
            $congnghe->description_en = $request->description_en;
            $congnghe->save();

            return redirect()->route('backend.congnghe.show', $congnghe->id);
        }
        return redirect()->route('backend.congnghe.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $congnghe = Congnghe::find($id);
        $image_id = $congnghe->image_id;
        $imageFile = new ImageFile();
        $image_delete = $imageFile->deleteImage($image_id);
        $congnghe->delete();

        return redirect()->route('backend.congnghe.index');
    }

}
