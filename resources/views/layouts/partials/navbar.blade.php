<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7 hidden-sm hidden-xs">
                <div class="top-contacts">
                    <ul class="socials">
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="contacts">
                        <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i>+61 3 8376 6284</li>
                        <li class="skype"><a href="callto:team.skype"><i class="fa fa-skype" aria-hidden="true"></i>team.skype</a></li>
                    </ul>
                </div>
            </div>

                <div class="top-search">
                    <form>
                        <input type="text" name="text">
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<!--MAIN MENU WRAP BEGIN-->
<div class="main-menu-wrap sticky-menu">
    <div class="container">
        <a href="/" class="custom-logo-link"><img src="/images/csgo/logo.png" alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="active">
                        <a href="/"><span>Ana Sehife</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Umumi Oyunlar</span></a>
                        <ul>
                            <li><a href="{{ route('tours') }}"><span>turnirler</span></a></li>
                            <li><a href="{{ route('championship') }}"><span>Cempionatlar</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('teams') }}"><span>Komandalar</span></a>
                    </li>
                    <li><a href="{{ route('news') }}"><span>Xeberler</span></a></li>
                    <li><a href="{{ route('gallery') }}"><span>Qalareya</span></a></li>

                    <li><a href="{{ route('contact') }}"><span>Elaqe</span></a></li>
                    @if( auth()->check() )

                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                            </li>
                    @else
                        <li><a href="#"><span>Qeydiyyat</span></a>
                        <ul>
                            <li><a href="{{ route('user_reg') }}"><span>istifadeçi Qeydiyyati</span></a></li>
                            <li><a href="{{ route('command_reg') }}"><span>Komanda Qeydiyyatı</span></a></li>
                        </ul>

                        @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->