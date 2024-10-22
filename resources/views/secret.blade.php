@extends('layouts.baselog')

@section('content')
<div class="mx-3">

  <img src="{{asset('img/logo.png')}}" class="mx-auto d-block" alt="logo" height="200">
  <h2 class="text-center ">Modern Forniture</h2>
  


  <div class="d-flex justify-content-between mb-3">
      <a href="{{route('secret.create')}}" class="btn btn-primary" >Nuevo Articulo</a>
      <a href="{{route('registro')}}" class="btn btn-secondary" >nuevo usuario</a>
      <a href="{{route('logout')}}"> <button type="button" class="btn btn-danger">salir</button></a>
  </div>

 
  <table class="table table-dark table-striped table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Pecio</th>
        <th scope="col">Precio de venta</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Fabricante</th>
        <th scope="col">Codigo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
 
 
    @foreach($inventario as $inventario)   
        <tr>
            <th scope="row">{{$inventario->id}}</th>
            <td>{{$inventario->nombre}}</td>
            <td>{{$inventario->tipo}}</td>
            <td>{{$inventario->descripcion}}</td>
            <td>{{$inventario->precio}}</td>
            <td>{{$inventario->precio_venta}}</td>
            <td>{{$inventario->cantidad}}</td>
            <td>{{$inventario->fabricante}}</td>
            <td>{{$inventario->codigo_fabricante}}</td>
            <td>
               <a href="{{route('secret.edit',$inventario->id)}}" class="btn btn-primary" >Editar</a>
               <form action="{{route('secret.destroy',$inventario->id)}}" method="post" class="d-inline">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger" >Borrar</a>
               </form>
            </td>
        </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

@endsection