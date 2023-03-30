@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Perfil de Usuario</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('user.profile', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <p><strong>Nombre:</strong> {{ $user->name }}</p>
                        <input id="name" name="name" type="text">
                        <p><strong>Apellidos:</strong> {{ $user->surname }}</p>
                        <input id="surname" name="surname" type="text">
                        <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
                        <input id="phone" name="phone" type="tel">
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <input id="email" name="email" type="email">
                        <p><strong>Asociado:</strong> {{ $user->is_associated ? 'Yes' : 'No' }}</p>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <!-- <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Delete Account</button>
                </form> -->
                <form action="{{ route('user.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p>¿Estás seguro de que deseas eliminar tu cuenta?</p>
                    <button type="submit" class="btn btn-danger">Eliminar mi cuenta</button>
                </form>
            </div>
        </div>
    </div>
@endsection