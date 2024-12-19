<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-header">
        Dados Básicos
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
            placeholder="Digite o nome" id="name" aria-describedby="name"  value="{{ old('name') ?? $user->name }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
               id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') ?? $user->email }}">
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
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
       
           
           
          </form>
    
</div>