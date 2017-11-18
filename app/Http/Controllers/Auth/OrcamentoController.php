<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orcamento;
use App\OrderService;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Grupos de Usuario
         * =====================
         * 1 - Administrador
         * 2 - Colaborador
         * 3 - Usuario
         */
        if(Auth()->user()->grupo == 1 && 2){
            $data['orcamentos'] = Orcamento::all();
            //dd($data);
            return view('auth.orcamentos.list_all', $data);
        }ifelse(Auth()->user()->grupo == 3) {
            $data['orcamentos'] = Orcamento::where(['order_service_id' => Auth()->user()->id])->get();
        } 
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['orderservices'] = OrderService::all();
        return view('auth.orcamentos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orcamento = Orcamento::create($request->all());
        return redirect()->route('orcamentos.edit', ['id' => $orcamento->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['orcamento'] = Orcamento::find($id);
        return view('auth.orcamentos.display', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data['orcamento'] = Orcamento::find($id);
        return view('auth.orcamentos.edit', $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orcamento::destroy($id);
        return redirect()->route('orcamentos.index');
    }

    public function approve ($id)
    {
        $data['orcamento'] = Orcamento::find($id);
        return view('auth.orcamentos.budget', $data);
    }
}
