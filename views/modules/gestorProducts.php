<?php
$products   = ProductsModel::showProducts();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    AdminLTE 2 | Dashboard
                </title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, Products-scalable=no" name="viewport">
                    <!-- Bootstrap 3.3.7 -->
                    <link href="views/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                        <!-- Font Awesome -->
                        <link href="views/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                            <!-- Ionicons -->
                            <link href="views/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet">
                                <!-- jvectormap -->
                                <link href="views/bower_components/jvectormap/jquery-jvectormap.css" rel="stylesheet">
                                    <!-- Theme style -->
                                    <link href="views/dist/css/AdminLTE.min.css" rel="stylesheet">
                                        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
                                        <link href="views/dist/css/skins/_all-skins.min.css" rel="stylesheet">
                                            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                            <!--[if lt IE 9]>
  <script src="views/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="views/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
                                            <!-- Google Font -->
                                            <link href="views/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a class="logo" href="views/index2.html" style="background-color: #605ca8;">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <b>
                            A
                        </b>
                        LT
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <b>
                            Admin
                        </b>
                        LTE
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a class="sidebar-toggle" data-toggle="push-menu" href="views/#" role="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="views/#">
                                    <i class="fa fa-envelope-o">
                                    </i>
                                    <span class="label label-success">
                                        4
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 4 messages
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="views/#">
                                                    <div class="pull-left">
                                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products2-160x160.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            5 mins
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="views/#">
                                                    <div class="pull-left">
                                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products3-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            2 hours
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <div class="pull-left">
                                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products4-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            Today
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <div class="pull-left">
                                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products3-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            Yesterday
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <div class="pull-left">
                                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products4-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            2 days
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="views/#">
                                            See All Messages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="views/#">
                                    <i class="fa fa-bell-o">
                                    </i>
                                    <span class="label label-warning">
                                        10
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 10 notifications
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="views/#">
                                                    <i class="fa fa-Productss text-aqua">
                                                    </i>
                                                    5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <i class="fa fa-warning text-yellow">
                                                    </i>
                                                    Very long description here that may not fit into the
                      page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <i class="fa fa-Productss text-red">
                                                    </i>
                                                    5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <i class="fa fa-shopping-cart text-green">
                                                    </i>
                                                    25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="views/#">
                                                    <i class="fa fa-Products text-red">
                                                    </i>
                                                    You changed your Productsname
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="views/#">
                                            View all
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="views/#">
                                    <i class="fa fa-flag-o">
                                    </i>
                                    <span class="label label-danger">
                                        9
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 9 tasks
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="views/#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">
                                                            20%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-aqua" role="progressbar" style="width: 20%">
                                                            <span class="sr-only">
                                                                20% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="views/#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">
                                                            40%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-green" role="progressbar" style="width: 40%">
                                                            <span class="sr-only">
                                                                40% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="views/#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">
                                                            60%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-red" role="progressbar" style="width: 60%">
                                                            <span class="sr-only">
                                                                60% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="views/#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">
                                                            80%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-yellow" role="progressbar" style="width: 80%">
                                                            <span class="sr-only">
                                                                80% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="views/#">
                                            View all tasks
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Products Account: style can be found in dropdown.less -->
                            <li class="dropdown Products Products-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="views/#">
                                    <img alt="Products Image" class="Products-image" src="views/dist/img/Products2-160x160.jpg">
                                        <span class="hidden-xs">
                                            Alexander Pierce
                                        </span>
                                    </img>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Products image -->
                                    <li class="Products-header">
                                        <img alt="Products Image" class="img-circle" src="views/dist/img/Products2-160x160.jpg">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>
                                                    Member since Nov. 2012
                                                </small>
                                            </p>
                                        </img>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="Products-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="views/#">
                                                    Followers
                                                </a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="views/#">
                                                    Sales
                                                </a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="views/#">
                                                    Friends
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="Products-footer">
                                        <div class="pull-left">
                                            <a class="btn btn-default btn-flat" href="views/#">
                                                Profile
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-default btn-flat" href="views/#">
                                                Sign out
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a data-toggle="control-sidebar" href="views/#">
                                    <i class="fa fa-gears">
                                    </i>
                                </a>
                            </li>
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
                        <li class="header">
                            MAIN NAVIGATION
                        </li>
                        <li>
                            <a href="{{Request::root()}}/">
                                <i class="fa fa-home">
                                </i>
                                <span>
                                    Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="gestorProducts">
                                <i class="fa fa-Products">
                                </i>
                                <span>
                                    Products
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="gestorCategories">
                                <i class="fa fa-group">
                                </i>
                                <span>
                                    Categories
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-sign-out">
                                </i>
                                <span>
                                    Logout
                                </span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
        </div>
    </body>
