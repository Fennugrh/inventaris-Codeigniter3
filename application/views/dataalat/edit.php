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

        <div class="container-fluid">
            <h3 class="card-title">Edit Keterangan Alat</h3><br>
            <hr>
            <br>

            <form method="POST" action="<?php echo base_url('Dataalat/proses_edit/' . $inventaris['id']); ?>">

                <input type="hidden" name="kd_barang" value="<?php echo $inventaris['kd_barang']; ?>">
                <div class="row mb-3">
                    <label for="kd_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="kd_barang" value="<?php echo $inventaris['kd_barang']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nm_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nm_barang" value="<?php echo $inventaris['nm_barang']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="jenis" value="<?php echo $inventaris['jenis']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
        </div>
    </section>
    <!-- /.content -->
</div>