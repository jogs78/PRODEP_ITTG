@extends('layouts.app')
@section('content')
    <div class="alert alert-info" role="alert">
        Editar información de {{$name->name}} {{$name->apellido_paterno}} {{$name->apellido_materno}}
    </div>
<div>

    <form method="post" action="/beneficiario/{{$edit->user_id}}/edit"> 
        @csrf
        <input type="hidden" name="_method" value="PUT">   
        Genero:
        <select id="genero" type="text"  autocomplete="off" class="form-control {{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="{{ old('genero') }}" style="text-align: center;width: 50%;" required autofocus >
            <option  value="{{$edit->genero}}">{{$edit->genero}}</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>                                                                    
        </select>
        RFC:
        <input id="rfc" type="text" placeholder="RFC" autocomplete="off" class="form-control {{ $errors->has('rfc') ? ' is-invalid' : '' }}" name="rfc" value="{{$edit->rfc}}" required autofocus>
        Estado Civil:
        <select id="civil" autocomplete="off" class="form-control{{ $errors->has('civil') ? ' is-invalid' : '' }}" name="civil" value="{{ old('civil') }}" required autofocus style="text-align: center;width: 50%">
            <option  value="{{$edit->civil}}">{{$edit->civil}}</option>
            <option value="Casado">Casado</option>
            <option value="Soltero">Soltero</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Uniónlibre">Unión libre</option>
            <option value="Viudo">Viudo</option>                                                       
        </select>
        Nacionalidad:
        <input id="nacionalidad" type="text" placeholder="Nacionalidad" autocomplete="off" class="form-control{{ $errors->has('nacionalidad') ? ' is-invalid' : '' }}" name="nacionalidad" value="{{$edit->nacionalidad}}"required autofocus>
        Estado de nacimiento:
        <input id="entidad" type="text" placeholder="Entidad de nacimiento" autocomplete="off" class="form-control{{ $errors->has('entidad') ? ' is-invalid' : '' }}" name="entidad" value="{{$edit->entidad}}"  required autofocus>
        Fecha de nacimiento:
        <input id="fecha_nacimiento" type="date" placeholder="Fecha de nacimiento" autocomplete="off"  class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{$edit->fecha_nacimiento}}" required>
        Telefono(casa):
        <input id="telefono" type="text" placeholder="Telefono(casa)" autocomplete="off" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{$edit->telefono}}" required autofocus>
        Celular:
        <input id="celular" type="text" placeholder="Celular" autocomplete="off" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{$edit->celular}}" required autofocus>
        Email:
        <input id="email_ins" type="email" placeholder="Email " autocomplete="off"  class="form-control{{ $errors->has('email_ins') ? ' is-invalid' : '' }}" name="email_ins" value="{{$edit->email_ins}}" required>
        Fecha de inicio en el sistema:
        <input id="fecha_inscrpcion" type="date" placeholder="Fecha de inscripción" autocomplete="off"  class="form-control{{ $errors->has('fecha_inscrpcion') ? ' is-invalid' : '' }}" name="fecha_inscrpcion" value="{{$edit->fecha_inscrpcion}}" required>
                                    
        <select id="perfil" type="text" autocomplete="off" class="form-control{{ $errors->has('perfil') ? ' is-invalid' : '' }}" name="perfil"value="{{ old('perfil') }}" required autofocus style="text-align: center;width: 50%">
            <option  value="{{$edit->perfil}}">{{$edit->perfil}}</option>
            <option value="PTC">PTC</option>
            <option value="PTC(PD)">PTC(Perfil deseable)</option>
            <option value="CA">CA</option>      
            <option value="CAEF">CAEF</option>                                     
        </select>
                                 
        <select name="area" onChange="agregarOpciones(this.form)" class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}" value="{{ old('area') }}" required="" style="width: 50%">
            <option value="{{$edit->area}}">{{$edit->area}}</option>
            <option value="Ciencias Sociales y Administrativas">Ciencias Sociales y Administrativas</option>
            <option value="Ingeniería y Tecnología">Ingeniería y Tecnología</option>
            <option value="Educación, Humanidades y Arte">Educación, Humanidades y Arte</option>                
        </select>
        
        <select name="disciplina"  class="form-control{{ $errors->has('disciplina') ? ' is-invalid' : '' }}" value="{{ old('disciplina')}}" required="" style="width: 50%">
            <option value="{{$edit->disciplina}}">{{$edit->disciplina}}</option>
        </select>

                        <input id="nombramiento" type="text" placeholder="nombramiento" autocomplete="off"  class="form-control{{ $errors->has('nombramiento') ? ' is-invalid' : '' }}" name="nombramiento" value="{{$edit->nombramiento }}" required>

                    <input id="tipo_nombramiento" type="text" placeholder="Tipo de nombramiento" autocomplete="off"  class="form-control{{ $errors->has('tipo_nombramiento') ? ' is-invalid' : '' }}" name="tipo_nombramiento" value="{{$edit->tipo_nombramiento}}" required>

                    <input id="dedicacion" type="text" placeholder="Dedicacion" autocomplete="off"  class="form-control{{ $errors->has('dedicacion') ? ' is-invalid' : '' }}" name="dedicacion" value="{{$edit->dedicacion}}" required>

                        <input id="unidad" type="text" placeholder="Unidad academica" autocomplete="off"  class="form-control{{ $errors->has('unidad') ? ' is-invalid' : '' }}" name="unidad" value="{{$edit->unidad}}" required>

                         <input id="fecha_contrato" type="date" placeholder="Fecha de contrato" autocomplete="off"  class="form-control{{ $errors->has('fecha_contrato') ? ' is-invalid' : '' }}" name="fecha_contrato" value="{{$edit->fecha_contrato}}" required>

                        <input id="nivel" type="text" placeholder="Nivel de estudios" autocomplete="off"  class="form-control{{ $errors->has('nivel') ? ' is-invalid' : '' }}" name="nivel" value="{{$edit->nivel}}" required>

                        <input id="siglas" type="text" placeholder="Siglas de los estudos" autocomplete="off"  class="form-control{{ $errors->has('siglas') ? ' is-invalid' : '' }}" name="siglas" value="{{$edit->siglas }}" required>

                        <input id="estudios" type="text" placeholder="Estudios en" autocomplete="off"  class="form-control{{ $errors->has('estudios') ? ' is-invalid' : '' }}" name="estudios" value="{{$edit->estudios }}" required>

                        <input id="pais" type="text" placeholder="País" autocomplete="off"  class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="{{$edit->pais}}" required>

                        <input id="institucion_otorgante" type="text" placeholder="Institución otorgante" autocomplete="off"  class="form-control{{ $errors->has('institucion_otorgante') ? ' is-invalid' : '' }}" name="institucion_otorgante" value="{{$edit->institucion_otorgante}}" required>

                         <input id="fecha_titulo" type="date" placeholder="Fecha de obtención de titulo" autocomplete="off"  class="form-control{{ $errors->has('fecha_titulo') ? ' is-invalid' : '' }}" name="fecha_titulo" value="{{$edit->fecha_titulo}}" required>

                         <input type="submit" value="Guardar" id="regis">                
        </form>    
</div>

@endsection
@section('code')
@endsection