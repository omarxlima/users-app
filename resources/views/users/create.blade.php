@extends('layouts.default')

@section('page-title', 'Adicionar Usuário')

@section('content')
<div class="card">
    <div class="card-header">
      
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
              placeholder="Digite o nome" id="name" aria-describedby="name"  value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                 id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                 @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                 id="password" aria-describedby="passwordHelp" value="{{ old('password') }}">
                 @error('password')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
              </div>
           
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
  </div>
@endsection