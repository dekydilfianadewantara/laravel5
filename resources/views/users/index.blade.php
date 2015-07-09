@extends('layouts.main')
@section('content')


<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="panel panel-white">
            <div class="panel-heading border-light">
                <h4 class="panel-title">Site <span class="text-bold">Visits</span></h4>
                <ul class="panel-heading-tabs border-light">
                    <li>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a class="btn btn-green dropdown-toggle" data-toggle="dropdown" href="#">
                                    Tools <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li class="dropdown-header" role="presentation">
                                        Dropdown header
                                    </li>
                                    <li>
                                        <a href="#">
                                            Action
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Another action
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Something else here
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header" role="presentation">
                                        Dropdown header
                                    </li>
                                    <li>
                                        <a href="#">
                                            Separated link
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rate">
                            <i class="fa fa-caret-up text-green"></i><span class="value">11</span><span class="percentage">%</span>
                        </div>
                    </li>
                    <li class="panel-tools">
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                <li>
                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                </li>
                                <li>
                                    <a class="panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i> <span>Refresh</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i> <span>Configurations</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-expand" href="#">
                                        <i class="fa fa-expand"></i> <span>Fullscreen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-xs btn-link panel-close" href="#">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body partition-green">
                <div class="col-md-12">
                    <div class="height-350">
                        <div id="chart4" class='with-3d-shadow with-transitions'>
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-5">
        <div class="panel">
            <div class="panel-heading">
                <i class="clip-bars"></i>
                <h4 class="panel-title">Pageviews <span class="text-bold">real-time</span></h4>
                <div class="panel-tools">
                    <div class="dropdown">
                        <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                            <li>
                                <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                            </li>
                            <li>
                                <a class="panel-refresh" href="#">
                                    <i class="fa fa-refresh"></i> <span>Refresh</span>
                                </a>
                            </li>
                            <li>
                                <a class="panel-config" href="#panel-config" data-toggle="modal">
                                    <i class="fa fa-wrench"></i> <span>Configurations</span>
                                </a>
                            </li>
                            <li>
                                <a class="panel-expand" href="#">
                                    <i class="fa fa-expand"></i> <span>Fullscreen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <h3 class="inline">26</h3> visitors on-line
                <div class="progress progress-xs transparent-black no-radius">
                    <div aria-valuetransitiongoal="12" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>15</h4>
                        <div class="progress progress-xs transparent-black no-margin no-radius">
                            <div aria-valuetransitiongoal="37" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                        </div>
                        Direct
                    </div>
                    <div class="col-sm-4">
                        <h4>7</h4>
                        <div class="progress progress-xs transparent-black no-margin no-radius">
                            <div aria-valuetransitiongoal="23" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                        </div>
                        Sites
                    </div>
                    <div class="col-sm-4">
                        <h4>4</h4>
                        <div class="progress progress-xs transparent-black no-margin no-radius">
                            <div aria-valuetransitiongoal="13" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                        </div>
                        Search
                    </div>
                </div>
                <div class="row space10">
                    <div class="col-sm-4 text-center">
                        <div class="rate">
                            <i class="fa fa-caret-up text-green"></i><span class="value">26</span><span class="percentage">%</span>
                        </div>
                        Mac OS X
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="rate">
                            <i class="fa fa-caret-up text-green"></i><span class="value">62</span><span class="percentage">%</span>
                        </div>
                        Windows
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="rate">
                            <i class="fa fa-caret-down text-red"></i><span class="value">12</span><span class="percentage">%</span>
                        </div>
                        Other OS
                    </div>
                </div>
                <div class="height-155">
                    <div id='chart2' class='chart half with-transitions'>
                        <svg></svg>
                                                <!--
                                                <button id='start-stop-button'>
                                                Start/Stop Stream
                                                </button>
                                                !-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: PAGE CONTENT-->
                    </div>
                    <div class="subviews">
                        <div class="subviews-container"></div>
                    </div>
                </div>
                <!-- end: PAGE -->
            </div>

@endsection