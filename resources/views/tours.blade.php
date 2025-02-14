@extends('layouts.master')
@section('title', 'Azerbaycanin en guclu Esport sayti')
@section('content')
<body>

<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
</div>

<!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="/">Esas Sehife</a>/</li>
                            <li>Oyunlar</li>
                        </ul>
                        <h1>Seçilmiş Oyunlar</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->


<!--MAIN MATCH SHEDULE BEGIN-->

<section class="main-match-shedule amateurs-match-shedule">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><h5>Novbeti Oyunlar</h5></div>
            <div class="col-md-10 col-sm-9 col-xs-9">

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">

                <ul class="tab-filters" role="tablist">
                    <li class="active"><a href="#all" role="tab" data-toggle="tab" aria-expanded="true">All</a></li>
                    <li><a href="#nationalcup" role="tab" data-toggle="tab" aria-expanded="true">Olimpik</a></li>
                    <li><a href="#premierleague" role="tab" data-toggle="tab" aria-expanded="true">Liga</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="all">
                        <div class="amateurs-main-match">

                            <div class="title"></div>
                            <a href="matches.html" class="team">
                                <span class="image"><img src="images/csgo/team-logo1.png" alt="main-match"></span>
                                <span class="info">
                                    <span class="name">Team 1</span>
                                    <span class="city">london</span>
                                </span>
                            </a>
                            <div class="score">
                                <span>3:2</span>
                            </div>
                            <a href="matches.html" class="team guest">
                                <span class="info">
                                    <span class="name">Team 2</span>
                                    <span class="city">London</span>
                                </span>
                                <span class="image"><img src="images/csgo/team-logo2.png" alt="main-match"></span>
                            </a>
                            <div class="title">26 september / 8:45 PM</div>

                        </div>
                    </div>
                    <div class="tab-pane" id="nationalcup">
                        <div class="amateurs-main-match">
                            <div class="title">National Cup - Round 1</div>
                            <a href="matches.html" class="team">
                                <span class="image"><img src="images/csgo/team-logo3.png" alt="main-match"></span>
                                <span class="info">
                                    <span class="name">Internacional</span>
                                    <span class="city">london</span>
                                </span>
                            </a>
                            <div class="score">
                                <span>3:2</span>
                            </div>
                            <a href="matches.html" class="team guest">
                                <span class="info">
                                    <span class="name">Arsenalp</span>
                                    <span class="city">Lyon</span>
                                </span>
                                <span class="image"><img src="{{ asset("images/csgo/team-logo4.png") }}" alt="main-match"></span>
                            </a>
                            <div class="title">26 september / 8:45 PM</div>
                        </div>
                    </div>
                    <div class="tab-pane" id="premierleague">
                        <div class="amateurs-main-match">
                            <div class="title">Premier League - Round 28</div>
                            <a href="matches.html" class="team">
                                <span class="image"><img src="images/csgo/team-logo2.png" alt="main-match"></span>
                                <span class="info">
                    <span class="name">Internacional</span>
                    <span class="city">london</span>
                </span>
                            </a>
                            <div class="score">
                                <span>2:2</span>
                            </div>
                            <a href="matches.html" class="team guest">
                <span class="info">
                    <span class="name">Arsenalp</span>
                    <span class="city">Lyon</span>
                </span>
                                <span class="image"><img src="images/csgo/team-logo4.png" alt="main-match"></span>
                            </a>
                            <div class="title">26 september / 8:45 PM</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12"><h6>En Son Oyunlar</h6></div>
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="main-lates-matches">
                    <a href="" class="item">
                        <span class="championship">National cup - quarterfinal</span>
                        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/common/team-logo1.png" alt="team-image">
                    </span>
                    <span>Team 1</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>Internacional</span>
                    <span><img src="images/common/team-logo2.png" alt="team-image"></span>
                </span>
        </span>
                        <span class="game-result">(5-4) penalties</span>
                    </a>
                    <a href="" class="item">
                        <span class="championship">National cup - quarterfinal</span>
                        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/common/team-logo3.png" alt="team-image">
                    </span>
                    <span>Team 1</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>Team 2</span>
                    <span><img src="images/common/team-logo4.png" alt="team-image"></span>
                </span>
        </span>
                        <span class="game-result">(5-4) penalties</span>
                    </a>
                    <a href="" class="item">
                        <span class="championship">National cup - quarterfinal</span>
                        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/common/team-logo5.png" alt="team-image">
                    </span>
                    <span>Team 1</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>Team 2</span>
                    <span><img src="images/common/team-logo1.png" alt="team-image"></span>
                </span>
        </span>
                        <span class="game-result">(5-4) penalties</span>
                    </a>
                    <a href="" class="item">
                        <span class="championship">National cup - quarterfinal</span>
                        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/common/team-logo2.png" alt="team-image">
                    </span>
                    <span>Team 1</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>Team 2</span>
                    <span><img src="images/common/team-logo3.png" alt="team-image"></span>
                </span>
        </span>
                        <span class="game-result">(5-4) penalties</span>
                    </a>
                    <a href="" class="item">
                        <span class="championship">National cup - quarterfinal</span>
                        <span class="teams-wrap">
                <span class="team">
                    <span>
                        <img src="images/common/team-logo4.png" alt="team-image">
                    </span>
                    <span>Team 1</span>
                </span>
                <span class="score">
                    <span>3:2</span>

                </span>
                <span class="team1">
                    <span>Team 2</span>
                    <span><img src="images/common/team-logo5.png" alt="team-image"></span>
                </span>
        </span>
                        <span class="game-result">(5-4) penalties</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--MAIN MATCH SHEDULE END-->

@endsection