</html>
<!-- Content Wrapper. Contains page content -->
<section class="content-header">
    <h1>
        Products
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li class="active">
            Products
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <a class="btn btn-primary " href="createproducts" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create Products
            </a>
            <table class="table table-bordered table-striped" id="example2">
                <thead>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    foreach ($products as $product) {
                    
                    echo '<tr>
                        <td>
                            '.$product['title'].'
                        </td>
                        
                        <td>
                            '.$product['description'].'
                        </td>
                        <td>
                            '.$product['category'].'
                        </td>
                        <td>
                            '.$product['price'].'
                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="editproducts/'.$product['id'].'" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="delete/'.$product['id'].'" id="borrar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>';
                        }
                        ?>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            options
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.row -->
<!-- /.content -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>
            Version
        </b>
        2.4.0
    </div>
    <strong>
        Copyright © 2014-2016
        <a href="views/https://adminlte.io">
            Almsaeed Studio
        </a>
        .
    </strong>
    All rights
    reserved.
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li>
            <a data-toggle="tab" href="views/#control-sidebar-home-tab">
                <i class="fa fa-home">
                </i>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="views/#control-sidebar-settings-tab">
                <i class="fa fa-gears">
                </i>
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">
                Recent Activity
            </h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="views/javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red">
                        </i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">
                                Langdon's Birthday
                            </h4>
                            <p>
                                Will be 23 on April 24th
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <i class="menu-icon fa fa-Products bg-yellow">
                        </i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">
                                Frodo Updated His Profile
                            </h4>
                            <p>
                                New phone +1(800)555-1234
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue">
                        </i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">
                                Nora Joined Mailing List
                            </h4>
                            <p>
                                nora@example.com
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green">
                        </i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">
                                Cron Job 254 Executed
                            </h4>
                            <p>
                                Execution time 5 seconds
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->
            <h3 class="control-sidebar-heading">
                Tasks Progress
            </h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="views/javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">
                                70%
                            </span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">
                                95%
                            </span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">
                                50%
                            </span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="views/javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">
                                68%
                            </span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->
        </div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">
                    General Settings
                </h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input checked="" class="pull-right" type="checkbox">
                        </input>
                    </label>
                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input checked="" class="pull-right" type="checkbox">
                        </input>
                    </label>
                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input checked="" class="pull-right" type="checkbox">
                        </input>
                    </label>
                    <p>
                        Allow the Products to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->
                <h3 class="control-sidebar-heading">
                    Chat Settings
                </h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input checked="" class="pull-right" type="checkbox">
                        </input>
                    </label>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input class="pull-right" type="checkbox">
                        </input>
                    </label>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a class="text-red pull-right" href="views/javascript:void(0)">
                            <i class="fa fa-trash-o">
                            </i>
                        </a>
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
<div class="control-sidebar-bg">
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js">
</script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js">
</script>
<!-- FastClick -->
<script src="views/bower_components/fastclick/lib/fastclick.js">
</script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js">
</script>
<!-- Sparkline -->
<script src="views/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">
</script>
<!-- jvectormap  -->
<script src="views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js">
</script>
<script src="views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js">
</script>
<!-- SlimScroll -->
<script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
</script>
<!-- ChartJS -->
<script src="views/bower_components/chart.js/Chart.js">
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="views/dist/js/pages/dashboard2.js">
</script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js">
</script>