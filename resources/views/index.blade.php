@extends('layouts.master')
@section('title', 'Azerbaycanin en guclu Esport sayti')
@section('content')

    <div class="main-slider-section">
        <div class="main-slider">
            <div id="main-slider" class="carousel slide" data-ride="carousel" data-interval="4000">
                <div class="carousel-inner" role="listbox">
                    @foreach($olacaqoyunlar as $oyun)
                    <div class="item active">
                        <div class="main-slider-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="match-date">26 Sep 2016 / 9:30 PM / city arena</div>
                                        <div class="team"> {{ $oyun->t1_name }}
                                            <div class="big-count">
                                                {{ $oyun->t1_score }}:{{ $oyun->t2_score }}
                                            </div>
                                            {{ $oyun->t2_name }}
                                        </div>
                                        <div class="booking">
                                            <a href="matches-list.html">
                                                Match Page
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="item">
                        <div class="main-slider-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="match-date">26 Sep 2016 / 9:30 PM / city arena</div>
                                        <div class="team"> Team Name 1 - Team Name 2
                                        </div>
                                        <div class="counter" data-date="1534185200000">
                                            <ul>
                                                <li>
                                                    <div class="digit days"></div>
                                                    <div class="descr">Days</div>
                                                </li>
                                                <li>
                                                    <div class="digit hours"></div>
                                                    <div class="descr">Hours</div>
                                                </li>
                                                <li>
                                                    <div class="digit minutes"></div>
                                                    <div class="descr">Minutes</div>
                                                </li>
                                                <li>
                                                    <div class="digit seconds"></div>
                                                    <div class="descr">Seconds</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="booking">
                                            <a href="match-live.html">
                                                Watch live
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="main-slider-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="match-date">26 Sep 2016 / 9:30 PM / city arena</div>
                                        <div class="team"> Team Name 1
                                            <div class="big-count">
                                                2:0
                                            </div>
                                            Team Name 2
                                        </div>
                                        <div class="booking">
                                            <a href="match-live.html">
                                                Watch live
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="nav-arrow left-arrow" href="#main-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only"></span>
                </a>
                <a class="nav-arrow right-arrow" href="#main-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only"></span>
                </a>

                <div class="event-nav">
                    <div class="container">
                        <div class="row no-gutter carousel-indicators">

                            <div class="col-sm-4 active" data-slide-to="0" data-target="#main-slider">
                                <a href="#" class="nav-item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                    <span class="team"><img src="images/csgo/team-logo1.png" alt="team-logo"></span>
                                    <span class="score">
                                        <span>1:0</span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/csgo/team-logo2.png" alt="team-logo"></span>
                                    </span>
                                </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                            </div>

                            <div class="col-sm-4" data-slide-to="1" data-target="#main-slider">
                                <a href="#" class="nav-item">
                                    <span class="championship">Team Name 1 - Team Name 2</span>
                                    <span class="teams-wrap">

                                    <span class="team"><img src="images/csgo/team-logo5.png" alt="team-logo"></span>
                                    <span class="score countdown" data-date="1534185200000">
                                        <span class="days"></span>
                                        <span class="hours"></span>
                                        <span class="minutes"></span>
                                        <span class="seconds"></span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/csgo/team-logo1.png" alt="team-logo"></span>
                                    </span>

                                </span>
                                    <span class="game-result">26 Sep 2016 / 9:30 PM / city arena</span>
                                </a>
                            </div>

                            <div class="col-sm-4" data-slide-to="2" data-target="#main-slider">
                                <a href="#" class="nav-item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                    <span class="team"><img src="images/csgo/team-logo3.png" alt="team-logo"></span>
                                    <span class="score">
                                        <span>VS</span>
                                    </span>

                                    <span class="team1">
                                        <span><img src="images/csgo/team-logo4.png" alt="team-logo"></span>
                                    </span>
                                </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-news-list">
        <div class="owl-carousel owl-theme match-page-slider">
            <a href="" class="item">
                <img src="images/csgo/news1.jpg" class="img-responsive" alt="">
                <span class="caption">
                <span class="date">20 sep 2016</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
            </a>
            <a href="" class="item">
                <img src="images/csgo/news2.jpg" class="img-responsive" alt="">
                <span class="caption">
                <span class="date">20 sep 2016</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
            </a>
            <a href="" class="item">
                <img src="images/csgo/news3.jpg" class="img-responsive" alt="">
                <span class="caption">
                <span class="date">20 sep 2016</span>
                <span class="name">Chelsea claims Premier League lead after</span>
            </span>
            </a>
        </div>
    </div>

    <!--MAIN MACTH SHEDULE BEGIN-->

    <section class="main-match-shedule">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Next match</h6>

                    <div class="main-next-match bg-cover">
                        <img src="images/csgo/next-match-bg.jpg" class="next-match-background-img" alt="next-image">
                        <div class="wrap">
                            <div class="place" >Estadio Olimpico Monumental</div>
                            <div class="date" >28 septemer 2016 / 8:30 PM</div>
                            <div class="teams-wrap" >
                                <a href="staff.html" class="team">
                                    <span>Team 1</span>
                                    <span><img src="images/common/team-logo1.png" alt="team-image"></span>
                                </a>
                                <div class="vs">
                                    vs
                                </div>
                                <a href="staff.html" class="team1">
                                    <span><img src="images/common/team-logo2.png" alt="team-image"></span>
                                    <span>Team2</span>
                                </a>
                            </div>
                            <a href="" class="booking">UPCOMING MATCH</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Latest matches</h6>

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

    <!--MAIN MACTH SHEDULE END-->

    <!--MAIN PLAYERS STAT BEGIN-->

    <section class="main-players-stat bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="hockey-stats-h4">Players stats</h4>


                    <div class="single-player-stats players_statistic_slider">
                        <ul class="player-filters" role="tablist">
                            <li class="active">
                                <a href="#goalkeepers" role="tab" data-toggle="tab">
                                    goalkeepers
                                </a>
                            </li>
                            <li>
                                <a href="#defenders" role="tab" data-toggle="tab">
                                    defenders
                                </a>
                            </li>

                        </ul>
                        <div class="player-stat-slider tab-content">
                            <div id="slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner tab-content" role="listbox">
                                    <div class="item active tab-pane" id="goalkeepers">

                                        <div class="wrap">
                                            <div class="stat">
                                                <div class="top-info with_number">
                                                    <div class="number">12</div>
                                                    <a href="player-second-page.html" class="name">
                                                        HAYDEN FREEMAN
                                                    </a>
                                                </div>
                                                <div class="position">
                                                    Goalkeeper
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">played</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-1" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">saves</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-2" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">missing</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-3" ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image">
                                                <a href="player-second-page.html" title="player-image">
                                                    <img src="images/csgo/player-stat-slider-img.jpg" alt="player-image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item tab-pane" id="defenders">
                                        <div class="wrap">
                                            <div class="stat">
                                                <div class="top-info with_number">
                                                    <div class="number">1</div>
                                                    <a href="player.html" class="name">
                                                        JORG BELAFFSOON
                                                    </a>
                                                </div>
                                                <div class="top-info">
                                                    <a href="player-second-page.html" class="name">
                                                    </a>
                                                </div>
                                                <div class="position">
                                                    Defender
                                                </div>
                                                <div class="progress-wrap">
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">played</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-4" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">saves</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-5" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-item">
                                                        <div class="bar-label">
                                                            <div class="achievement">missing</div>
                                                            <div class="score">23</div>
                                                        </div>
                                                        <div class="progress-line">
                                                            <div class="bar bar-6" ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image">
                                                <a href="player-second-page.html" title="player-image">
                                                    <img src="images/csgo/player-stat-slider-img.jpg" alt="player-image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="arrow-wrap">
                                        <!-- Controls -->
                                        <a class="nav-arrow left-arrow" href="#slider" role="button" data-slide="prev">
                                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="nav-arrow right-arrow" href="#slider" role="button" data-slide="next">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4 class = "hockey-stats-h4">Best players</h4>
                    <div class="team-best-player">
                        <div class="">
                            <ul class="player-filters" role="tablist">
                                <li class="active">
                                    <a href="#goals" role="tab" data-toggle="tab">goals</a>
                                </li>
                                <li>
                                    <a href="#assist" role="tab" data-toggle="tab">assist</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="best-players-list tab-pane active" id="goals">
                                <a href="player-second-page.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player-second-page.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player-second-page.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                            </div>
                            <div class="best-players-list tab-pane" id="assist">
                                <a href="player.html" class="item">
                                    <span class="number">1</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player-second-page.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player-second-page.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                                <a href="player.html" class="item">
                                    <span class="number">9</span>
                                    <span>Luis Hernandez</span>
                                    <span class="achievement">14</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--MAIN PLAYERS STAT END-->

    <!--SUCCESS STORY BEGIN-->
    <section class="success-story sport">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>success story <br>began here</h4>
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep mixtape semiotics brunch. </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon"><img src="images/common/success-icon.png" alt="succes-icon"></div>
                            <div class="title">Legendary</div>
                            <p>Next level paleo taxidermy, bespoke messenger bag leggings occupy food truck. </p>
                        </div>
                        <div class="col-md-6">
                            <div class="icon"><img src="images/common/success-icon1.png" alt="succes-icon"></div>
                            <div class="title">Legendary</div>
                            <p>Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch. </p>
                        </div>
                        <div class="col-md-12"><a href="trophies.html" class="booking">trophies</a></div>
                    </div>
                </div>
                <div class="col-md-5 position-relative">
                    <blockquote class="coach-quote">
                        <p>Austin mustache man bun vice helvetica.</p>
                        <p class="name">Brandon Campbell / head coach</p>
                    </blockquote>
                    <img class="img-responsive" src="images/csgo/coach.png" alt="coach-image">
                </div>
            </div>
        </div>
    </section>
    <!--SUCCESS STORY END-->

    <!--SUCCESS STORY BEGIN-->
    <section class="success-story-cybersport">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>success story <br>began here</h4>
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep mixtape semiotics brunch. </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon"><img src="images/common/success-icon.png" alt="succes-icon"></div>
                            <div class="title">Legendary</div>
                            <p>Next level paleo taxidermy, bespoke messenger bag leggings occupy food truck. </p>
                        </div>
                        <div class="col-md-6">
                            <div class="icon"><img src="images/common/success-icon1.png" alt="succes-icon"></div>
                            <div class="title">Legendary</div>
                            <p>Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch. </p>
                        </div>
                        <div class="col-md-12"><a href="trophies.html" class="booking">trophies</a></div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="wrap position-relative">
                        <div class="cybersport-slogan">
                            <div class="title">Welcome to</div>
                            <div class="big-title">Pubstomps</div>
                            <p>Hella pop-up flexitarian, semiotics migas humblebrag schlitz literally tofu deep v thundercats skateboard viral cornhole.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--SUCCESS STORY END-->

    <!--AWARD BOX BEGIN-->

    <div class="main-award-box">

        <!--TIMELINE BEGIN-->
        <div class="timeline-bar">
            <div class="bar">
                <div class="date date-1" >1990</div>
                <div class="date date-2" >2001</div>
                <div class="date date-3" >2002</div>
                <div class="date date-4" >2007</div>
                <div class="date date-5" >2010</div>
                <div class="date date-6 active" >2016</div>
            </div>
        </div>
        <!--TIMELINE END-->


        <div class="main-award-slider">
            <div id="main-award-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup.png" alt="cup-image"></div>
                                        <div class="name">All-Star Series</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup1.png" alt="cup-image"></div>
                                        <div class="name">World Class Championship</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup2.png" alt="cup-image"></div>
                                        <div class="name">Major League Trophy</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup.png" alt="cup-image"></div>
                                        <div class="name">All-Star Series</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup1.png" alt="cup-image"></div>
                                        <div class="name">World Class Championship</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="award">
                                        <div class="image"><img class="img-responsive" src="images/common/cup2.png" alt="cup-image"></div>
                                        <div class="name">Major League Trophy</div>
                                        <div class="year">2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="nav-arrow left-arrow" href="#main-award-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="nav-arrow right-arrow" href="#main-award-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    <!--AWARD BOX END-->

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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-2.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-2.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-2.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-2.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-3.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/player-2.jpg"  alt="person-slider">
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
                                                <img src="images/csgo/stuff-person.jpg"  alt="person-slider">
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

    <!--CALL TO ACTION BEGIN-->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9 col-xs-6">
                    <div class="text">Become part of a great team</div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 text-right">
                    <a href="contacts.html" class="join">Join us</a>
                </div>
            </div>
        </div>
    </div>
    <!--CALL TO ACTION END-->

    <!--MAIN TEAM STORE BEGIN-->

    <section class="main-team-store">

        <!--MAIN TEAM STORE CONTAINER BEGIN-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Team Store</h4>
                </div>
                <div class="col-md-10 col-xs-9">
                    <ul class="tab-filters">
                        <li class="active"><a data-toggle="tab" href="#new">New</a></li>
                        <li><a data-toggle="tab" href="#hotdeals">hot deals</a></li>
                        <li><a data-toggle="tab" href="#officialapparel">Official apparel</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-3 text-right">

                    <a id="show-all-link" href="store.html">Show all</a>

                </div>
            </div>
        </div>
        <!--MAIN TEAM STORE CONTAINER END-->

        <!--MAIN TEAM STORE LIST BEGIN-->
        <div class="main-store-list">
            <div class="container">
                <div class="tab-content">
                    <div id="new" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge hot">hot</span>
                                            <img src="images/common/store-item-img.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt Elite</span>
                                            <span class="price">£ 80</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge new">new</span>
                                            <img src="images/common/product-3.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-2.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-4.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hotdeals" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge hot">hot</span>
                                            <img src="images/common/store-item-img.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt Elite</span>
                                            <span class="price">£ 80</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge new">new</span>
                                            <img src="images/common/product-3.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-2.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-4.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="officialapparel" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge hot">hot</span>
                                            <img src="images/common/store-item-img.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt Elite</span>
                                            <span class="price">£ 80</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <span class="store-badge new">new</span>
                                            <img src="images/common/product-3.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-2.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's T-Shirt </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="store-list-item">
                                    <div>
                                        <a href="product.html">
                                            <img src="images/common/product-4.jpg" alt="product-image">
                                        </a>
                                        <div class="info">
                                            <span class="name">Men's Long-Sleeve Running </span>
                                            <span class="price">£ 155</span>
                                            <div class="btn-wrap">
                                                <button class="btn small">add to cart</button>
                                                <button class="btn small">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MAIN TEAM STORE LIST END-->

        <!--MAIN SPONSOR SLIDER BEGIN-->
        <div class="main-sponsor-slider-background">
            <div id="main-sponsor-slider" class="carousel slide main-sponsor-slider" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img class="sponsor-icons" src="images/common/sponsor-img1.png" alt="sponsor-image">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img  class="sponsor-icons dota-csgo-image" src="images/common/sponsor-img2.png" alt="sponsor-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img  class="sponsor-icons" src="images/common/sponsor-img1.png" alt="sponsor-image">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <img class="sponsor-icons dota-csgo-image" src="images/common/sponsor-img2.png" alt="sponsor-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="nav-arrow left-arrow" href="#main-sponsor-slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="nav-arrow right-arrow" href="#main-sponsor-slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--MAIN SPONSOR SLIDER END-->

    </section>

    <!--MAIN TEAM STORE END-->

    <div class="main-breaking-news">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-12 ">
                    <div class="break-title">
                        <span>Breaking news</span>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-12">
                    <div id="main-breaking-list" class="carousel slide main-breaking-list" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>
                                    <span class="news">Curabitur id tellus mi. In laoreet lacinia luctus.</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>
                                    <span class="news">Quisque ante lacus, fermentum et ante ultrices, accumsan blandit magna.</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>
                                    <span class="news">Sed tincidunt placerat viverra.</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>
                                    <span class="news">Acts of the week</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="news.html" class=" ">
                                <span class="date">
                                    17 April 2017<span>/</span>
                                </span>
                                    <span class="news">Nullam feugiat tortor at luctus ultrices.</span>
                                </a>
                            </div>
                        </div>
                        <div class="arrow-wrap">
                            <!-- Controls -->
                            <a class="nav-arrow left-arrow" href="#main-breaking-list" role="button" data-slide="prev">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="nav-arrow right-arrow" href="#main-breaking-list" role="button" data-slide="next">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
