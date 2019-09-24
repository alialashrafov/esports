@extends('AdminPanel.layouts.master')
@section('title', 'Istifadəçi Məlumatlarını Dəyiş!')
@section('content')
    <h1 class="sub-header">Istifadəçi Məlumatlarını Dəyiş!</h1>
    <form enctype="multipart/form-data" action="{{ route('AdminPanel.users.save', $entry->id) }}" method="POST">
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{ $entry->id > 0 ? "Update" : "Save"}}
            </button>
        </div>
        <h3 class="sub-header">
            Users {{ $entry->id > 0 ? "Edit" : "Add"  }}
        </h3>
        @include('layouts.partials.errors')
        @include('layouts.partials.alert')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input name ="name" type="text" class="form-control" id="name" placeholder="Name and Surname"
                    value="{{ $entry->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email"
                    value="{{ $entry->email }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input name ="phone" type="number" class="form-control" id="phone" placeholder="phone" value="{{ $entry->phone }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label for="">
            <input type="checkbox" name="status"  {{ $entry->status ? "checked" : "" }}>Kapitan
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="is_admin" {{ $entry->is_admin ? "checked" : "" }}>Admin
            </label>
        </div>

        <div class="form-group">
            <label for="Img"><img style="width: 40px; height: 40px;" src="/images/player_pics/{{ $entry->img }}" alt="{{$entry->name}}"></label>
            <input type="file" id="img" name="img">
        </div>
    </form>
@endsection