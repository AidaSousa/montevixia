@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="container">
        <h1>User List</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telf</th>
                            <th>Email</th>
                            <th>Asociado</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(is_array($user) || is_object($user))
                        @foreach($user as $member)
                            <tr>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->surname }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->is_associated ? 'Yes' : 'No' }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop