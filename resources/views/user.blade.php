@extends('layouts.app')

@section('title', 'Show Users')

@section('content')
    <h1 class="text-center mt-5">All Users</h1>
    <a href="{{ url('allusers') }}" class="mb-5"> &larr; Back to all users </a>
    <hr>
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th>Id:</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Name:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Create At:</th>
                <td>{{ $user->created_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection
