@extends('layouts.dash')



@section('contenido')






@livewire('motocicletas.index-motocicletas')




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
