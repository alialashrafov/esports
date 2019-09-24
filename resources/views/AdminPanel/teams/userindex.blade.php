@extends('AdminPanel.layouts.master')
@section('title', 'Komandalara aid Oyunçular İdare Etmesi')
@section('content')
    <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">Print</button>
            <button type="button" class="btn btn-primary">Export</button>
        </div>
        Komandalara aid Oyunçular
    </h1>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Team-name</th>
                <th>Name</th>
                <th>Status</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Admin mi?</th>
                <th>Registration</th>
                <th>İmage</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->team->name }}</td>
                    <td>{{ $user->name }}</td>
                    <td> @if($user->status)
                            <span class="label label-success">Kapitan</span>
                        @else
                            <span class="label label-warning">Adi Oyunçu</span>
                        @endif</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        @if($user->is_admin)
                            <span class="label label-success">Admin</span>
                        @else
                            <span class="label label-warning">Adi User</span>
                        @endif
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td><img style="width: 50px; height: 50px;" src="/images/{{ $user->img }}" alt="{{ $user->name }}"></td>

                    <td style="width: 100px">
                        <a href="#" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Əminsən ?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection