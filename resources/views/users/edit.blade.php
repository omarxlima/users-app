@extends('layouts.default')

@section('page-title', 'Editar Usuário')

@section('content')
          {{-- {{ dd($user->profile)}} --}}
        @include('users.parts.basic-details')
        <br/>
        @include('users.parts.perfil')
        <br/>
        @include('users.parts.roles')
        <br/>
        @include('users.parts.interest')

@endsection