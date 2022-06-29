@extends('layouts.main')
@section('title', 'Editando: ' . $contato->nome)
@section('content')
<form action="/contatos/update" method="post">
    @csrf
    @method('PUT')
    <div class="insertcontact">
        <input type="hidden" name="id" value="{{ $contato->id }}">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="person-outline"></ion-icon></span>
            <input type="text" class="form-control" value="{{ $contato->nome }}" name="nome" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="call-outline"></ion-icon></span>
            <input type="text" class="form-control" value="{{ $contato->telefone }}" name="telefone" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="text" class="form-control" value="{{ $contato->email }}" name="email" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-outline-dark" type="submit">Atualizar</button>
        </div>
    </div>
</form>
@endsection