@extends('layouts.app')

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
                <a href="http://www.accuweather.com/en/lk/colombo/311399/weather-forecast/311399" class="aw-widget-legal"></a>
                <div id="widgetsize" class="aw-widget-current"  data-locationkey="311399" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1453043707827"></div>
                <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
            </div>
        </div>
    </div>
</div>
@endsection
