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
                        Edit Contact
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/Home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit Contact</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <div id="editContactSuccess" style="display:none;"> </div>
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Contact Details Below</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php $attributes = array('id' => 'editContactForm'); ?>
                                <?php echo form_open_multipart('main/editContact',$attributes);?>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Customer</label>
                                            <select class="form-control" name="companyID" id="companyID">
                                                <option value="<?php echo $conData->CompanyID ?>"><?php echo $conData->CompanyID ?> / <?php echo $conData->Name ?> (Selected)</option>
                                                <?php foreach ($cust->result() as $row) { ?>
                                                    <option value="<?php echo $row->CompanyID ?>"><?php echo $row->CompanyID ?> / <?php echo $row->Name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cName">Contact Name</label>
                                            <input type="text" class="form-control" id="cName" placeholder="Contact Name" name="cName" value="<?php echo $conData->ContactName ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-Mail</label>
                                            <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" value="<?php echo $conData->EMail ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactNo">Contact No</label>
                                            <input type="text" class="form-control" id="contactNo" placeholder="Contact No" name="contactNo" value="<?php echo $conData->ContactNumber ?>">
                                        </div>
                                    </div><!-- /.box-body -->
                                      <div class="col-md-8">
                                        <input type="text" id="contactID" name="contactID" class="form-control" value="<?php echo $conData->ContactID; ?>" style="display:none;">
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                <?php echo form_close() ?>
                            </div><!-- /.box -->

                        </div><!--/.col (left) -->

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    </body>
</html>