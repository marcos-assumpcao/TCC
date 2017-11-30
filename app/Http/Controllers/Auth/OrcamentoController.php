<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orcamento;
use App\User;
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
        $orc = OrderService::with('orcamentos')->where(['user_id' => Auth()->user()->id])->get();
        //dd($data['orcamentos'][0]->orcamentos);
        foreach($orc as $gg){
            $data['orcamentos'][] = $gg->orcamentos;
        }
//dd( $data['orcamentos']);
        return view('auth.orcamentos.list_all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['orderservices'] = OrderService::where('status', 1)->get();
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
        OrderService::find($orcamento['order_service_id'])->update(['status' => 2]);
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

    public function list_orcamento()
    {
        /**
         * Grupos de Usuario
         * =====================
         * 1 - Administrador
         * 2 - Colaborador
         * 3 - Usuario
         */
        if(Auth()->user()->grupo == 1 OR 2){
            $data['orcamentos'] = Orcamento::all();
            return view('auth.orcamentos.list_tudo', $data);
        }
    }

    public function aprovar($id, $id2, $status){
        $data = date('d/m/Y');
        $ghjk = Orcamento::find($id);
        $ghjk->update(['status' => $status, 'aprovacao' => $data]);


        $ghjs = OrderService::find($id2);
        $ghjs->update(['status' => $status]);

        //$ghjp = Orcamento::find($id);
        //$ghjp->update(['aprovacao' => $aprovacao]);
        
        return redirect()->route('orcamentos.approve', ['id' => $id]);
    }
}
