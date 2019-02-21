<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use App\Sanpham;
use App\Loaisanpham;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Backend\Components\ImageFile;
use DataTables;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::sanpham.index');
    }

    public function indexData()
    {
        $sanphams = Sanpham::with(['image', 'loaisanpham'])->get();
        return DataTables::of($sanphams)
            ->addColumn('image',function ($row){
                $url = $row->image ? $row->image->url : "";
                return "<img class='index-images' src='".asset('/') .$url."' alt=''>";
            })
            ->editColumn('description',function ($row){
                return "<p>". substr($row->description, 0, 100) ."</p>";
            })
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.sanpham.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.sanpham.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.sanpham.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button sanpham="submit" class="submit-with-icon">
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
        $loaisanpham = Loaisanpham::all();
        return view('backend::sanpham.create', compact('loaisanpham'));
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
            'slug' => 'required',
            'noidung' => 'required',
            'loaisanpham_id' => 'required',
        ]);

        $image_id = 0;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageFile = new ImageFile();
            $image_id = $imageFile->saveImage($file);
        }

        $req = $request->all();
        $sanpham = $image_id != 0 ? Sanpham::create(array_merge($req, ['image_id' => $image_id])) : Sanpham::create($req);

        return redirect()->route('backend.sanpham.show', $sanpham->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $sanpham = Sanpham::with(['image', 'loaisanpham'])->find($id);
        if($sanpham)
            return view('backend::sanpham.show', compact(['sanpham']));
        return redirect()->route('backend.sanpham.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $sanpham = Sanpham::with(['image', 'loaisanpham'])->find($id);
        $loaisanpham = Loaisanpham::all();
        if($sanpham)
            return view('backend::sanpham.update', compact(['sanpham', 'loaisanpham']));
        return redirect()->route('backend.sanpham.index');
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
            'slug' => 'required',
            'noidung' => 'required',
        ]);
        $sanpham = Sanpham::find($id);

        if($sanpham) {
            if ($request->hasFile('image')) {
                $file = $request->image;
                $imageFile = new ImageFile();
                $image_id = $imageFile->updateImage($file, $sanpham->image_id);
            } else {
                $image_id = $request->image_old;
            }
            $sanpham->title = $request->title;
            $sanpham->slug = $request->slug;
            $sanpham->loaisanpham_id = $request->loaisanpham_id;
            $sanpham->noidung = $request->noidung;
            $sanpham->image_id = $image_id;
            $sanpham->description = $request->description;
            $sanpham->save();

            return view('backend::sanpham.show', compact(['sanpham']));
        }
        return redirect()->route('backend.sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sanpham = Sanpham::find($id);
        $image_id = $sanpham->image_id;
        $imageFile = new ImageFile();
        $image_delete = $imageFile->deleteImage($image_id);
        $sanpham->delete();

        return redirect()->route('backend.sanpham.index');
    }

}
