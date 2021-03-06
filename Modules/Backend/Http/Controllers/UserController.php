<?php

namespace Modules\Backend\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('backend::user.index');
    }

    public function getThongtin(Request $request)
    {
        $info = User::where('id', '1')->first();
        return view('backend::thongtin.update', compact('info'));
    }

    public function postThongtin(Request $request)
    {
        $request->validate([
            'tel1' => 'required',
            'tencongty' => 'required',
            'tencongty_en' => 'required',
            'emailcongty' => 'required',
            'truso' => 'required'
        ]);
        $infoUpdate = User::where('id', '1')->update([
            'tel1' => $request->tel1,
            'tel2' => $request->tel2,
            'tel3' => $request->tel3,
            'tel4' => $request->tel4,
            'truso' => $request->truso,
            'truso2' => $request->truso2,
            'tencongty' => $request->tencongty,
            'tencongty_en' => $request->tencongty_en,
            'emailcongty' => $request->emailcongty,
            'emailcongty2' => $request->emailcongty2,
            'emailcongty3' => $request->emailcongty3,
            'emailcongty4' => $request->emailcongty4,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'tuyendung' => $request->tuyendung,
            'tuyendung_en' => $request->tuyendung_en
        ]);
        $info = User::where('id', '1')->first();
        return view('backend::thongtin.update', compact('info'));
    }

    public function indexData()
    {
        $users = User::all();
        return DataTables::of($users)
            ->addColumn('action', function($row) {
                return
                    '<form method="POST" action="'. route("backend.user.destroy", $row->id) .'" onsubmit="return confirm('."'Are you sure you want to delete this item?'".');">
                <input name="_method" value="DELETE" type="hidden">
                <input name="_token" value="'.csrf_token().'" type="hidden">
                <a class="" href="'. route("backend.user.show", $row->id) .'"><span class="glyphicon glyphicon-eye-open"></span></a>        
                <a class="" href="'. route("backend.user.edit", $row->id) .'"><span class="glyphicon glyphicon-pencil"></span></a>   
                <button user="submit" class="submit-with-icon">
                   <span class="glyphicon glyphicon-trash"></span>
                </button>
            </form>';
            })
            ->rawColumns(['action' => 'action'])
            ->addIndexColumn()
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('backend::user.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:2|max:255|unique:users',
            'password' => 'required|min:6|max:255',
            'email' => 'required|email|unique:users',
        ]);

        $req = $request->all();
        $req['password'] = Hash::make($request->password);

        $user = User::create($req);

        return redirect()->route('backend.user.show', $user->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if($user)
            return view('backend::user.show', compact(['user']));
        return redirect()->route('backend.user.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = user::find($id);
        if($user)
            return view('backend::user.update', compact(['user']));
        return redirect()->route('backend.user.index');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required',
            'password_new' => 'max:255',
            'password_repeat' => 'same:password_new'
        ]);

        $user = User::find($request->id);
        if($user) {
            $password_new = $request->password_new;
            if(isset($password_new)) {
                $user->password = Hash::make($request->password_new);
            }

            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();

            return redirect()->route('backend.user.show',  ['id' =>$request->id]);
        }
        return redirect()->route('backend.user.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request)
    {
        if($request->id != '1') {
            $user = User::find($request->id);
            $user->delete();
        }
        return redirect()->route('backend.user.index');
    }

    public function getGioithieu(Request $request)
    {
        $gioithieu = User::where('id', '1')->first();
        return view('backend::thongtin.gioithieu', compact('gioithieu'));
    }

    public function postGioithieu(Request $request)
    {
        $request->validate([
            'gioithieu' => 'required',
            'gioithieu_en' => 'required',
        ]);
        $infoUpdate = User::where('id', '1')->update([
            'gioithieu' => $request->gioithieu,
            'gioithieu_en' => $request->gioithieu_en,
        ]);

        $gioithieu = User::where('id', '1')->first();
        return view('backend::thongtin.gioithieu', compact('gioithieu'));
    }

}
