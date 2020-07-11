@extends('layouts.app')
@section('content')
<table id="tabla1" class="table" border="1" id="lista_benficiarios"> 
    <thead>
        <tr>
            <th  colspan="5" style="text-align: center;">Beneficiarios</th>           
        </tr>
        <tr>
            <th colspan="1">Nombre</th>      
            <th colspan="1">Apellido Paterno</th> 
            <th colspan="1">Apellido materno</th>
            <th colspan="1">Email</th>
            <th colspan="1">Acción</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->apellido_paterno}}</td>
                <td>{{$usuario->apellido_materno}}</td>
                <td>{{$usuario->email}}</td>  
                <td>
                    {{--
                        <a href="/beneficiarios/{{$usuario->id}}/edit/" class="btn btn-primary">editar</a> 
                    --}}
                </td>              
            </tr>             
        @empty
            <tr>
                <td  colspan="5">Sin Beneficiarios</th>           
            </tr>
        @endforelse
    </tbody>
</table>    
{{$usuarios->links()}}
@endsection
@section('code')
@endsection