<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->


    <?= $this->Html->css("/admin_assets/assets/css/style.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/css/loader-style.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/css/bootstrap.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/js/progress-bar/number-pb.css"); ?>

    <style type="text/css">
    canvas#canvas4 {
        position: relative;
        top: 20px;
    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <?= $this->Element('Admincp/MenuTop');?>

    <!-- SIDE MENU -->
    <?= $this->Element('Admincp/MenuSide');?>
    <!-- END OF SIDE MENU -->

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">

            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-window"></i> 
                            <span>Dashboard
                            </span>
                        </h2>

                    </div>

                    <div class="col-sm-7">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="tittle-middle-header">

                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="tittle-alert entypo-info-circled"></span>
                                Welcome back,&nbsp;
                                <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                            </div>


                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="btn-group btn-wigdet pull-right visible-lg">
                            <div class="btn">
                                Widget</div>
                            <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-heart margin-iconic"></span>Favorite</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-cog margin-iconic"></span>Setting</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Home</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Dashboard</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">

                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->

            <!--  DEVICE MANAGER -->
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="order" id="orderClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="maki-airport"></i>&#160;&#160;Daily Posts</span>
                                </h3>
                            </div>
                            <div class="value">
                                <b style="font-size:60px;">60</b>
                                <b>Posts</b>

                            </div>

                            <div class="progress-tinny">
                                <div style="width: 10%" class="bar"></div>
                            </div>
                            <div class="profit-line">
                                <i class="fa fa-caret-down fa-lg"></i>&#160;&#160;Rate : 20 Plane/Hour</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="order" id="orderClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="maki-airport"></i>&#160;&#160;New Users</span>
                                </h3>
                            </div>
                            <div class="value">
                                <span><i class="fa fa-plane fa-2x"></i>
                                </span><b id="speed"></b><b>Take Off</b>

                            </div>

                            <div class="progress-tinny">
                                <div style="width: 10%" class="bar"></div>
                            </div>
                            <div class="profit-line">
                                <i class="fa fa-caret-down fa-lg"></i>&#160;&#160;Rate : 20 Plane/Hour</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="order" id="orderClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="maki-airport"></i>&#160;&#160;Questions & Answers</span>
                                </h3>
                            </div>
                            <div class="value">
                                <span><i class="fa fa-plane fa-2x"></i>
                                </span><b id="speed"></b><b>Take Off</b>

                            </div>

                            <div class="progress-tinny">
                                <div style="width: 10%" class="bar"></div>
                            </div>
                            <div class="profit-line">
                                <i class="fa fa-caret-down fa-lg"></i>&#160;&#160;Rate : 20 Plane/Hour</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class=" member" id="memberClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="fa fa-truck"></i>
                                        &#160;&#160;SUPPORTS
                                    </span>
                                </h3>
                            </div>
                            <div class="value">
                                <span><i class="maki-warehouse"></i>
                                </span>45<b>Sent</b>

                            </div>
                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                            <div class="profit-line">
                                <span class="entypo-down-circled"></span>&#160;50% From Last Month</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  / DEVICE MANAGER -->

            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6>
                                    <span class="fontawesome-truck"></span>&nbsp;Destination</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#siteClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#site">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div id="site" class="body-nest" style="min-height:296px;">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="armada-devider">
                                                    <div class="armada">
                                                        <span style="background:#65C3DF">
                                                            <span class="maki-bus"></span>&nbsp;&nbsp;Trans Berlin</span>
                                                        <p>
                                                            <span class="entypo-gauge"></span>&nbsp;12 Km/<i>Hours</i>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="driver-devider">
                                                    <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/14.jpg">
                                                    <h3>Mark Zukenbeirg</h3>
                                                    <br>
                                                    <p>Driver</p>
                                                </td>
                                                <td class="progress-devider">


                                                    <section id="basic">
                                                        <article>

                                                            <div class="number-pb">
                                                                <div class="number-pb-shown"></div>
                                                                <div class="number-pb-num">0</div>
                                                            </div>
                                                        </article>
                                                    </section>
                                                    <span class="label pull-left">Berlin</span>
                                                    <span class="label pull-right">Muchen</span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="armada-devider">
                                                    <div class="armada">
                                                        <span style="background:#45B6B0">
                                                            <span class="fontawesome-plane"></span>&nbsp;&nbsp;Fly Airlines</span>
                                                        <p>
                                                            <span class="entypo-gauge"></span>&nbsp;600 Km/<i>Hours</i>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="driver-devider">
                                                    <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/38.jpg">
                                                    <h3>Marko Freytag</h3>
                                                    <br>
                                                    <p>Pilot</p>
                                                </td>
                                                <td class="progress-devider">


                                                    <section id="percentage">
                                                        <article>
                                                            <div class="number-pb">
                                                                <div class="number-pb-shown dream"></div>
                                                                <div class="number-pb-num">0%</div>
                                                            </div>
                                                        </article>
                                                    </section>


                                                    <span class="label pull-left">Berlin</span>
                                                    <span class="label pull-right">London</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="armada-devider">
                                                    <div class="armada">
                                                        <span style="background:#FF6B6B">
                                                            <span class="maki-aboveground-rail"></span>&nbsp;&nbsp;Fazttrain</span>
                                                        <p>
                                                            <span class="entypo-gauge"></span>&nbsp;40 Km/<i>Hours</i>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="driver-devider">
                                                    <img class="armada-pic img-circle" alt="" src="http://api.randomuser.me/portraits/thumb/men/39.jpg">
                                                    <h3>Dieter Gruenewald</h3>
                                                    <br>
                                                    <p>machinist</p>
                                                </td>
                                                <td class="progress-devider">

                                                    <section id="step">
                                                        <article>

                                                            <div class="number-pb">
                                                                <div class="number-pb-shown sun"></div>
                                                                <div class="number-pb-num">0/0</div>
                                                            </div>
                                                        </article>
                                                    </section>

                                                    <span class="label pull-left">Berlin</span>
                                                    <span class="label pull-right">Dortmund</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="RealTimeClose" class="nest">
                            <div class="title-alt">
                                <h6>
                                    <span class="fontawesome-resize-horizontal"></span>&nbsp;Direction</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#RealTimeClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#RealTime">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div id="RealTime" style="min-height:296px;padding-top:20px;" class="body-nest">
                                <ul class="direction">
                                    <li>
                                        <span class="direction-icon maki-fuel" style="background:#FF6B6B"></span>
                                        <h3>
                                            <span>Gas Station</span>
                                        </h3>
                                        <p>5 Km Foward&nbsp;&nbsp;<i class="fa fa-arrow-circle-up"></i>
                                        </p>
                                        <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <span class="direction-icon maki-fast-food" style="background:#65C3DF"></span>
                                        <h3>
                                            <span>Restourant</span>
                                        </h3>
                                        <p>1 Km Turn Left&nbsp;&nbsp;<i class="fa fa-reply"></i>
                                        </p>
                                        <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <span class="direction-icon maki-giraffe" style="background:#45B6B0"></span>
                                        <h3>
                                            <span>Zoo</span>
                                        </h3>
                                        <p>3 Km Turn Right &nbsp;&nbsp;<i class="fa fa-share"></i>
                                        </p>
                                        <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                    </li>
                                    <li class="divider"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="chart-wrap">
                            <div class="chart-dash">
                                <div id="placeholder" style="width:100%;height:300px;"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /END OF CONTENT -->



                <!-- FOOTER -->
                <div class="footer-space"></div>
                <div id="footer">
                    <div class="devider-footer-left"></div>
                    <div class="time">
                        <p id="spanDate"></p>
                        <p id="clock"></p>
                    </div>
                    <div class="copyright">Make with Love
                        <span class="entypo-heart"></span>2014 <a href="http://gamatechno.com">Thesmile</a> All Rights Reserved</div>
                    <div class="devider-footer"></div>


                </div>
                <!-- / END OF FOOTER -->


            </div>
        </div>
    </div>
    <!--  END OF PAPER WRAP -->

    <!-- RIGHT SLIDER CONTENT -->
    <div class="sb-slidebar sb-right">
        <div class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
                </h3>
                <div class="col-sm-12">

                    <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Distance traveled</b>
                        <br>
                        <i>86% to the check point</i>
                    </div>

                    <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>The average speed</b>
                        <br>
                        <i>30KM/h avarage speed</i>
                    </div>


                    <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Overall result</b>
                        <br>
                        <i>30KM/h avarage Result</i>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:0;" class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
                </h3>
                <div class="col-sm-12">
                    <span class="label label-warning label-chat">Online</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>


                    </ul>

                    <span class="label label-chat">Offline</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF RIGHT SLIDER CONTENT-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <?= $this->Html->script("/admin_assets/assets/js/progress-bar/src/jquery.velocity.min.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/progress-bar/number-pb.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/progress-bar/progress-app.js"); ?>

    <!-- MAIN EFFECT -->
    <?= $this->Html->script("/admin_assets/assets/js/preloader.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/bootstrap.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/app.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/load.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/main.js"); ?>

    <!-- GAGE -->
    <?= $this->Html->script("/admin_assets/assets/js/chart/jquery.flot.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/chart/jquery.flot.resize.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/chart/realTime.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/speed/canvasgauge-coustom.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/countdown/jquery.countdown.js"); ?>
    <?= $this->Html->script("/admin_assets/assets/js/jhere-custom.js"); ?>

    <script>
    var gauge4 = new Gauge("canvas4", {
        'mode': 'needle',
        'range': {
            'min': 0,
            'max': 90
        }
    });
    gauge4.draw(Math.floor(Math.random() * 90));
    var run = setInterval(function() {
        gauge4.draw(Math.floor(Math.random() * 90));
    }, 3500);
    </script>


    <script type="text/javascript">
    /* Javascript
     *
     * See http://jhere.net/docs.html for full documentation
     */
    $(window).on('load', function() {
        $('#mapContainer').jHERE({
            center: [52.500556, 13.398889],
            type: 'smart',
            zoom: 10
        }).jHERE('marker', [52.500556, 13.338889], {
            icon: '/admin_assets/assets/img/marker.png',
            anchor: {
                x: 12,
                y: 32
            },
            click: function() {
                alert('Hallo from Berlin!');
            }
        })
            .jHERE('route', [52.711, 13.011], [52.514, 13.453], {
                color: '#FFA200',
                marker: {
                    fill: '#86c440',
                    text: '#'
                }
            });
    });
    </script>
    <script type="text/javascript">
    var output, started, duration, desired;

    // Constants
    duration = 5000;
    desired = '50';

    // Initial setup
    output = $('#speed');
    started = new Date().getTime();

    // Animate!
    animationTimer = setInterval(function() {
        // If the value is what we want, stop animating
        // or if the duration has been exceeded, stop animating
        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 60)

            );

        } else {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 120)

            );
        }
    }, 5000);
    </script>
</body>

</html>
