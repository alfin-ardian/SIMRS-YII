<?php

use app\widgets\Alert;
use yii\helpers\Html;

app\assets\AppAsset::register($this);
app\themes\adminlte2\assets\AdminleAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>

    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>RS</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>E-SIMRS</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="//via.placeholder.com/160x160" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">DATA BERANDA</li>
                    <li class="active"><a href="/"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                    <li class="header">DATA REFERENSI</li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Data Transaksi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/transaksi/create"><i class="fa fa-hospital-o"></i> Pendaftaran Pasien</a></li>
                            <li><a href="/transaksi-tindakan/index"><i class="fa fa-medkit"></i> Tindakan Obat</a></li>
                            <li><a href="/transaksi/index"><i class="fa fa-money"></i> Tagihan Pasien</a></li>
                        </ul>
                    </li>
                    <li class="header">DATA MASTER</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="/obat/index"><i class="fa fa-plus-square"></i> <span>Obat</span></a></li>
                    <li><a href="/pasien/index"><i class="fa fa-wheelchair"></i> <span>Pasien</span></a></li>
                    <li><a href="/pegawai/index"><i class="fa fa-user-md"></i> <span>Pegawai</span></a></li>
                    <li><a href="/tindakan/index"><i class="fa fa-stethoscope"></i> <span>Tindakan</span></a></li>
                    <li><a href="/wilayah/index"><i class="fa fa-globe"></i> <span>Wilayah</span></a></li>

                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content container-fluid">
                <?= Alert::widget() ?>
                <?= $content ?>
                <!--------------------------
              | Your Page Content Here |
              -------------------------->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <?= date('Y') ?> <a href="#">INOVA MEDICA INC</a>.</strong> All rights reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>