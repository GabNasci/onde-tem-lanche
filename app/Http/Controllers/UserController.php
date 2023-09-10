<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $this->validate($request, [
                'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Remova a imagem de avatar antiga, se existir
            if ($user->avatar) {
                // Certifique-se de que a imagem antiga exista antes de excluí-la
                $oldAvatarPath = public_path('images/' . $user->avatar); // Caminho completo da imagem antiga
                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }


            // Defina um novo nome único para o avatar

            $name = md5(time());
            $extension = $request->avatar->extension();
            $nameFile = "Avatars/{$name}.{$extension}"; // Adicione 'Avatars/' ao caminho

            // Salve a nova imagem no diretório 'public'
            $request->avatar->storeAs('images', $nameFile, 'public');

            // Atualize o atributo 'avatar' do usuário no banco de dados
            $data['avatar'] = $nameFile;
        }

        $user->update($data);

        return redirect()->route('user')->with('success', 'Perfil atualizado com sucesso!');
    }





}

