<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        return view('auth.user')->with(compact('user'));
    }

    public function update(Request $request) {
        $user = Auth::user();
        $data = $request->all();
        $user->update($data);

        return redirect()->route('user')->with('success','Usuário atualizado com sucesso!');;
    }
}

