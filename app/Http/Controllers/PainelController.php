<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.index');
    }

    public function chamada()
    {
        // Próxima senha
        $select = DB::select("select sen_tipate,sen_codigo,'Guichê 01' sen_guiche from gsc_senhas order by nrecno desc limit 1");
        // Trata o retorno
        $senha = collect($select)->map(function($dado_linha) {	
            $dado_linha->sen_tipate = ($dado_linha->sen_tipate == 'N') ? 'Normal' : 'Prioridade'; // Tipo do atendimento
			return $dado_linha;
		});
		return response()->json($senha);
    }

    public function historico()
    {
        // Próxima senha
        $select = DB::select("select sen_codigo,'Guichê 01' sen_guiche from gsc_senhas order by nrecno desc limit 3");
		return response()->json($select);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
