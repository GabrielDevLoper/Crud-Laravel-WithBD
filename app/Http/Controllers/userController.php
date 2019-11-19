<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function showRegister(){
        return view('registerUser');
    }
    public function index(){
        $usuarios = User::orderBy('created-at', 'desc')->paginate(5);
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $user = new  User;
        //dd($request->all());
        //$user->create($request->all());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->file = $request->file;
        $user->save();

        $mensagem = "Produto Inserido com sucesso";
        return view('showRegister')->with('messagem', $messagem);
    }

    public function show($id){
        //
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('usuarios.edit', compact('user'));
    }
    
    public function update(UserRequest $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('usuarios.index')->with('message', "Usuario atualizado com sucesso");
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usuarios.index')->with('alert-sucess', 'Usuario Deletado com sucesso');
    }
}
