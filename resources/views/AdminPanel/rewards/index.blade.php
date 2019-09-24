@extends('AdminPanel.layouts.master')
@section('title', 'Istifadeçi İdare Etmesi')
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
            @foreach($list as $rewardss)
                <tr>
                    <td>{{ $rewardss->id }}</td>
                    <td>{{ $rewardss->name }}</td>
                    <td> @if($rewardss->status)
                            <span class="label label-success">Kapitan</span>
                        @else
                            <span class="label label-warning">Adi Oyunçu</span>
                        @endif</td>
                    <td>{{ $rewardss->email }}</td>
                    <td>{{ $rewardss->phone }}</td>
                    <td>
                        @if($rewardss->is_admin)
                            <span class="label label-success">Admin</span>
                        @else
                            <span class="label label-warning">Adi User</span>
                        @endif
                    </td>
                    <td>{{ $rewardss->created_at }}</td>
                    <td><img style="width: 50px; height: 50px;" src="/images/{{ $rewardss->img }}" alt="{{ $rewardss->name }}"></td>

                    <td style="width: 100px">
                        <a href="{{ route('AdminPanel.users.edit', $rewardss->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
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