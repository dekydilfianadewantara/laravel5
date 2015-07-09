@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->

<title>Rapido - Responsive Admin Template</title>
<!-- start: META -->
<meta charset="utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="" name="author" />
<!-- end: META -->
<!-- start: MAIN CSS -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
<!-- untuk SUMMERNOTE -->

<link rel="stylesheet" href="{{ url('rapido/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/iCheck/skins/all.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/animate.css/animate.min.css') }}">

<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/owl-carousel/owl-carousel/owl.theme.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/owl-carousel/owl-carousel/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/summernote/dist/summernote.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/bootstrap-select/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/DataTables/media/css/DT_bootstrap.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">


<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE CSS -->
<link rel="stylesheet" href="{{ url('rapido/assets/css/styles.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/css/styles-responsive.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/css/plugins.css') }}">
<link rel="stylesheet" href="{{ url('rapido/assets/css/themes/theme-default.css') }}" type="text/css" id="skin_color">
<link rel="stylesheet" href="{{ url('rapido/assets/css/print.css') }}" type="text/css" media="print"/>
<!-- end: CORE CSS -->
<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<!-- start: SLIDING BAR (SB) -->

<div class="container">
  <!-- start: PAGE -->
  <div class="main-content">
    <!-- start: PANEL CONFIGURATION MODAL FORM -->

    <!-- /.modal -->
    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
    <div class="container">
      <!-- start: PAGE HEADER -->
      <!-- start: TOOLBAR -->

      <!-- end: TOOLBAR -->
      <!-- end: PAGE HEADER -->
      <!-- start: BREADCRUMB -->

      <!-- end: BREADCRUMB -->
      <!-- start: PAGE CONTENT -->

      <div class="row">
        <div class="col-md-12">
          <!-- start: FORM VALIDATION 2 PANEL -->
          <div class="panel panel-white">
            <div class="panel-heading">
              <h4 class="panel-title">Form <span class="text-bold">Validation 2</span></h4>
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
              <h2><i class="fa fa-pencil-square"></i> REGISTER</h2>
              <p>
                Create one account to manage everything you do with ClipOne, from your shopping preferences to your ClipOne activity.
              </p>
              <hr>
              <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                  <div class="col-md-12">
                    <div class="errorHandler alert alert-danger no-display">
                      <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                    </div>
                    <div class="successHandler alert alert-success no-display">
                      <i class="fa fa-ok"></i> Your form validation is successful!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">
                        Title <span class="symbol required"></span>
                      </label>
                      <input type="text" placeholder="Insert a Title" class="form-control" id="firstname2" name="title">
                    </div>

                  </div>
                  <div class="col-md-6">



                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">
                        Content <span class="symbol required"></span>
                      </label>
                      <textarea class="form-control" placeholder="Insert Content"   id="editor1" name="content" cols="10" rows="10" name="content"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <label>
                      Upload Photo
                    </label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail"></div>
                      <div>
                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                        <input type="file" name="image">
                      </span>
                      <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                        <i class="fa fa-times"></i> Remove
                      </a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <span class="symbol required"></span>Required Fields
                    <hr>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <p>
                    By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                  </p>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-yellow btn-block" type="submit">
                    Register <i class="fa fa-arrow-circle-right"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- end: FORM VALIDATION 2 PANEL -->
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
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->

<!-- end: FOOTER -->
<!-- start: SUBVIEW SAMPLE CONTENTS -->
<!-- *** NEW NOTE *** -->

<!-- *** READ NOTE *** -->
<div id="readNote">
  <div class="barTopSubview">
    <a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
  </div>
  <div class="noteWrap col-md-8 col-md-offset-2">
    <div class="panel panel-note">
      <div class="e-slider owl-carousel owl-theme">
        <div class="item">
          <div class="panel-heading">
            <h3>This is a Note</h3>
          </div>


        </div>


      </div>
    </div>
  </div>
</div>
<!-- *** SHOW CALENDAR *** -->

<!-- *** NEW EVENT *** -->

<!-- *** READ EVENT *** -->

<!-- *** NEW CONTRIBUTOR *** -->

<!-- end: SUBVIEW SAMPLE CONTENTS -->

<!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <script src="assets/plugins/excanvas.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <!-- end: UNTUK SUMMERNOTE -->


    <!-- end: BODY -->

    @endsection
