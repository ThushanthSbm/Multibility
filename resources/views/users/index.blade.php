@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-4">
    <i class="fas fa-pencil-alt"></i> Create User
</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                         <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                         <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                         <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
