@extends('layouts.master');
@section('title', 'En Guclu Esport');
@section('content')

    <!--BREADCRUMBS BEGIN-->
    <section class="image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <div class="wrap">
                            <ul class="breadcrumbs">
                                <li><a href="/">Esas sehife</a>/</li>
                                <li>Kateqoriya</li>
                            </ul>
                            <h1>Oyunçu Haqqında Məlumat Səhifəsi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BREADCRUMBS END-->



    <!--PLAYER SINGLE WRAP BEGIN-->

    <section class="player-single-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="captain-bage">{{ $gamer->status }}</div>
                    <h4 class="player-name">{{ $gamer->name }}</h4>
                </div>
                <div class="col-md-6">

                    <div class="player-photo">
                        <div class="number"></div>
                        <img class="img-responsive" src="{{ asset("/images/csgo/{$gamer->img}") }}" alt="{{$gamer->name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-info">
                        <h6 class="player-info-title">summary</h6>
                        <div class="summary">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Nationality:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9"><img src="{{ asset("images/common/fr-flag.png") }}" alt="flag">France</div>

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="item">Age:</div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">24</div>
                            </div>
                        </div>
                        <h6>Komanda Tarixi</h6>
                        <div class="overflow-scroll">
                            <table>
                                <tr>
                                    <th>Il</th>
                                    <th class="club">Komanda</th>


                                </tr>
                                <tr>
                                    @foreach($teams as $komandalar)
                                    <td>2016/2017</td>
                                    <td class="club"><img src="/images/csgo/team-logo1.png" width="30" height="30" alt="trophy">{{ $komandalar->name }} </td>

                                </tr>
                                @endforeach


                            </table>
                        </div>
                        <h6>About</h6>
                        <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you </p>
                        <h6>Trophies</h6>
                        <ul class="player-trophey">
                            <li>
                                <img src="/images/common/am-trophey1.png" width="100" height="150" alt="trophy">
                                <div class="year">2012</div>
                            </li>
                            <li>
                                <img src="/images/common/am-trophey.png" width="100" height="150" alt="trophy">
                                <div class="year">2015</div>
                            </li>
                            <li>
                                <img src="/images/common/am-trophey2.png" width="100" height="150" alt="trophy">
                                <div class="year">2017</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                </div>
            </div>
        </div>
    </section>

    <!--PLAYER SINGLE WRAP END-->

    <!--MAIN CLUB STAFF BEGIN-->

    <!--MAIN CLUB STAFF BEGIN-->
    <section class="main-club-stuff">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="soccer-h4">club stuff</h4>
                    <ul class="player-filters" role="tablist">
                        <li class="active">
                            <a href="#managers" role="tab" data-toggle="tab">
                                Managers
                            </a>
                        </li>
                        <li>
                            <a href="#firstteam" role="tab" data-toggle="tab">
                                First team
                            </a>
                        </li>
                        <li>
                            <a href="#academy" role="tab" data-toggle="tab">
                                Academy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="managers" role="tabpanel">
                <div id="managers_carousel" class="carousel slide main-stuff-slider" data-ride="carousel" >
                    <div class="carousel-inner" role="listbox" >
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/player-2.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/player-2.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marshman</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#managers_carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                        <a class="nav-arrow right-arrow" href="#managers_carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="academy" role="tabpanel">
                <div id="academy_carousel" class="carousel slide main-stuff-slider" data-ride="carousel" >
                    <div class="carousel-inner" role="listbox" >
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Vito<br>Palet</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/player-2.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Melet</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marse</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marsan</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Luscas<br>Mars</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/player-2.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Mafo</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#academy_carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                        <a class="nav-arrow right-arrow" href="#academy_carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="firstteam" role="tabpanel">
                <div id="firstteam_carousel" class="carousel slide main-stuff-slider" data-ride="carousel" >
                    <div class="carousel-inner" role="listbox" >
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">James<br>Deshon</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Deshon<br>James</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">James<br>Deshon</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucas<br>Marsh</span>
                                                <span class="position">Left Forward</span>
                                                <span class="number">14</span>
                                            </span>
                                                <img src="/images/csgo/player-3.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Luca<br>Mas</span>
                                                <span class="position">Left Midfielder</span>
                                                <span class="number">8</span>
                                            </span>
                                                <img src="/images/csgo/player-2.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="staff-item">
                                            <a href="staff.html">
                                            <span class="info">
                                                <span class="name">Lucasoto<br>Marsh</span>
                                                <span class="position">Central Attacking Midfielder</span>
                                                <span class="number">7</span>
                                            </span>
                                                <img src="/images/csgo/stuff-person.jpg"  alt="person-slider">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#firstteam_carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                        <a class="nav-arrow right-arrow" href="#firstteam_carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MAIN CLUB STAFF END-->

    <!--MAIN CLUB STAFF END-->

    <!--STANDING CUP END-->
@endsection



