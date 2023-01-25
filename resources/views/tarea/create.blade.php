@extends('tema.app')

@section('title'."Nueva tarea")
@section('contenido')
    <div class="h3">
        Registrar tarea  
    </div>

    <form action="{{ route('tarea.store') }}" method="POST">
        <x-tarea-form-body/>
    </form>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection