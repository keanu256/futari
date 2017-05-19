<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>


    <?= $this->Html->css("/admin_assets/assets/css/style.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/css/loader-style.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/css/bootstrap.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/js/button/ladda/ladda.min.css"); ?>

    <?= $this->Html->css("/admin_assets/assets/js/footable/css/footable.core.css?v=2-0-1"); ?>
    <?= $this->Html->css("/admin_assets/assets/js/footable/css/footable.standalone.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/js/footable/css/footable-demos.css"); ?>
    
    <?= $this->Html->css("/admin_assets/assets/js/dataTable/lib/jquery.dataTables/css/DT_bootstrap.css"); ?>
    <?= $this->Html->css("/admin_assets/assets/js/dataTable/css/datatables.responsive.css"); ?>

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
                            <i class="icon-media-record"></i> 
                            <span>Portfolios
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
                <li><a href="#" title="Sample page 1">Cources</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">

                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->
            <div class="content-wrap">
                <div class="row">


                    <div class="col-sm-12">
                        <!-- BLANK PAGE-->
                        <div class="nest" id="Blank_PageClose">
                            <div class="title-alt">
                                <h6>Note Content</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#Blank_PageClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="Blank_Page_Content">

                                Content Goes Here
                            </div>
                        </div>
                    </div>
                    <!-- END OF BLANK PAGE -->


                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="FilteringClose">
                            <div class="title-alt">
                                <h6>
                                    PORTFOLIOS DATABASES</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#FilteringClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Filtering">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="Filtering">

                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-sm-4">
                                        <input class="form-control" id="searchPortfolios" placeholder="Search..." type="text" />
                                    </div>
                                    <div class="col-sm-1">
                                        <select class="filter-status form-control" id="statusFilter">
                                            <option value="">All</option>
                                            <option value="Active">Active</option>
                                            <option value="Disabled">Disabled</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                        <select class="filter-status form-control" id="pageLength">
                                            <option value="1">Show 1</option>
                                            <option value="10">Show 10</option>
                                            <option value="20">Show 20</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">

                                        <a href="#clear" style="margin-left:10px;" class="pull-right btn btn-info clear-filter" title="clear filter">clear</a>
                                        <a href="#api" class="pull-right btn btn-info filter-api" title="Filter using the Filter API">filter API</a>



                                    </div>

                                </div>

                                <table id="tabledata" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($portfolios as $key): ?>
                                            <tr>
                                                <td><?= $key->id ?></td>
                                                <td><?= $key->name?></td>
                                                <td><?= $key->description?></td>
                                                <td>
                                                    <?php if($key->status == 0): ?>
                                                        <span class="status-metro status-active" title="Active">Active</span>
                                                    <?php endif; ?>
                                                    <?php if($key->status == 1): ?>
                                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>

                </div>
            </div>


            <div class="content-wrap">
                



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


        <!-- MAIN EFFECT -->

        <?= $this->Html->script("/admin_assets/assets/js/preloader.js"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/bootstrap.js"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/app.js"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/load.js"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/main.js"); ?>

        <!-- GAGE -->
        <?= $this->Html->script("/admin_assets/assets/js/toggle_close.js"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/footable/js/footable.js?v=2-0-1"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/footable/js/footable.sort.js?v=2-0-1"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/footable/js/footable.filter.js?v=2-0-1"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/footable/js/footable.paginate.js?v=2-0-1"); ?>
        <?= $this->Html->script("/admin_assets/assets/js/footable/js/footable.paginate.js?v=2-0-1"); ?>

        <!-- DATATABLE -->
        <?= $this->Html->script("jquery.dataTables.min.js"); ?>

        <?= $this->Html->css("jquery.dataTables.min.css"); ?>
        
    <script type="text/javascript">

        $(document).ready(function() {
            oTable = $('#tabledata').DataTable({
                'sDom': '<bottom><"pagingCustom"ip>',
                drawCallback: function(settings) {
                    var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                    pagination.toggle(this.api().page.info().pages > 1);
                }
            });

            $('#searchPortfolios').keyup(function(){
                oTable.search($(this).val()).draw();
            });


            $('#statusFilter').change(function() {
                oTable.column(3).search($(this).val()).draw();
            });

            $('#pageLength').change(function() {
                oTable.page.len($(this).val()).draw();
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#footable-res2').footable().bind('footable_filtering', function(e) {
                var selected = $('.filter-status').find(':selected').text();
                if (selected && selected.length > 0) {
                    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                    e.clear = !e.filter;
                }
            });

            $('.clear-filter').click(function(e) {
                e.preventDefault();
                $('.filter-status').val('');
                $('table.demo').trigger('footable_clear_filter');
            });

            $('.filter-status').change(function(e) {
                e.preventDefault();
                $('table.demo').trigger('footable_filter', {
                    filter: $('#filter').val()
                });
            });

            $('.filter-api').click(function(e) {
                e.preventDefault();

                //get the footable filter object
                var footableFilter = $('table').data('footable-filter');

                alert('about to filter table by "tech"');
                //filter by 'tech'
                footableFilter.filter('tech');

                //clear the filter
                if (confirm('clear filter now?')) {
                    footableFilter.clearFilter();
                }
            });
        });
    </script>
</body>

</html>
