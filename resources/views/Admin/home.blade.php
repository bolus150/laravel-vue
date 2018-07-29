@extends('Base.layouts.app')

@section('content')
    <div class="container mt-10">
        <table class="table">
            <thead class="table__head table__head--primary">
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
            </thead>
            <tbody class="table__body">
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role ? "User" : "Admin" }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
