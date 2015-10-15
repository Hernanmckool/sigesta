@extends('layouts.admin')
    @section('content')
      {!!Form::open(['route'=>'departamento.store', 'method'=>'POST'])!!}
          @include('departamento/form/departamento')
          <div align="right">
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}    
          </div>  
      {!!Form::close()!!}
    @endsection
    @section('scripts')
    @endsection 