<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SRS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">NOVALICHES</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><b>Welcome</b></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RDU RECEIVING</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>VIEW/PROCESS<br>TRANSFER (IN and OUT)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-circle-o"></i>Receive Transfer</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dispatch Transfer</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <b>SRS</b>
       <small>SRS STOCK TRANSFER OUT -> CLICK ME RECEIVE STOCK TRANSFER -> YOU ARE HERE ( STOCK TRANSFER OUT )</small> 
      </h1>

     

    </section>
    <br><br>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="col-md-12">

            
            <div class="box box-danger">
                <div class="box-body">
                  


            <table class="table" style="font-size:12px;">
        <thead>
            <tr>
                <th>Transfer # : </th>
                <th align="center"><input type="text" class="form-control input-xs ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="txtTransferId" readonly=""></th>
                <th>Requested by :</th>
                <th><input type="text" class="form-control input-xs" readonly="" value="MAY GRACE CASTILLO"></th>
            </tr>
            <tr>
                <th>Delivery Date : </th>
                <th><input type="text" class="form-control input-xs" readonly="" value="04-17-2015"> </th>
                <th>Date Created</th>
                <th><input type="text" class="form-control input-xs" readonly="" value="04-16-2015"></th>
            </tr>
            <tr>
                <th>From Branch : </th>
                <th> <input type="text" class="form-control input-xs ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="txtlocationFrom" readonly=""></th>
                <th>To Branch :</th>
                <th><input type="text" class="form-control input-xs" readonly="" value="NOVALICHES">  </th>
            </tr>
            </thead>
        </table>
    <br>
    <table class="table table-bordered table-responsive no-padding" cellpadding="0" width="100%">
        <tbody><tr>
            <th style="text-align:center !important">Item</th>
            <th style="text-align:center !important" width="15%">Qty</th>
            <th style="text-align:center !important">Current Inventory</th>
            <th style="text-align:center !important">Uom</th>
            <th style="text-align:center !important">Action</th>
        </tr>
        <tr ng-show="show" class="ng-hide">
            <td colspan="5">
                <center>
                        <i class="fa fa-circle-o-notch fa-spin fa-lg"> </i> Please wait
                </center>
            </td>
        </tr>
    
        <!-- ngRepeat: row in temporaryDetails --><tr ng-repeat="row in temporaryDetails" ng-show="!show" class="ng-scope">
            <td class="ng-binding"> 6LCCKN SPRD FR GT WHITE</td>
            <td class="ng-binding"> 1</td>
            <td class="ng-binding"> </td>
            <td class="ng-binding"> PC6</td>
            <td> 
                <button class="btn btn-danger btn-xs" ng-click="deleteItems(row.id)"><i class="fa fa-trash"></i></button>
            </td>
        </tr><!-- end ngRepeat: row in temporaryDetails -->

        <tr ng-show="show_loading_search" class="ng-hide">
            <td colspan="5">
                <center>
                        <i class="fa fa-circle-o-notch fa-spin fa-lg"> </i> Please wait
                </center>
            </td>
        </tr>

        <tr>
            <td><input type="text" class="form-control input-xs ng-pristine ng-untouched ng-valid ng-empty" ng-keydown="seachItemBarcode($event)" ng-model="txtItemBarcode"></td>
            <td><input type="text" class="form-control input-xs ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="txtQty"></td>
            <td></td>
            <td></td>
            <td>
                <!-- <button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></button> -->
            </td>
        </tr>
        
    </tbody></table>
    <!-- last item scanned -->
    <br><br>
    <table class="table table-bordered table-responsive no-padding" cellpadding="0" width="100%">
        <tbody><tr>
            <td colspan="3">Last Item Scanned</td>
        </tr>
        <tr>
            <th width="40%" style="text-align: center;">Item</th>
            <th width="25%" style="text-align: center;">UOM</th>
            <th width="15%" style="text-align: center;">Remaining Qty</th>
        </tr>
        <!-- ngRepeat: scanned in lastItemScanned --><tr ng-repeat="scanned in lastItemScanned" class="ng-scope">
            <td align="center" class="ng-binding"> 6LCCKN SPRD FR GT WHITE</td>
            <td align="center" class="ng-binding"> PC6 </td>
            <td align="center" class="ng-binding"> 139 </td>
        </tr><!-- end ngRepeat: scanned in lastItemScanned -->
    </tbody></table>
    <br><br>
    <div class="col-sm-6">
        <form id="post_rr" action="" enctype="multipart/form-data" class="ng-pristine ng-invalid ng-invalid-required">
            <table class="table table-bordered table-responsive no-padding" cellpadding="0" width="100%">
                <tbody><tr>
                    <th width="20%" style="text-align: center;">Remarks </th>
                    <th width="15%" style="text-align: center;">
                        <textarea name="txtremarks" required="" id="txtremarks" ng-model="txtremarks" class="form-control input-sm ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" style="resize: none;"></textarea>
                    </th>
                </tr>
                <tr>
                    <th width="20%%" style="text-align: center;">Invoice File</th>
                    <th width="10%" style="text-align: center;">
                        <input type="file" required="" id="txtfile" name="txtfile[]" multiple="" ng-model="txtfile" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <button type="button" class="btn btn-primary btn-sm" ng-click="postReceiving()"> <i class="fa fa-save"></i> Submit</button>
                    </th>
                </tr>
            </tbody></table>
        </form>
    </div>

    <div class="col-sm-6">
        <table class="table table-bordered table-responsive no-padding" cellpadding="0" width="100%">
                <tbody><tr> 
                        <td width="40%" style="text-align: center;">SKU Scanned:</td>
                        <th width="10%" style="text-align: center;">
                            <p ng-bind="skuScanned" style="text-align: center; font-size: 16px;" class="ng-binding">1</p>
                        </th>
                        <td width="40%" style="text-align: center;">SKU Remaining:</td>
                        <th width="10%" style="text-align: center;">
                                <p ng-bind="skuRemaining" style="text-align: center; font-size: 16px;" class="ng-binding">8</p>
                        </th>
                </tr>
                <tr> 
                    <td width="40%" style="text-align: center;">Total QTY Scanned:</td>
                    <th width="10%" style="text-align: center;">
                        <p ng-bind="totalQtyScanned" style="text-align: center; font-size: 16px;" class="ng-binding">1</p>
                    </th>
                    <td width="40%" style="text-align: center;">Remaining Items:</td>
                    <th width="10%" style="text-align: center;">
                            <p ng-bind="totalRemainingItems" style="text-align: center; font-size: 16px;" class="ng-binding">454</p>
                    </th>
                </tr>
                <tr>
                    <td width="5%" style="text-align: center;">TOTAL PO QTY POSTED :</td>
                    <th width="10%" style="text-align: center;">
                            <p ng-bind="totalQtyPosted" style="text-align: center; font-size: 16px;" class="ng-binding">0</p>
                    </th>
                    <td width="5%" style="text-align: center;">TOTAL PO QTY :</td>
                    <th width="10%" style="text-align: center;">
                            <p ng-bind="totalQtyPoOrder" style="text-align: center; font-size: 16px;" class="ng-binding">455</p>
                    </th>
                </tr>
        </tbody></table>
    </div>

    <div class="col-sm-12 col-md-12 "></div>

        <input type="hidden" ng-model="hide_status" autocomplete="off" class="ng-pristine ng-untouched ng-valid ng-empty">
        <div class="col-sm-12">
            <div class="box box-danger ">
                <div class="box-header with-border">
                    <center><h3 class="box-title">   Items for transfer </h3></center>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-info" ng-click="hidePoItems()" ng-hide="show_button_items"><i class="fa fa-minus"></i> Hide Items for transfer </button>
                        <button type="button" class="btn btn-info ng-hide" ng-click="hidePoItems('not_hide')" ng-hide="!show_button_items"><i class="fa fa-plus"></i> Show Items for transfer </button>
                    </div>

                    <div class="box-body" ng-show="!hide_po_items">
        
                        <table class="table table-bordered" cellpadding="0">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Item</th>
                                    <th style="text-align: center;">QTY</th>
                                    <th style="text-align: center;">UOM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">12 KNR SGNG 20G FR KOPIKO</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">200</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">PC12</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">6KNR SGNG40G FR G.T WHITE</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">75</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">PC6</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">BUY 6 LC CHICKEN SPREAD 1</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">139</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">PC6</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">COBRA SMART 350ML</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">24</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">PC</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">KNORR CBS CHKN 10G+GARAPO</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">10</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">CS24</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">KNORR CHKN CUBE 120G+PSTA</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">1</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">CS36</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">KNORR PCUBES FR GARAPON</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">5</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  --><td align="center" ng-if="transfer.actual_qty_out != '0' " class="ng-binding ng-scope">CS24</td><!-- end ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems --><tr ng-repeat="transfer in listTransferItems" class="ng-scope">
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                    <!-- ngIf: transfer.actual_qty_out != '0'  -->
                                </tr><!-- end ngRepeat: transfer in listTransferItems -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        			</div>
			  	</div>
			</div>
        </div>
    </div>
</section>


    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; <?php echo "Today is " . date("Y") ."";?> San Roque Supermarket</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>/admin_lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>/admin_lte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url() ?>/admin_lte/dist/js/demo.js"></script>


</body>
</html>
