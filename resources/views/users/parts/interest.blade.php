<div class="card">
    <form action="{{ route('users.updateInterest', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Interesses
        </div>

        {{-- {{ dd($user->interests->pluck('name')->toArray()) }} --}}
        <div class="card-body">


            @foreach ( ['Futebol', 'Voley'] as $item )

            <div class="form-check">
                <input name="interests[][name]" class="form-check-input @error('interests') is-invalid @enderror " 
                type="checkbox" value="{{$item}}"
                    id="flexCheckDefault"
                    @checked(in_array($item, $user->interests->pluck('name')->toArray()))>
                <label class="form-check-label" for="flexCheckDefault">
                    {{$item}}
                </label>
                @if ($loop->last)
                    @error('interests')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                @endif
            </div>
            @endforeach


        </div>


        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>

        </div>



    </form>

</div>