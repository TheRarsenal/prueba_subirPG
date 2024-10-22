@extends('layouts.baselog')

@section('content')



<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="shadow p-3 mb-5 bg-body rounded w-35 p-3 bg-light mt-5">
        <img src="{{asset('img/logo.png')}}" alt="navbar-brand float-center" height="200">
        <form method="post" action="{{route('iniciar-sesion')}}" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="from-label">Email:</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput" required />
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password:</label>
                <input type="password" class="form-control" id="passwordInput" name="passwordInput" required autocomplete="new-password"/>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberCheck" name="rememberCheck"/>
                <label class="form-cleck-label" for="rememberCheck">mantener iniciado</label>
            </div>
            <button type="submit" class="btn btn-primary">iniciar sesion</button>
        </form>
    </div>
 </div>
 

@endsection