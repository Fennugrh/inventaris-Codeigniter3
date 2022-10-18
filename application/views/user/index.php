<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/template'); ?>/dist/img/imgg.PNG" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><b><?= $user['name']; ?></b></h4><br>
                        <p class="card-text"><?= $user['email']; ?></p><br><br>
                        <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->