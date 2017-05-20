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
            <?= $this->Element('Admincp/Title');?>  
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <?= $this->Element('Admincp/Breadcrumb');?>   
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
                                        <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-primary pull-right" style="margin-left:10px;" >
                                            <span class="entypo-plus-squared"></span>&nbsp;&nbsp;Add
                                        </button>

                                        <button type="button" class="btn btn-warning pull-right" style="margin-left:10px;">
                                            <span class="entypo-print"></span>&nbsp;&nbsp;Print
                                        </button>

                                        
                                    </div>

                                </div>

                                <table id="tabledata" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Last updated</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($portfolios as $key): ?>
                                            <tr ondblclick="selectedID('<?= $key->id ?>');" id="tr<?= $key->id ?>" >
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
                                                <td>
                                                    <?= $key->created ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger pull-right" onclick="deleteTuple('<?= $key->id ?>','<?= $key->name ?>')">
                                                        <span class="entypo-trash"></span>&nbsp;&nbsp;Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <?= $this->Element('Admincp/Footer');?>   
                <!-- / END OF FOOTER -->
            </div>
        </div>
        <!--  END OF PAPER WRAP -->

        <!-- RIGHT SLIDER CONTENT -->
        <?= $this->Element('Admincp/MenuRightSide');?>   
        <!-- END OF RIGHT SLIDER CONTENT-->

        <!-- MODAL -->

        <div class="modal fade" id="addModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ADD NEW ENTRY</h4>
                </div>
                <div class="modal-body">
                    <form method="get" class="form-horizontal bucket-form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Help text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Help text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Help text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Help text</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Confirm</button>
                </div>
              </div>            
            </div>
        </div>

        <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">EDIT</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Confirm</button>
                </div>
              </div>            
            </div>
        </div>
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

            $('#btnDelete').click(function(){
                
            });
        });
        
        function selectedID(id){
            $('#editModal').modal('show');
        }

        function deleteTuple(id,name){
            if(confirm("Are you sure you want to delete "+ name +"?")){
                var deleteHTML = '<button type="button" class="btn btn-danger pull-right" onclick="deleteTuple(1,2)"><span class="entypo-trash"></span>&nbsp;&nbsp;Delete</button>'
                oTable.row.add(['4','5','6','7','8',deleteHTML]).draw(false);
            }
            else{
                return false;
            }
        }

    </script>
</body>

</html>
