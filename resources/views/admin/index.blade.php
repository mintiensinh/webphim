<!DOCTYPE html>
<html lang="en" xmlns:fb='http://www.facebook.com/2008/fbml'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <!--icheck-->
  <link href="{{asset('js/iCheck/skins/minimal/minimal.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/square.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/red.css')}}" rel="stylesheet">
  <link href="{{asset('js/iCheck/skins/square/blue.css')}}" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="{{asset('css/clndr.css')}}" rel="stylesheet">

  <!--common-->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript">
        // Get rid of the Facebook residue hash in the URI
        // Must be done in JS cuz hash only exists client-side
        // IE and Chrome version of the hack
        if (String(window.location.hash).substring(0,1) == "#") {
                window.location.hash = "";
                window.location.href=window.location.href.slice(0, -1);
                }
        // Firefox version of the hack
        if (String(location.hash).substring(0,1) == "#") {
                location.hash = "";
                location.href=location.href.substring(0,location.href.length-3);
                }
</script>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index_alt.html"> Dashboard 1</a></li>
                        <li class="active"><a href="index.html"> Dashboard 2</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="blank_page.html"> Blank Page</a></li>
                        <li><a href="boxed_view.html"> Boxed Page</a></li>
                        <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                        <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> General</a></li>
                        <li><a href="buttons.html"> Buttons</a></li>
                        <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                        <li><a href="typography.html"> Typography</a></li>
                        <li><a href="slider.html"> Slider</a></li>
                        <li><a href="panels.html"> Panels</a></li>
                        <li><a href="widgets.html"> Widgets</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >
    	<div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->

            <div class="menu-right">

                <div class="btn" style="margin-top: 10px; width: 100px; margin-right:50px; ">
                    <a href="{{ url('/logout') }}" style="text-decoration: none"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                </div>

					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
					</form>
			</div>
        </div>

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row states-info">
            <div class="col-md-3">
                <div class="panel red-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Dollar Profit Today </span>
                                <h4>$ 23,232</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-tag"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">  Copy Sold Today  </span>
                                <h4>2,980</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel green-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">  New Order  </span>
                                <h4>5980</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel yellow-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">  Unique Visitors  </span>
                                <h4>10,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Area Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="visitors-chart">
                                <div id="visitors-container" style="width: 100%;height:358px; text-align: center; margin:0 auto;">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div class="wdgt-profile">
                        <div class="profile">
                            <img src="images/gallery/wdgt-img.jpg" alt=""/>
                            <div class="profile-social">
                                <a href="#" ><i class="fa fa-pinterest"></i></a>
                                <a href="#" ><i class="fa fa-twitter"></i></a>
                                <a href="#" ><i class="fa fa-facebook"></i></a>
                            </div>
                            <ul class="profile-tab">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-camera"></i>
                                        Photo
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-music"></i>
                                        Music
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-comments"></i>
                                        Comments
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="profile-info">
                            <h5>Margarita Rose</h5>
                            <span>Creative Designer</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="panel widget-info-one">
                        <div class="avatar-img">
                            <img src="images/gallery/image3.jpg" alt=""/>
                        </div>
                        <div class="inner">
                            <div class="avatar"><img alt="" src="images/photos/userprofile.png"></div>
                            <h5>Margarita Rose</h5>
                            <span class="subtitle">
                                Praesent magna nunc, tincidunt pretium.
                            </span>
                        </div>
                        <div class="panel-footer">
                            <ul class="post-view">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    109
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-comment"></i>
                                    </a>
                                    233
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    34
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body extra-pad">
                                    <h4 class="pros-title">prospective <span>leads</span></h4>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-4">
                                            <div id="p-lead-1"></div>
                                            <p class="p-chart-title">Laptop</p>
                                        </div>
                                        <div class="col-sm-4 col-xs-4">
                                            <div id="p-lead-2"></div>
                                            <p class="p-chart-title">iPhone</p>
                                        </div>
                                        <div class="col-sm-4 col-xs-4">
                                            <div id="p-lead-3"></div>
                                            <p class="p-chart-title">iPad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body extra-pad">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="v-title">Visits</div>
                                        <div class="v-value">10,090</div>
                                        <div id="visit-1"></div>
                                        <div class="v-info">Pages/Visit</div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="v-title">Unique Visitors</div>
                                        <div class="v-value">8,173</div>
                                        <div id="visit-2"></div>
                                        <div class="v-info">Avg. Visit Duration</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="iconic-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="last" href="#">
                                        <i class="fa fa-crosshairs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>

                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="dir-info">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="images/photos/user2.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Wild Awake</h5>
                                        <span>
                                            <a href="#" class="small"> katy Perry</a>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <a class="dir-like" href="#">
                                            <span class="small">434</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="images/photos/user1.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Bulet Proof</h5>
                                        <span>
                                            <a href="#" class="small"> Bruno Mars</a>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <a class="dir-like" href="#">
                                            <span class="small">441</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="images/photos/user3.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Bit it</h5>
                                        <span>
                                            <a href="#" class="small"> Jackson</a>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <a class="dir-like" href="#">
                                            <span class="small">124</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="images/photos/user4.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Its my life</h5>
                                        <span>
                                            <a href="#" class="small"> Bon jovi</a>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <a class="dir-like" href="#">
                                            <span class="small">334</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="images/photos/user1.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Bulet Proof</h5>
                                        <span>
                                            <a href="#" class="small"> Bruno Mars</a>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <a class="dir-like" href="#">
                                            <span class="small">44</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <header class="panel-heading">
                            Chat
                        </header>
                        <div class="panel-body">
                            <ul class="chats cool-chat">
                                <li class="in">
                                    <img src="images/photos/user1.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Jone Doe</a>
                                        <span class="datetime">at Mar 12, 2014 6:12</span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img src="images/photos/user2.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Margarita Rose</a>
                                        <span class="datetime">at Mar 12, 2014 6:13</span>
                                        <span class="body">
                                            sed diam nonummy nibh euismod tincidunt ut
                                        </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img src="images/photos/user1.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Jone Doe</a>
                                        <span class="datetime">at Mar 12, 2014 6:12</span>
                                        <span class="body">
                                            aoreet dolore magna aliquam erat volutpat.
                                        </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img src="images/photos/user2.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Margarita Rose</a>
                                        <span class="datetime">at Mar 12, 2014 6:13</span>
                                        <span class="body">
                                            sed diam nonummy nibh euismod tincidunt ut
                                        </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img src="images/photos/user1.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Jone Doe</a>
                                        <span class="datetime">at Mar 12, 2014 6:12</span>
                                        <span class="body">
                                            aoreet dolore magna aliquam erat volutpat.
                                        </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img src="images/photos/user2.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a class="name" href="#">Margarita Rose</a>
                                        <span class="datetime">at Mar 12, 2014 6:13</span>
                                        <span class="body">
                                            sed diam nonummy nibh
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-form ">
                                <form role="form" class="form-inline">
                                    <div class="form-group">
                                        <input type="text" style="width: 100%" placeholder="Type a message here..." class="form-control">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <section class="panel post-wrap pro-box">
                        <aside class="post-highlight purple v-align">
                            <div class="panel-body">
                                <h2>AdminEx in Excelent templates <a href="javascript:;"> http://themebucket.net/</a> 1 days ago  by John Doe</h2>
                            </div>
                        </aside>
                        <aside>
                            <div class="post-info">
                                <span class="arrow-pro left"></span>
                                <div class="panel-body">
                                    <div class="text-center twite">
                                        <i class="fa fa-twitter"></i>
                                        <h1>Twitter Feed</h1>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </section>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media usr-info">
                                <a href="#" class="pull-left">
                                    <img class="thumb" src="images/photos/user2.png" alt=""/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Mila Watson</h4>
                                    <span>Senior UI Designer</span>
                                    <p>I use to design websites and applications for the web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer custom-trq-footer">
                            <ul class="user-states">
                                <li>
                                    <i class="fa fa-heart"></i> 127
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i> 853
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> 311
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel blue-box twt-info">
                        <div class="panel-body">
                            <h3>19 Februay 2014</h3>

                            <p>AdminEx is new model of admin
                                dashboard <a href="#">http://t.co/3laCVziTw4</a>
                                4 days ago by John Doe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Place js at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>

<!--easy pie chart-->
<script src="{{asset('js/easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart/easypiechart-init.js')}}"></script>

<!--Sparkline Chart-->
<script src="{{asset('js/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('js/sparkline/sparkline-init.js')}}"></script>

<!--icheck -->
<script src="{{asset('js/iCheck/jquery.icheck.js')}}"></script>
<script src="{{asset('js/icheck-init.js')}}"></script>

<!-- jQuery Flot Chart-->
<script src="{{asset('js/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.pie.resize.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('js/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('js/main-chart.js')}}"></script>

<!--common scripts for all pages-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
