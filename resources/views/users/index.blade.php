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
    <form action="{{ route('users.index') }}" method="GET" class="nb-3">
      <div class="row g-3 justify-content-md-end">
        <div class="col-sm-4">
          <div class="input-group input-group-sm">

            <input type="text" name="keyword" class="form-control" value="{{ request()?->keyword }}"
              placeholder="Pesquisar">

            {{-- <imput type="reset" value="Reset"> --}}
              {{-- <a type="reset" class="btn btn-secondary" aria-label="Reset">x</a> --}}

              <button class="btn btn-primary">Pesquisar</button>

          </div>
        </div>
      </div>
    </form>

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

            @can('destroy', App\Models\User::class)

            <form action="{{ route('users.destroy', $user->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-outline-danger btn-sm" type="submit">Excluir</button>
            </form>
            
            @endcan

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

<script>
  // console.log('ok')
  
</script>
@endsection