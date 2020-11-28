@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" 
                       id="nome" placeholder="produto">
                       <label for="preco">Preço</label>
                       <input type="text" class="form-control" name="nome" 
                              id="preco" placeholder="preco">

                              <div class="form-group">
             
                            </div>
            </div>
          
       
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection