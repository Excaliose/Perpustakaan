<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pengarang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Pengarang</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pengarang</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="#" class='btn btn-success'><i class="fas fa-plus"></i> Tambah Pengarang</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>id_Pengarang</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>no telpon</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengarang as $pg) : ?>
                        <tr>
                            <td><?php echo $pg['id'] ?></td>
                            <td><?php echo $pg['nama'] ?></td>
                            <td><?php echo $pg['alamat'] ?></td>
                            <td><?php echo $pg['no_telp'] ?></td>
                            <td>
                                <div class="input-group">
                                    <a href="#" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs'><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>id_Pengarang</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>no telpon</th>
                        <th>opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->