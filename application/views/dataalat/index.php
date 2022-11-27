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

        <!-- Default box -->
        <a href="<?= base_url('dataalat/tambah'); ?>" class="btn btn-info btn-sm mb-3">Tambah Data</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dataalat as $dt) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $dt['kd_barang']; ?></td>
                        <td><?= $dt['nm_barang']; ?></td>
                        <td><?= $dt['jenis']; ?></td>
                        <td>
                            <a href="<?= base_url('dataalat/edit/' . $dt['id']); ?>" class="badge badge-success">Edit</a>
                            <a href="<?= base_url('Dataalat/hapus_t/' . $dt['id']); ?>" class="badge badge-danger" onClick="return confirm('Hapus Item Data Alat?')">Hapus</a>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
    <!-- /.content -->
</div>