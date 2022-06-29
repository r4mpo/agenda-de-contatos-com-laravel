<?php

namespace App\Http\Controllers;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index(){
        $search = request()->search;
        if($search){
            $contatos = Contato::where('nome', 'like', '%'.$search.'%')->get();
        }else{
            $contatos = Contato::all();
        }
        return view('welcome', ['contatos' => $contatos]);
    }
    public function insert(){
        return view('contatos.insert');
    }
    public function store(Request $requerimento){
        $erros = [];
        if(empty($requerimento->nome) ||  empty($requerimento->telefone) || empty($requerimento->email)){
            $erros [] = 'Erro. Todos os campos devem ser preenchidos.';
        }else if(!is_float($requerimento->telefone)){
            $erros [] = 'Erro. O campo de telefone deve ser composto apenas por números.';
        }
        if(count($erros) == 0){
            $contato = new Contato;
            $contato->nome = $requerimento->nome;
            $contato->telefone = $requerimento->telefone;
            $contato->email = $requerimento->email;
            $contato->save();
            return redirect('/')->with('msg', 'Parabéns. Contato inserido com sucesso.');
        }else{
            return redirect('/')->with('msg', $erros[0]);
        }
    }
    public function delete($id){
        $contato = Contato::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Parabéns! Contato excluído com sucesso.');
    }
    public function edit($id){
        $contato = Contato::findOrFail($id);
        return view('contatos.edit', ['contato' => $contato]);
    }
    public function update(Request $request){
        $erros = [];
        if(empty($request->nome) ||  empty($request->telefone) || empty($request->email)){
            $erros [] = 'Erro. Todos os campos devem ser preenchidos.';
        }else if(!is_float($request->telefone)){
            $erros [] = 'Erro. O campo de telefone deve ser composto apenas por números.';
        }
        if(count($erros) == 0){
            $contato = Contato::findOrFail($request->id)->update($request->all());
            return redirect('/')->with('msg', 'Parabéns. Contato atualizado com sucesso.');
        }else{
            return redirect('/')->with('msg', $erros[0]);
        }
    }
}