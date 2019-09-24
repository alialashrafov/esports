@extends('AdminPanel.layouts.master')
@section('title', 'Esports Admin Panele xoş gelmisiz')
@section('content')

    <h1 class="page-header">Sayt Parametrleri</h1>

    <form method="post" enctype="multipart/form-data" action="{{ route('AdminPanel.settings') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" value="{{ $parametrler->facebook }}" id="facebook">
        </div>
        <button type="submit"></button>
    </form>

@endsection