@extends('layout.app', ["current" => "categorias"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de produtos</h5>

@if(count($prod) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Nome do produto</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($prod as $prod)
                <tr>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->preco}}</td>
                    <td>
                        <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo produto</a>
    </div>
</div>



@endsection