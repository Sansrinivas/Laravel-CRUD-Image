<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/codex/v1.1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:10:27 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Codex Admin Template</title>

        <!-- Bootstrap -->
        <link href="{{ config('app.url') }}/adminpanel/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/css/waves.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ config('app.url') }}/adminpanel/css/nanoscroller.css">
        <link href="{{ config('app.url') }}/adminpanel/css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/css/menu-light.css" type="text/css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/css/style.css" type="text/css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/font-awesome/css/font-awesome.min.css" rel="stylesheet">


        <link href="{{ config('app.url') }}/adminpanel/css/app.min.1.css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/css/fullcalendar.min.css" rel="stylesheet">

        <link href="{{ config('app.url') }}/adminpanel/css/themify-icons.css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/css/color.css" rel="stylesheet">
        <link href="{{ config('app.url') }}/adminpanel/js/c3/c3.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fixed-navbar fixed-sidebar">
        <!-- Static navbar -->
        <!-- Simple splash screen-->
        <div class="splash"><div class="splash-title"><div class="spinner">
                    <img src="adminpanel/images/loading-new.gif" alt=""/>
                </div> </div> </div>
        <!--[if lt IE 7]>
        <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-default yamm navbar-fixed-top" id="header"> <div class="container-fluid padding-l-r">
                <div class="left-part">
                    <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i>  Codex</a></div>
                </div>
              <!-- Header Menu Begins -->
                @include('includes.header')
            </div><!--/.container-fluid -->
        </nav>
        <!-- Right sidebar -->
        <div id="right-sidebar" class="animated fadeInRight col-md-12">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="fa fa-times" aria-hidden="true"></i>
            </button><div class="clearfix" style="height:10px;"></div>
            <ul class="basic-list">
                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
            </ul>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="adminpanel/images/avtar-1.jpg">
                </a>
                <div class="media-body">
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="adminpanel/images/avtar-1.jpg">
                </a>
                <div class="media-body">
                    There are many variations of passages of Lorem Ipsum available.
                    <br>
                    <small class="text-muted">Today 4:21 pm</small>
                </div>
            </div>

            <div class="feed-activity-list">

                <div class="feed-element">
                    <div>
                        <small class="pull-right text-navy">1m ago</small>
                        <strong>Monica Smith</strong>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                    </div>
                </div>



                <div class="feed-element">
                    <div>
                        <small class="pull-right">5m ago</small>
                        <strong>Anna Legend</strong>
                        <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                    </div>
                </div>
                <div class="feed-element">
                    <div>
                        <small class="pull-right">5m ago</small>
                        <strong>Damian Nowak</strong>
                        <div>The standard chunk of Lorem Ipsum used </div>
                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                    </div>
                </div>


            </div>

        </div>
        <section class="page">

            @include('includes.left_menu')

            <div id="wrapper">
                <div class="content-wrapper container">
                  <div class="col-md-12">
                      <div class="panel panel-card margin-b-30">
                          <!-- Start .panel -->
                          <div class="panel-heading">
                              <h4 class="panel-title"> Settings</h4>
                              <div class="panel-actions">
                                  <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                  <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                              </div>
                          </div>
                          <div class="panel-body">
                              <form method="get" class="form-horizontal" action="{{ route('update_setting')}}">
                                @foreach($settings as $setting)
                                  <div class="form-group"><label class="col-sm-2 control-label">Restaurants</label>

                                      <div class="col-sm-10"><input type="text" name="restaurants" class="form-control" value="{{ $setting->restaurants}}"> </div>
                                  </div>
                                  <div class="hr-line-dashed"></div>
                                  <div class="form-group"><label class="col-sm-2 control-label">Coming Soon</label>
                                    <div class="col-sm-10"><input type="text" name="coming_soon" class="form-control" value="{{ $setting->coming_soon}}"></div>
                                  </div>
                                  <input type="hidden" name="id" class="form-control" value="{{ $setting->id}}">
                                  @endforeach()
                              </div>
                                  <div class="hr-line-dashed"></div>
                                  <div class="form-group">
                                      <div class="col-sm-4 col-sm-offset-2">
                                          <button class="btn btn-white" type="submit">Cancel</button>
                                          <button class="btn btn-primary" type="submit">Save changes</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>


                  </div>
                </div>



          </section>

          <script type="text/javascript" src="adminpanel/js/jquery.min.js"></script>
          <script type="text/javascript" src="adminpanel/bootstrap/js/bootstrap.min.js"></script>
          <script src="adminpanel/js/metisMenu.min.js"></script>
          <script src="adminpanel/js/jquery.nanoscroller.min.js"></script>
          <script src="adminpanel/js/jquery-jvectormap-1.2.2.min.js"></script>
          <!-- Flot -->
          <script src="adminpanel/js/flot/jquery.flot.js"></script>
          <script src="adminpanel/js/flot/jquery.flot.tooltip.min.js"></script>
          <script src="adminpanel/js/flot/jquery.flot.resize.js"></script>
          <script src="adminpanel/js/flot/jquery.flot.pie.js"></script>
          <script src="adminpanel/js/flot/curved-line-chart.js"></script>
          <script src="adminpanel/js/chartjs/Chart.min.js"></script>
          <script src="adminpanel/js/pace.min.js"></script>
          <script src="adminpanel/js/waves.min.js"></script>
          <script src="adminpanel/js/morris_chart/raphael-2.1.0.min.js"></script>
          <script src="adminpanel/js/morris_chart/morris.js"></script>
          <script src="adminpanel/js/jquery.sparkline.min.js"></script>
          <script src="adminpanel/js/jquery-jvectormap-world-mill-en.js"></script>

          <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
          <script type="text/javascript" src="adminpanel/js/custom.js"></script>
          <!-- ChartJS-->
          <script src="adminpanel/js/chartjs/Chart.min.js"></script>

          <!--page js-->
          <script src="adminpanel/js/moment.min.js"></script>
          <script src="adminpanel/js/c3/d3.v3.min.js" charset="utf-8"></script>
          <script src="adminpanel/js/jquery.simpleWeather.min.js"></script>
          <script src="adminpanel/js/fullcalendar.min.js"></script>
          <script src="adminpanel/js/c3/c3.min.js"></script>
          <script src="adminpanel/js/index.js"></script>
      </body>

  <!-- Mirrored from psd2allconversion.com/templates/themeforest/html/codex/v1.1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:12:38 GMT -->
  </html>
