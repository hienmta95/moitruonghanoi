<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use App\Duan;
use App\Loaiduan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Backend\Components\ImageFile;
use DataTables;

class DuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::duan.index');
    }

    public function indexData()
    {
        $duans = Duan::with(['image', 'loaiduan'])->get();
        return DataTables::of($duans)
            ->addColumn('image',function ($row){
                $url = $row->image ? $row->image->url : "";
                return "<img class='index-images' src='".asset('/') .$url."' alt=''>";
            })
            ->editColumn('description',function ($row){
                return "<p>". substr($row->description, 0, 100) ."</p>";
            })
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.duan.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.duan.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.duan.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button duan="submit" class="submit-with-icon">
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
        $loaiduan = Loaiduan::all();
        return view('backend::duan.create', compact('loaiduan'));
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
            'loaiduan_id' => 'required',
            'image' => 'required',
        ]);

        $image_id = 0;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageFile = new ImageFile();
            $image_id = $imageFile->saveImage($file);
        }

        $req = $request->all();
        $duan = $image_id != 0 ? duan::create(array_merge($req, ['image_id' => $image_id])) : duan::create($req);

        return redirect()->route('backend.duan.show', $duan->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $duan = Duan::with(['image', 'loaiduan'])->find($id);
        if($duan)
            return view('backend::duan.show', compact(['duan']));
        return redirect()->route('backend.duan.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $duan = Duan::with(['image', 'loaiduan'])->find($id);
        $loaiduan = Loaiduan::all();
        if($duan)
            return view('backend::duan.update', compact(['duan', 'loaiduan']));
        return redirect()->route('backend.duan.index');
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
        $duan = Duan::find($id);

        if($duan) {
            if ($request->hasFile('image')) {
                $file = $request->image;
                $imageFile = new ImageFile();
                $image_id = $imageFile->updateImage($file, $duan->image_id);
            } else {
                $image_id = $request->image_old;
            }
            $duan->title = $request->title;
            $duan->title_en = $request->title_en;
            $duan->slug = $request->slug;
            $duan->loaiduan_id = $request->loaiduan_id;
            $duan->noidung = $request->noidung;
            $duan->noidung_en = $request->noidung_en;
            $duan->image_id = $image_id;
            $duan->description = $request->description;
            $duan->description_en = $request->description_en;
            $duan->save();

            return redirect()->route('backend.duan.show', $duan->id);
        }
        return redirect()->route('backend.duan.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $duan = Duan::find($id);
        $image_id = $duan->image_id;
        $imageFile = new ImageFile();
        $image_delete = $imageFile->deleteImage($image_id);
        $duan->delete();

        return redirect()->route('backend.duan.index');
    }

}
