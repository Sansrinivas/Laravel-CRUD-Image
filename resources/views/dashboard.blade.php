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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Dashboard<small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->



                    <div class="row row-md">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">1,325</h1>
                                    <h6 class="text-uppercase">Orders</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">$ 47,855</h1>
                                    <h6 class="text-uppercase">Revenue</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-package"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">6,800</h1>
                                    <h6 class="text-uppercase">Products</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block  tile-2  widget-box clearfix height-auto">
                                <div class="t-icon right"><i class="ti-receipt"></i></div>
                                <div class="t-content">
                                    <h1 class="m-b-1">1,682</h1>
                                    <h6 class="text-uppercase">Sold</h6>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Product Data</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="pdata" ></div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-8">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Product Order</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div class="table-responsive table-commerce">
                                        <table id="basic-datatables" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px">
                                                        <strong>ID</strong>
                                                    </th>

                                                    <th>
                                                        <strong>CLIENT NAME</strong>
                                                    </th>
                                                    <th>
                                                        <strong>AMOUNT</strong>
                                                    </th>
                                                    <th>
                                                        <strong>QUANTITY</strong>
                                                    </th>
                                                    <th>
                                                        <strong>SHIPMENT</strong>
                                                    </th>
                                                    <th class="text-center">
                                                        <strong>STATUS</strong>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>  <tr>
                                                    <td>0001</td>

                                                    <td>Addison Nichols</td>
                                                    <td>$ 515.20</td>
                                                    <td>547</td>
                                                    <td>04/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0001</td>

                                                    <td>Addison Nichols</td>
                                                    <td>$ 515.20</td>
                                                    <td>547</td>
                                                    <td>04/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0002</td>

                                                    <td>Albert Watkins</td>
                                                    <td>$ 22.30</td>
                                                    <td>122</td>
                                                    <td>06/10/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-success">Paid</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>0003</td>

                                                    <td>Johnny Fernandez</td>
                                                    <td>$ 31.4</td>
                                                    <td>68</td>
                                                    <td>28/09/2015</td>
                                                    <td class="text-center">
                                                        <span class="label label-info">Standby</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>00011</td>

                                                    <td>Gilbert Edwards</td>
                                                    <td>$ 5115.12</td>
                                                    <td>51</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                        <span class="label label-inverse">Canceled</span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>00012</td>

                                                    <td>Norman Hill</td>
                                                    <td>$ 5124.13</td>
                                                    <td>41</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                        <span class="label label-purple">Shipped</span>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- End .panel -->
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Total Money Spent</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="morris-bar-chart" ></div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Analytic Record</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="morris-line-chart"></div>

                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-lg-4">

                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Spark Line</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="timeseriesChart" style="height:350px;"></div>

                                </div>
                            </div><!-- End .panel -->



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-card margin-b-30">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> User Activity</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                    </div>
                                </div>
                                <div class="panel-body">

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
                                                <small class="pull-right">2m ago</small>
                                                <strong>Jogn Angel</strong>
                                                <div>There are many variations of passages of Lorem Ipsum available</div>
                                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Jesica Ocean</strong>
                                                <div>Contrary to popular belief, Lorem Ipsum</div>
                                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Monica Jackson</strong>
                                                <div>The generated Lorem Ipsum is therefore </div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
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
                                        <div class="feed-element">
                                            <div>
                                                <small class="pull-right">5m ago</small>
                                                <strong>Gary Smith</strong>
                                                <div>200 Latin words, combined with a handful</div>
                                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-card margin-b-30">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Statistics</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div>
                                        <h4>Messages <span class="badge badge-info pull-right">16</span></h4>
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
                                                <img alt="image" class="img-circle" src="adminpanel/images/avtar-2.jpg">
                                            </a>
                                            <div class="media-body">
                                                TIt is a long established fact that.
                                                <br>
                                                <small class="text-muted">Yesterday 2:45 pm</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="adminpanel/images/avtar-3.jpg">
                                            </a>
                                            <div class="media-body">
                                                Many desktop publishing packages.
                                                <br>
                                                <small class="text-muted">Yesterday 1:10 pm</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="adminpanel/images/avtar-3.jpg">
                                            </a>
                                            <div class="media-body">
                                                Many desktop publishing packages.
                                                <br>
                                                <small class="text-muted">Yesterday 1:10 pm</small>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-t-md">
                                        <h4>Statistics</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                        <div class="row m-t-sm">
                                            <div class="col-md-6">
                                                <span class="bar" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="3.3" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="6.6" y="0" width="2.3" height="16"></rect><rect fill="#d7d7d7" x="9.899999999999999" y="5.333333333333334" width="2.3" height="10.666666666666666"></rect><rect fill="#1ab394" x="13.2" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="16.5" y="0" width="2.3" height="16"></rect><rect fill="#1ab394" x="19.799999999999997" y="3.555555555555557" width="2.3" height="12.444444444444443"></rect><rect fill="#d7d7d7" x="23.099999999999998" y="10.666666666666668" width="2.3" height="5.333333333333333"></rect><rect fill="#1ab394" x="26.4" y="7.111111111111111" width="2.3" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="29.7" y="12.444444444444445" width="2.3" height="3.5555555555555554"></rect></svg>
                                                <h5><strong>169</strong> Posts</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"></polygon><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg>
                                                <h5><strong>28</strong> Orders</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-md">
                                        <h4>Discussion</h4>
                                        <div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <span class="badge badge-primary">16</span>
                                                    General topic
                                                </li>
                                                <li class="list-group-item ">
                                                    <span class="badge badge-info">12</span>
                                                    The generated Lorem
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-warning">7</span>
                                                    There are many variations
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-box clearfix">
                                <div class="pull-center">
                                    <h4>User Performance</h4>
                                    <h2>17,50</h2>
                                </div>
                                <div class="text-center">
                                    <i class="pe-7s-graph1 fa-4x"></i>

                                    <h1 class="m-xs">$1 206,90</h1>

                                    <h3 class="font-extra-bold no-margins text-success">
                                        All Income
                                    </h3>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget-box clearfix">
                                <div>

                                    <h4>Users Activity</h4>

                                    <div class="m-t-xl">
                                        <h2>210</h2><br />
                                        <span class="font-bold no-margins">
                                            Social users
                                        </span>

                                        <div class="progress m-t-xs full progress-small">
                                            <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                                                 role="progressbar" class=" progress-bar progress-bar-success">
                                                <span class="sr-only">35% Complete (success)</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <small class="stats-label">Pages / Visit</small>
                                                <h4>7.80</h4>
                                            </div>

                                            <div class="col-xs-6">
                                                <small class="stats-label">% New Visits</small>
                                                <h4>76.43%</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-box clearfix p3-bg">
                                <div>
                                    <div class="pad-all">
                                        <h2> HDD Usage</h2><br/>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">132Gb</span>
                                            Free Space
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">1,45Gb</span>
                                            Used space
                                        </p>
                                    </div>
                                    <div class="pad-all text-center">
                                        <!--Placeholder--><br/>
                                        <div id="demo-sparkline-area"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-box clearfix">
                                <div>
                                    <h2><i class="fa fa-tasks pull-right p4-color"></i></h2>
                                    <h4>Pending Orders</h4>
                                    <h2>256</h2>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-card ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Visitors location</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div id="world-map" style="width: 100%; height: 280px"></div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="map_progress">
                                                <h4>Unique Visitors</h4>
                                                <span><small>Last Week Rise by 62%</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>

                                                <h4>Registrations</h4>
                                                <span><small>Up by 57% last 7 days</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>

                                                <h4>Direct Sales</h4>
                                                <span><small>Last Month Rise by 22%</small></span>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .panel -->
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Total Product Sales</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">

                                    <div id="cw-body"></div>


                                </div>
                            </div><!-- End .panel -->
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Monthly sale Compare</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">



                                    <!--Widget body-->
                                    <div id="demo-chat-body" class="in ">
                                        <div class="nano has-scrollbar" style="height:400px">
                                            <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                                                <ul class="list-unstyled media-block">
                                                    <li class="mar-btm">
                                                        <div class="media-left">
                                                            <img src="adminpanel/images/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor">
                                                            <div class="speech">
                                                                <p>Hello Lucy, how can I help you today ?</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i>09:23AM
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-right">
                                                            <img src="adminpanel/images/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor speech-right">
                                                            <div class="speech">
                                                                <p>Hi, I want to buy a new shoes.</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:23AM
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-left">
                                                            <img src="adminpanel/images/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor">
                                                            <div class="speech">

                                                                <p>Shipment is free. You\'ll get your shoes tomorrow!</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:25
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-right">
                                                            <img src="adminpanel/images/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor speech-right">
                                                            <div class="speech">

                                                                <p>Wow, that\'s great!</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:27
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-right">
                                                            <img src="adminpanel/images/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor speech-right">
                                                            <div class="speech">

                                                                <p>Ok. Thanks for the answer. Appreciated.</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:28
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-left">
                                                            <img src="adminpanel/images/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor">
                                                            <div class="speech">

                                                                <p>You are welcome! <br> Is there anything else I can do for you today?</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:30
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-right">
                                                            <img src="adminpanel/images/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor speech-right">
                                                            <div class="speech">

                                                                <p>Nope, That\'s it.</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:31
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mar-btm">
                                                        <div class="media-left">
                                                            <img src="adminpanel/images/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor">
                                                            <div class="speech">

                                                                <p>Thank you for contacting us today</p>
                                                                <p class="speech-time">
                                                                    <i class="fa fa-clock-o fa-fw"></i> 09:32
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

                                        <!--Widget footer-->
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <input type="text" placeholder="Enter your text" class="form-control chat-input">
                                                </div>
                                                <div class="col-xs-4">
                                                    <button class="btn btn-primary btn-block" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- End .panel -->
                        </div>
                    </div>


                </div><div style="clear:both;"></div> </div>
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
