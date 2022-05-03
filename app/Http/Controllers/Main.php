<?php

namespace App\Http\Controllers;
use App\Models\Usersss;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        return view('index');
    }
    public function post_index(Request $request)
    {
        // -> Usersss model ismi
        $save = new Usersss();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->save();
        return back()->with('success', 'Yazı Başarıyla Eklendi 🙂');
    }
}
