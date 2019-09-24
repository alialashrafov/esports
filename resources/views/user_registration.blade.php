@if($errors->any())
    @dd($errors)
@endif


@extends('layouts.master')
@section('title', 'Azerbaycanin En Guclu Esport Sayti')
@section('content')
    <div class="container userr-style">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ route('user.store') }}">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Istifadeçi Qeydiyyati</legend>


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="name" type="text" placeholder="Adınız və Soyadınız" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="status" name="status" type="text" placeholder="Oyunçu Statusunuz: Məsələn, Kapitan" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="email" placeholder="Email Adresiniz" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="number" placeholder="Telefon Nömrəniz" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="password" placeholder="Şifrəniz" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="password" name="password_confirmation" type="password" placeholder="Şifrənizi Təkrar yazın" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <label style="color: black;" for="">Şeklinizi Daxil Edin:</label>
                                    <input id="file" name="img" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection