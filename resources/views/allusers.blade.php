@extends('layouts.app')

@section('title', 'All users')

@section('content')
    <h1 class="text-center mt-5">All Users</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class='btn btn-sm btn-dark' href="{{ url('user/'.$user->id) }}">
                            Show User
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
