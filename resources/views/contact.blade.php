@extends('layouts.master')
@section('title', 'Azerbaycanin En Guclu Esport Sayti')
@section('content')
    <!--CONTACT WRAP BEGIN-->
    <section class="contacts-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Head office</h4>
                    <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard. </p>
                    <div class="contact-office-img">
                        <img class="img-responsive" src="images/csgo/contact-office-img.jpg" alt="contact-office-img">
                    </div>
                    <ul class="contact-list">
                        <li><i class="fa fa-flag" aria-hidden="true"></i><span>276 Upper Parliament Street, Liverpool L8, Great Britain</span></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com">team@email.com</a></li>
                        <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+61 3 8376 6284</span></li>
                    </ul>
                    <ul class="contact-bar">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <h4>Get in touch</h4>
                    <div class="leave-comment-wrap">
                        <form action="{{ route('contacts') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Name <i>*</i></span>
                                            <input type="text" name="name" value="{{ old('name') }}">
                                            @if($errors->has('name'))
                                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                                                @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Email <i>*</i></span>
                                            <input type="email" name="email" value="{{ old('email') }}">
                                            @if($errors->has('email'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item">
                                        <label>
                                            <span>Subject</span>
                                            <input type="text" name="subject" value="{{ old('subject') }}">
                                            @if($errors->has('subject'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('subject') }}</small>
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item">
                                        <label>
                                            <span>Your message<i>*</i></span>
                                            <textarea name="message"></textarea>
                                            @if($errors->has('message'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="comment-submit">Send us message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-map">
            <img class="img-responsive" src="images/csgo/contacts-map.jpg" alt="contacts-map">
        </div>
    </section>
    <!--CONTACT WRAP END-->
@endsection
