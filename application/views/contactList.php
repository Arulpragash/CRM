<!-- header start -->
<?php include('common/header.php') ?>
<!-- header end -->
<!DOCTYPE html>
<html>
    <body class="skin-blue">
<!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>index.php/Home" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CRM
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
            
<!-- sidebar start -->
<?php include('common/sidebar.php') ?>
<!-- sidebar end -->


            </aside>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Contacts
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Contact List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- start: DYNAMIC TABLE PANEL -->
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <table id="dynamic-table" class="display table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Company ID</th>
                                                <th>Company Name</th>
                                                <th>Contact Name</th>
                                                <th>E-Mail</th>
                                                <th>Contact No.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($conList->result() as $row) { ?>
                                                <tr>
                                                    <td class="custid"><?php echo $row->CompanyID; ?></td>
                                                    <td><?php echo $row->Name; ?></td>
                                                    <td><?php echo $row->ContactName; ?></td>
                                                    <td><?php echo $row->EMail; ?></td>
                                                    <td><?php echo $row->ContactNumber; ?></td>
                                                    <td><div class="btn-group">
                                                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Action<span class="caret"></span></button>
                                                        <ul role="menu" class="dropdown-menu" style="min-width:100px">
                                                            <li><a href="EditContact/<?php echo $row->ContactID; ?>" id="editContact">Edit</a></li>
                                                        </ul>
                                                    </div></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                            <!-- end: DYNAMIC TABLE PANEL -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
         <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
       
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>


    </body>
</html>