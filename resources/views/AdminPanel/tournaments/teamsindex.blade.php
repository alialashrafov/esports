@extends('AdminPanel.layouts.master')
@section('title', 'Turnirlere aid komandalar İdare Etmesi')
@section('content')
    <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">Print</button>
            <button type="button" class="btn btn-primary">Export</button>
        </div>
        Table
    </h1>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>

                <th>Name</th>
                <th>Registration</th>
                <th>İmage</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td><a href="{{ route('AdminPanel.tournaments.teams', $team->id) }}">{{ $team->name }}</a></td>
                    <td>{{ $team->created_at }}</td>
                    <td><img style="width: 50px; height: 50px;" src="/images/{{ $team->img }}" alt="{{ $team->name }}"></td>
                    <td style="width: 100px">
                        <a href="{{ route('AdminPanel.tournaments.edit', $team->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
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