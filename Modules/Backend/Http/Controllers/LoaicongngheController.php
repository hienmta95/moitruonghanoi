<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use App\Loaicongnghe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Backend\Components\ImageFile;
use DataTables;

class LoaicongngheController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::loaicongnghe.index');
    }

    public function indexData()
    {
        $loaicongnghes = Loaicongnghe::with(['image'])->get();
        return DataTables::of($loaicongnghes)
            ->addColumn('image',function ($row){
                $url = $row->image ? $row->image->url : "";
                return "<img class='index-images' src='".asset('/') .$url."' alt=''>";
            })
            ->editColumn('description',function ($row){
                return "<p>". substr($row->description, 0, 100) ."</p>";
            })
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.loaicongnghe.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.loaicongnghe.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.loaicongnghe.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button loaicongnghe="submit" class="submit-with-icon">
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
        return view('backend::loaicongnghe.create');
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
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageFile = new ImageFile();
            $image_id = $imageFile->saveImage($file);
        }

        $req = $request->all();
        $loaicongnghe = Loaicongnghe::create(array_merge($req, ['image_id' => $image_id]));

        return redirect()->route('backend.loaicongnghe.show', $loaicongnghe->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $loaicongnghe = Loaicongnghe::with(['image'])->find($id);
        if($loaicongnghe)
            return view('backend::loaicongnghe.show', compact(['loaicongnghe']));
        return redirect()->route('backend.loaicongnghe.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $loaicongnghe = Loaicongnghe::with(['image'])->find($id);
        if($loaicongnghe)
            return view('backend::loaicongnghe.update', compact(['loaicongnghe']));
        return redirect()->route('backend.loaicongnghe.index');
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
        ]);
        $loaicongnghe = Loaicongnghe::find($id);

        if($loaicongnghe) {
            if ($request->hasFile('image')) {
                $file = $request->image;
                $imageFile = new ImageFile();
                $image_id = $imageFile->updateImage($file, $loaicongnghe->image_id);
            } else {
                $image_id = $request->image_old;
            }
            $loaicongnghe->title = $request->title;
            $loaicongnghe->title_en = $request->title_en;
            $loaicongnghe->slug = $request->slug;
            $loaicongnghe->image_id = $image_id;
            $loaicongnghe->description = $request->description;
            $loaicongnghe->description_en = $request->description_en;
            $loaicongnghe->save();

            return redirect()->route('backend.loaicongnghe.show', $loaicongnghe->id);
        }
        return redirect()->route('backend.loaicongnghe.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $loaicongnghe = Loaicongnghe::find($id);
        $image_id = $loaicongnghe->image_id;
        $imageFile = new ImageFile();
        $image_delete = $imageFile->deleteImage($image_id);
        $loaicongnghe->delete();

        return redirect()->route('backend.loaicongnghe.index');
    }

}
