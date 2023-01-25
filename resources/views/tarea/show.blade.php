@extends('tema.app')

@section('title'."Mostrar tarea")
@section('contenido')
    <div class="h3">
         {{ $tarea -> nombre }}</> 
        
    </div>
    <ul>
        <li>
            Finalizada: <strong>{{ $tarea ->estafinalizada() }}</strong>
        </li>
        <li>
            Urgencia: <strong>{{ $tarea ->urgencia() }}</strong>
        </li>
        <li>
            Fecha Limite: <strong>{{ $tarea ->fechalimite}}</strong>
        </li>
    </ul>

    <p>
        {{ $tarea -> descripcion }}
    </p>
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="{{ route('tarea.destroy',$tarea) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" type="submit ">
                    Borrar
            </button>
            </form>
        </div>
    </div>

@endsection