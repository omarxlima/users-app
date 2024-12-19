@extends('layouts.default')



@section('page-title', 'Usuários')

@section('page-actions')
    <a href=" {{route('users.create')}} " class="btn btn-outline-primary"> Adicionar</a>
@endsection

@section('content')

@session('status')
  @isset($value)
    <div class="alert alert-success" role="alert">
      {{ $value }}
    </div>
  @endisset
@endsession

    

<div class="card">
  <div class="card-header">
      Pesquisar
  </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-end">Ações</th>
      </tr>
    </thead>
    <tbody>
        @forelse ( $users as $user )
            
        <tr>
            <td scope="row"> {{$user->id}}</td>
            <td>{{ $user->name }}</td>
            <td>{{$user->email}}</td>
            <td> 
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href=" {{ route('users.edit', $user->id)}}" class="btn btn-outline-warning btn-sm">Editar</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger btn-sm" type="submit">Excluir</button>
                </form>
              </div>

            </td>
        </tr>
        @empty
            {{ 'Nenhum usuário encontrado!' }}
        @endforelse
     
      </tbody>
    </table>
    {{ $users->links() }}

</div>

@endsection