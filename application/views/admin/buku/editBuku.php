<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Buku</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('buku') ?>">Data Buku</a></li>
                    <li class="breadcrumb-item active">Edit Buku</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('buku/prosesEdit/'.$buku['id_buku']) ?>" method="post">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Buku</h3>
                <div class="card-tools">

                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nomer_induk">Jud</label>
                    <input type="text" class="form-control" id="nomer_induk" name="nomer_induk" placeholder="Nomor Induk" value="<?php echo $anggota['nomer_induk']?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="">Pilih Status Member</option>
                        <option value="0" <?php if($anggota['status'] == '0') echo 'selected';?>>Mahasiswa</option>
                        <option value="1" <?php if($anggota['status'] == '1') echo 'selected';?>>Dosen</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </form>
</section>
<!-- /.content -->