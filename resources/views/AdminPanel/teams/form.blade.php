@extends('AdminPanel.layouts.master')
@section('title', 'Komanda Melumatlari!')
@section('content')
    <h1 class="sub-header">Komanda Məlumatlarını Dəyiş!</h1>
    <form enctype="multipart/form-data" action="{{ route('AdminPanel.teams.save', $entry->id) }}" method="POST">
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
                    <input name ="name" type="text" class="form-control" id="name" placeholder="Command Name"
                           value="{{ old('slug', $entry->slug) }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="{{ old('slug', $entry->slug) }}">
                    <input name ="slug" type="text" class="form-control" id="slug" placeholder="Slug"
                           value="{{ old('slug', $entry->slug) }}">
                </div>
            </div>



        <div class="form-group">
            <label for="Img"><img style="width: 40px; height: 40px;" src="/images/player_pics/{{ $entry->img }}" alt="{{$entry->name}}"></label>
            <input type="file" id="img" name="img">
        </div>
    </form>
@endsection