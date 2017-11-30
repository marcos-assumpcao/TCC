<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where(['id' => Auth()->user()->id])->get();
        return view('auth.users.list_all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth()->user()->grupo == 3){
            return 'Atenção: Acesso negado - usuario não autorizado!';
        }
        return view('auth.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.edit', ['id' => $user->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = User::find($id);
        return view('auth.users.display', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('auth.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$dados = $request->all();
        //$dados['password'] = bcrypt($dados['password']);
        $user = User::find($id)->update($request->all());
        return redirect()->route('users.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }

    public function list_user()
    {
        $data['users'] = User::all();
        return view('auth.users.list_tudo', $data);
    }

    public function senha($id){
        //$dados = $request->all();
        //$dados['password'] = bcrypt($dados['password']);
        //$user = User::find($id)->update($request->all());
        //return redirect()->route('users.senha', ['id' => $id]);
        $data['user'] = User::find($id);
        return view('auth.users.senha', $data);
    }

    public function updatesenha(Request $request, $id)
    {
        $dados = $request->all();
        $dados['password'] = bcrypt($dados['password']);
        $user = User::find($id)->update($dados);
        return redirect()->route('users.show', ['id' => $id]);
    }
}
