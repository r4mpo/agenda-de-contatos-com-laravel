@extends('layouts.main')
@section('title', 'Index')
@section('content')
@if(@session('msg'))
  <p class="msg">{{ @session('msg') }}</p>
@endif
<table class="table table-bordered" style="width: 500px; margin-top: 3%; margin-left: 30%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($contatos as $c)
    <tr>
      <th scope="row">{{ $loop->index +1 }}</th>
      <td>{{ $c->nome }}</td>
      <td>{{ $c->telefone }}</td>
      <td>{{ $c->email }}</td>
      <td><a href="/contatos/edit/{{ $c->id }}"><button type="button" class="btn btn-info"><ion-icon name="pencil"></ion-icon></button></a></td>
      <td>
        <form method="post" action="/contatos/delete/{{ $c->id }}">
          @csrf
          @method('DELETE')  
          <button type="submit" class="btn btn-danger"><ion-icon name="trash"></ion-icon></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection