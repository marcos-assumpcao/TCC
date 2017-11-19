<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OrderService;
use App\User;
use App\Orcamento;

class OrderserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orderservices'] = OrderService::where(['user_id' => Auth()->user()->id])->get();
        return view('auth.orderservices.list_all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::all();
        return view('auth.orderservices.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderservice = OrderService::create($request->all());
        return redirect()->route('orderservices.edit', ['id' => $orderservice->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['orderservice'] = Orderservice::find($id);
        return view('auth.orderservices.display', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['users'] = User::all();
        $data['orderservice'] = Orderservice::find($id);
        return view('auth.orderservices.edit', $data);
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
        $orderservice = OrderService::find($id)->update($request->all());
        return redirect()->route('orderservices.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orderservice::destroy($id);
        return redirect()->route('orderservices.index');
    }

    public function list_orderservice()
    {
        /**
         * Grupos de Usuario
         * =====================
         * 1 - Administrador
         * 2 - Colaborador
         * 3 - Usuario
         */
        if(Auth()->user()->grupo == 1 OR 2){
            $data['orderservices'] = OrderService::all();
            return view('auth.orderservices.list_all', $data);
        }
    }
}
