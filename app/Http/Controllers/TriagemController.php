<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use DB;

class TriagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consul = DB::table('setores')->get();
        return view('setores.index')->with('setores',$consul);

        /*$consul = DB::table('chc_pcc')->whereIn('pcc_codigo',[600431,600423,600385,600148])->get();
        return view('setores.index')->with('setores',$consul);*/
    }

    public function senha(Request $request)
    {
        // Retorna a sequência
        $consul = DB::table('senhas')->whereRaw('date(datemi) = "'.date('Y-m-d').'" and tipate="'.$request->get('pri').'"')->count();
        // Monta a senha
        $consul = $request->get('pri').str_pad($consul+1,4,0,STR_PAD_LEFT);
        // Busca a descrição do setor
        $setor = DB::table('setores')->where('codigo',$request->get('set'))->first();
        $setor =  $setor->espsim;
        // Registra a emissão da senha
        $insert = DB::table('senhas')->insertGetId([
            'codigo' => $consul,
            'datemi' => date('Y-m-d H:i:s'),
            'codset' => $request->get('set'),
            'atiset' => '01',
            'tipate' => $request->get('pri')
        ]);
        // Tipo de atendimento
        $prior = ($request->get('pri') == 'N') ? 'Normal' : 'Prioridade';
        // Imprime a senha
        return view('senha.index')->with(['senha' => $consul,'tipate' => $prior,'setor' => $setor,'data' => date('d/m/Y'),'hora' => date('H:i:s')]);

        //URL::to("js/script.js");
        //return asset('js/script.js');
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
