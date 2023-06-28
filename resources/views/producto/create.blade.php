@extends('layouts.plantilla')

@section('content')
<form action="{{route('producto.store')}}" method="POST">

    @csrf
<label>
    nombre
    <input type="text" name="nombre">
</label>
<br><br>
      
    <label >

        <label>
    decripcion
            <input type="text" name="descripcion">
        </label>
        <br><br>
              
            <label >
precio
                <label>
    
    <input type="number" name="precio">
</label>
<br><br>
      
    <label >

        <label>
    existencias
            <input type="text" name="existencias">
        </label>
        <br><br>
              
            <label >
            
                <label>
    proveedor
                    <input type="text" name="proveedor">
                </label>
                <br><br>
                      
                    <label >

                        <button  type="submit">Enviar</button>


</form>
    
@endsection