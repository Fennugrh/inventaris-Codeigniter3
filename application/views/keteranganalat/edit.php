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

            <form method="POST" action="<?php echo base_url('Keteranganalat/proses_edit/' . $keteranganalat['id_lapor']); ?>">

                <input type="hidden" name="kd_barang" value="<?php echo $keteranganalat['kd_barang']; ?>">
                <div class="row mb-3">
                    <label for="kd_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="kd_barang" value="<?php echo $keteranganalat['kd_barang']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $keteranganalat['nama']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="tanggal" value="<?php echo $keteranganalat['tanggal']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="status" value="<?php echo $keteranganalat['status']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="keterangan" value="<?php echo $keteranganalat['keterangan']; ?>">
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