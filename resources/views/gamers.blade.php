@extends('layouts.master')
@section('title', 'Azerbaycanin En Guclu Esport Sayti')
@section('content')
    <!--BREADCRUMBS BEGIN-->
    <section class="image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <div class="wrap">
                            <ul class="breadcrumbs">
                                <li><a href="/">Esas Sehife</a>/</li>
                                <li>Komandalar</li>
                            </ul>
                            <h1>Komandalar</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BREADCRUMBS END-->

    <!--CLUB STAFF TOP BEGIN-->
    <div class="club-staff-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Oyuncularin siralamasi</h4>
                </div>
                <div class="staff-box">
                    @foreach($gamers as $oyuncu)
                        <div class="col-md-4  col-sm-6 col-xs-12">
                            <a href="{{ route('gamer',[ "id" => $oyuncu->id , "slug" => $oyuncu->slug ]) }}" class="item">
                            <span class="info">
                                <span class="name">{{ $oyuncu->name }}</span>
                                <span class="position"></span>
                                <span class="number"></span>
                            </span>
                                <img src="{{ $oyuncu->img }}" alt="{{ $oyuncu->name  }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-12">
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch. </p>
                </div>
            </div>
        </div>
    </div>

    <!--CLUB STAFF TOP END-->



    <!--SPONSOR BOX BEGIN-->
    <div class="am-sponsor-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="text">Whatever copper mug etsy, tilde listicle hammock gastropub literally franzen fanny pack typewriter meditation.<br> Organic chartreuse bicycle rights pinterest, cray humblebrag fap gochujang church-key brooklyn food truck letterpress cred. </p>
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="/images/common/sponsor-img3.png" alt="sponsor image">
                </div>
                <div class="col-xs-3 text-center">
                    <img class="sponsor-icons" src="/images/common/sponsor-img.png" alt="sponsor image">
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="/images/common/sponsor-img1.png" alt="sponsor image">
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="/images/common/sponsor-img2.png" alt="sponsor image">
                </div>
            </div>
        </div>
    </div>
    <!--SPONSOR BOX END-->



@endsection

