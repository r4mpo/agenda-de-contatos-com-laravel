@extends('layouts.main')
@section('title', 'Novo Produto')
@section('content')
<form action="/contatos/store" method="post">
    @csrf
    <div class="insertcontact">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="person-outline"></ion-icon></span>
            <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="call-outline"></ion-icon></span>
            <input type="text" class="form-control" name="telefone" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="text" class="form-control" name="email" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-outline-dark" type="submit">Cadastrar</button>
        </div>
    </div>
</form>
@endsection