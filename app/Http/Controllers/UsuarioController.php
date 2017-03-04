<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Mostra a listagem de usuários cadastrados
     * Paginando por 10 registros.
     * @return Usuario[]
     */
    public function getAll()
    {
        $usuarios = Usuario::paginate(10);

        return $usuarios;
    }


     /**
     * Mostra o usuário que foi buscado pelo seu id.
     *
     * @param  int  $id
     * @return Usuario
     */
     public function get($id){
        $usuario = Usuario::find($id);

        return $usuario;
     }


    /**
     * Salva o usuário
     *
     * @param  Request request
     * @return Usuario
     */
    public function salvar(Request $request){
         $this->validate($request, [
            'nome' => 'required',
            'idade' => 'required',
        ]);

        
        Usuario::create($request->all());

        return $request->all();
    }

    /**
     * Atualiza o usuário
     *
     * @param  Request request
     * @param  int id
     * @return Usuario
     */
    public function atualizar(Request $request, int $id){
         $this->validate($request, [
            'nome' => 'required',
            'idade' => 'required',
        ]);

        
        Usuario::find($id)->update($request->all());

        return $request->all();
    }


}