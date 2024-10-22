@extends('layouts.baselog')

@section('content')

<div class="d-flex justify-content-center align-items-center">



<div class="shadow p-3 mb-5 bg-body rounded w-50 p-3 bg-light mt-5">
    <div class="d-flex justify-content-between">
        <h2>Registrar Usuario</h2>
        <a href="{{route('secret.index')}}" class="btn btn-danger" >Salir</a>
    </div>
    <form method="post" action="{{route('validar-registro')}} " autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="emailInput" class="from-label">Email:</label>
            <input type="email" class="form-control" id="emailInput" name="emailInput" required autocomplete="@disabled(true)"/>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password:</label>
            <input type="password" class="form-control" id="passwordInput" name="passwordInput" required autocomplete="new-password"/>
        </div>
        <div class="mb-3">
            <label for="userInput">Nombre:</label>
            <input type="text" class="form-control" id="userInput" name="userInput" required autocomplete="new-password"/>
        </div>
        <button type="submit" class="btn btn-primary">registrar</button>
    </form>
 </div>
</div>

@endsection