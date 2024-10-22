@extends('layouts.baselog')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    
    
    <div class="shadow p-3 mb-5 bg-body rounded w-50 p-3 bg-light mt-5">
        <div class="d-flex justify-content-between">
            <h2 >Crear Nuevo mueble</h2>
            <a href="{{route('secret.index')}}" class="float-end"> <button type="button" class="btn btn-danger">salir</button></a>
    
        </div>
        <form class="row g-3" method="post" action="{{route('secret.store')}}">
            @csrf
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre"/>
            </div>
            <div class="col-md-6">
                <label for="tipo" class="form-label">tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo"/>
            </div>
            <div class="col-12">
                <label for="descripcion" class="form-label">descripcion:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"/>
            </div>
            <div class="col-md-5">       
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio"/>   
            </div>
            <div class="col-md-5">       
                <label for="precio_venta" class="form-label">Precio de venta:</label>
                <input type="number" class="form-control" id="precio_venta" name="precio_venta"/>   
            </div>
            <div class="col-md-2">       
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad"/>   
            </div>
            <div class="col-md-6">       
                <label for="fabricante" class="form-label">Fabricante:</label>
                <input type="text" class="form-control" id="fabricante" name="fabricante"/>   
            </div>
            <div class="col-md-6">       
                <label for="codigo" class="form-label">Codigo de fabricante:</label>
                <input type="text" class="form-control" id="codigo" name="codigo"/>   
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection