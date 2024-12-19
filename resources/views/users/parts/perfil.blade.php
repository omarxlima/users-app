<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-header">
        Perfil
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">Tipo de Pessoa</label>
            <select name="type"class="form-control @error('type') is-invalid @enderror"  >
                <option value="pf">PF</option>
                <option value="pj">PJ</option>
            </select>
           
            @error('type')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" name="addres" class="form-control  @error('addres') is-invalid @enderror"
               id="endereco" aria-describedby="emailHelp" >
               @error('addres')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>


    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
       
           
           
          </form>
    
</div>