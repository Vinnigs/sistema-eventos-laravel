<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    public function create(){
        return view('eventos.criar');
    }


    public function store(Request $request){

        $eventos = new Evento;

        $eventos->titulo = $request->titulo;
        $eventos->descricao = $request->descricao;
        $eventos->localizacao = $request->localizacao;
        $eventos->data = $request->data;
        $eventos->privado = $request->privado;
        $eventos->participantes = 0;

        //Tratamento de imagens
        if($request->hasFile('img') && $request->file('img')->isValid()){ //Verifica se a requisição possui o arquivo e se o mesmo é válido.

            $requestImg = $request->img; //Encapsula o arquivo da requisição.

            $extension = $requestImg->extension(); //Salva a extensão do arquivo.

            $imgName = md5($requestImg->getClientOriginalName() . strtotime('now')) . '.' . $extension; //Cria uma hash com o nome original do arquivo concatenado com o horário atual. Em seguida toda hash é concatenada com extensão do arquivo, tudo isso servirá para adicionar um path único no banco de dados para cada arquivo criado.
            //A variável acima '$imgName' servirá para salvar a path relativa do arquivo no banco de dados, na sequência salve o arquivo no servidor:
            $requestImg->move(public_path('assets/img/eventos'), $imgName); //O arquivo será "movido" para o "public_path" do laravel, onde será salvo em assets/img/eventos, uma nova pasta para ficar mais organizado. O segundo parâmetro de "move" renomeia o arquivo com a variável criada acima;

            $eventos->img = $imgName; //Salvar a path relativa no banco de dados;
        }

        $eventos->save();

        return redirect('/')->with('msg', 'Evento cadastrado com sucesso!');
    }
}
