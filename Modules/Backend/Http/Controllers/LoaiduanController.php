<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use App\Loaiduan;
use App\Duan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Backend\Components\ImageFile;

use DataTables;

class LoaiduanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::loaiduan.index');
    }

    public function indexData()
    {
        $loaiduans = Loaiduan::all();
        return DataTables::of($loaiduans)
            ->editColumn('description',function ($row){
                return "<p>". substr($row->description, 0, 100) ."</p>";
            })
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.loaiduan.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.loaiduan.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.loaiduan.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button loaiduan="submit" class="submit-with-icon">
                   <span class="glyphicon glyphicon-trash"></span>
                </button>
            </form>';
            })
            ->rawColumns(['action' => 'action', 'description' => 'description'])
            ->addIndexColumn()
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('backend::loaiduan.create');
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
        ]);


        $req = $request->all();
        $loaiduan = Loaiduan::create($req);

        return redirect()->route('backend.loaiduan.show', $loaiduan->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $loaiduan = Loaiduan::find($id);
        if($loaiduan)
            return view('backend::loaiduan.show', compact(['loaiduan']));
        return redirect()->route('backend.loaiduan.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $loaiduan = Loaiduan::find($id);
        if($loaiduan)
            return view('backend::loaiduan.update', compact(['loaiduan']));
        return redirect()->route('backend.loaiduan.index');
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
        $loaiduan = Loaiduan::find($id);

        if($loaiduan) {
            $loaiduan->title = $request->title;
            $loaiduan->title_en = $request->title_en;
            $loaiduan->slug = $request->slug;
            $loaiduan->description = $request->description;
            $loaiduan->description_en = $request->description_en;
            $loaiduan->save();

            return redirect()->route('backend.loaiduan.show', $loaiduan->id);
        }
        return redirect()->route('backend.loaiduan.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $loaiduan = Loaiduan::find($id);
        $imageFile = new ImageFile();
        $loaiduan->delete();

        $abcs = Duan::where('loaiduan_id', $id)->get();
        foreach($abcs as $abc) {
            $image_delete = $imageFile->deleteImage($abc->image_id);
            $abc->delete();
        }

        return redirect()->route('backend.loaiduan.index');
    }

}
