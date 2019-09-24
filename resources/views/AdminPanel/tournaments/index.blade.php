@extends('AdminPanel.layouts.master')
@section('title', 'Turnirlerin İdare Etmesi')
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
            @foreach($list as $tournament)
                <tr>
                    <td>{{ $tournament->id }}</td>
                    <td><a href="{{ route('AdminPanel.tournaments.teams', $tournament->id) }}">{{ $tournament->name }}</a></td>
                    <td>{{ $tournament->created_at }}</td>
                    <td><img style="width: 50px; height: 50px;" src="/images/{{ $tournament->img }}" alt="{{ $tournament->name }}"></td>
                    <td style="width: 100px">
                        <a href="{{ route('AdminPanel.tournaments.edit', $tournament->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
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