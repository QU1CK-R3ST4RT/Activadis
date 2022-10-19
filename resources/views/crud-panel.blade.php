@extends('layouts.page-layout')

@section('content')
    <div class="full-screen crud-panel">
        <div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>Naam</td>
                    <td>Email</td>
                    <td>Wachtwoord</td>
                    <td>Role</td>
                    <td>Event punten</td>
                    <td>Actions</td>
                </tr>
                <tr>
                    <td><input type="text" class="textfields" placeholder="ID"></td>
                    <td><input type="text" class="textfields" placeholder="Naam"></td>
                    <td><input type="text" class="textfields" placeholder="Email"></td>
                    <td><input type="text" class="textfields" placeholder="Wachtwoord"></td>
                    <td><input type="text" class="textfields" placeholder="Role"></td>
                    <td><input type="text" class="textfields" placeholder="Event punten"></td>
                    <td><a href="">Voeg toe</a></td>
                </tr>
                @foreach ($users as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->email }}</td>
                        <td>{{ $e->password }}</td>
                        <td>{{ $e->role_id }}</td>
                        <td>{{ $e->event_points }}</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection