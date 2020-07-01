@extends('layouts.app')
@section('content')

<br>
En el año <select name="year" id="year" onchange="if (this.value) window.location.href=this.value">
    @for($i=2014;$i<=2020;$i++)
    <option value="/home?year={{$i}}" @if($year==$i) selected @endif > {{$i}} </option>
    @endfor
</select>


<table style="width: 70%" id="example">  
    <thead>
      <tr style="text-align: center;">
        <th colspan="6">Trámites</th>
         
      </tr>    
      <tr>                
          <th colspan="1">Fecha</th>               
          <th colspan="1">Acción</th>
        </tr>
    </thead>
     @foreach($tramites as $tramite)
  
    <tbody>
      <tr>
      <td>
      {{$tramite->id}}, {{$tramite->fecha}} , {{$tramite->tipo_tramite->tipo}}</td>     
      <td>
        <a href="/subtramites/{{$tramite->id}}" class="btn btn-primary"  style="color:#000">Trámites</a> </td>      
      </tr> 
    
    </tbody>
    @endforeach
  </table> 
  </div>
  <div class="pagination" style="margin-left: 15%;width: 70%">
  
  {{$tramites->links()}}
  

@endsection