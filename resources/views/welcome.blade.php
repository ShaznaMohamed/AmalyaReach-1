@extends('layouts.app')

@include('templates.partials.slideshow')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
            <div>
                <a href="http://www.accuweather.com/en/lk/colombo/311399/weather-forecast/311399" class="aw-widget-legal">
                </a>

                <div id="widgetsize" class="aw-widget-current"  data-locationkey="311399" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1453043707827">
                </div>
                <script type="text/javascript" src="http://oap.accuweather.com/launch.js">
                </script>

                <div id="timeWeather" class="posabs">
                    <h5 data-ng-bind-template="Colombo, Sri Lanka Weather" class="ng-binding">Colombo, Sri Lanka</h5>

                    <div class="hoteltimeWetaher posabs">
                        <p class="hotel-timeWetaher useUppercase non-mobile"><span class="timeText">Local Time</span> / <span class="weatherText">Temperature</span></p>
                    </div>

                    <div class="time-weather posabs clear-fix">
                        <div class="hotel-time float-l time">
                            <span id="digital-clock"><iframe src="http://free.timeanddate.com/clock/i511n03v/n389/ts1" frameborder="0" width="63" height="18"></iframe></span>

                        </div>
                        <div class="hotel-time weather float-r">
                            <div id="weather1" class="weather">
                                <div id="weather1_acc" class="accweather">
                                    <a href="http://www.accuweather.com/en-us/LK/1/Colombo/Quick-Look.aspx?p=travelclick&amp;cityId=311399" target="_blank">
                                        <span class="weather-tempC">23 °C</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
