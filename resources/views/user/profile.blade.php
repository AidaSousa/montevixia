@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>User Profile</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Surname:</strong> {{ $user->surname }}</p>
                <p><strong>Phone:</strong> {{ $user->phone }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Asociado:</strong> {{ $user->is_associated ? 'Yes' : 'No' }}</p>
                <a href="{{ route('user.edit') }}" class="btn btn-primary">Edit Profile</a>
                <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Delete Account</button>
                </form>
            </div>
        </div>
    </div>
@endsection