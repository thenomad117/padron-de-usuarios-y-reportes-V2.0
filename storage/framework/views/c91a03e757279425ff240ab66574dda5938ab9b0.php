<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SOSAPATEX| www.sosapatex.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/AdminLTE.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/_all-skins.min.css')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SSPT</b>X</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SOSAPATEX</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Fernando Barragan Santana</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      www.ITSSMT.com - Desarrollando Software
                      <small>Liberando Residencias</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Padron de Usarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('cliente/orden')); ?>"><i class="fa fa-circle-o"></i> Ordenes</a></li>
                <li><a href="<?php echo e(url('/', 'contratoController@index')); ?>"><i class="fa fa-circle-o"></i> Contratos</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Accesos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('cliente/pdf')); ?>"><i class="fa fa-circle-o"></i>Generar PDF</a></li>
                <li><a href="<?php echo e(url('cliente/almacen')); ?>"><i class="fa fa-circle-o"></i>Almacen</a></li>
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema comercial para el organismo SOSAPATEX</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                             <?php echo $__env->yieldContent('contenido'); ?>
                              <!--Fin Contenido-->
                           </div>
                        </div>

                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.ITSSMT.com">ITSSMT </a>.</strong> All rights reserved.
      </footer>


    <!-- jQuery 2.1.4 -->
    <script src="<?php echo e(asset('js/jQuery-2.1.4.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>

  </body>
</html>
<?php /**PATH C:\Users\TheNomad\Desktop\V2\reborn\resources\views/layouts/admin.blade.php ENDPATH**/ ?>