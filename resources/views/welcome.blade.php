@extends('layouts.master')
@section('title')
<title>livestream bundesliga - fußball bundesliga live stream | Hdfootball.de</title>
<meta name='description' content='alle bundesliga spiele anschauen on Hdfootball.de for free' />
<meta name="keywords" content='fußball bundesliga live, fussball live tv, live tv fussball, fußball live im tv, fußball heute im tv, fussball im tv, bundesliga livestream net, fußball heute, fußball live heute, fußball heute live, fußball bundesliga heute, fußball heute abend, fußball live stream kostenlos heute, fußball heute live stream, champions league live stream kostenlos heute, fußball live gucken,live übertragung fußball heute, live streaming fußball, bundesliga stream ru'/>
@endsection
@section('content')
@include('backend.layouts.nav')
<div class="bg-img">
    <div class="container content-wrap">
        <div class="site-hd">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#"><span class="icon is-small"><i class="fa fa-home"></i></span><span>Bulma</span></a></li>
                    <li><a href="#"><span class="icon is-small"><i class="fa fa-book"></i></span><span>Documentation</span></a></li>
                    <li><a href="#"><span class="icon is-small"><i class="fa fa-puzzle-piece"></i></span><span>Components</span></a></li>
                    <li class="is-active"><a href="#" aria-current="page"><span class="icon is-small"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span><span>Breadcrumb</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="site-content">
            <div class="time">
                <p>07.11.17</p>
            </div>
            <div class="wrap-match">
                <div class="row match-content">
                    <div class="col-xs-3 match-time">
                        <p>16:00 - 18:00</p>
                    </div>
                    <div class="col-xs-7 match-link">
                        <p> CR Belouizdad - Oran </p>
                    </div>
                    <div class="col-xs-2 match-status">
                        <p>Live</p>
                    </div>
                </div>
                <div class="row match-content">
                    <div class="col-xs-3 match-time">
                        <p>16:00 - 18:00</p>
                    </div>
                    <div class="col-xs-7 match-link">
                        <p> CR Belouizdad - Oran </p>
                    </div>
                    <div class="col-xs-2 match-status">
                        <p>Live</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer"></div>
    </div>
</div>

@endsection