<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{



    public function edit()
    {
        $user = Auth::user();
        return view('settings', ['user'=>$user]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'age' => 'required|numeric|min:18',
            'fio'   =>  'required|max:120|different:about',
        'about'  =>  'required|max:1000|different:fio',
        ]);
        $user = Auth::user();
        $user->fio = $request->input('fio');
        $user->age = $request->input('age');
        $user->about = $request->input('about');
        $user->save();
        return redirect()->route('settings')->with('info', 'Данные сохранены');
    }



}
