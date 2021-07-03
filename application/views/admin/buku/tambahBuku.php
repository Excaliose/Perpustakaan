<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Buku</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('buku') ?>">Data Buku</a></li>
                    <li class="breadcrumb-item active">Tambah Buku</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('buku/prosesTambah') ?>" method="post" enctype="multipart/form-data">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Buku</h3>
                <div class="card-tools">

                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nomer_induk">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <select name="penerbit" id="penerbit" class="form-control">
                        <option value="">Pilih penerbit</option>
                        <?php foreach ($penerbit as $pn) : ?>
                            <option value="<?php echo $pn['id'] ?>"><?php echo $pn['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <select name="pengarang" id="pengarang" class="form-control">
                        <option value="">Pilih pengarang</option>
                        <?php foreach ($pengarang as $pg) : ?>
                            <option value="<?php echo $pg['id'] ?>"><?php echo $pg['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">Pilih kategori</option>
                        <?php foreach ($kategori as $kt) : ?>
                            <option value="<?php echo $kt['id'] ?>"><?php echo $kt['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" min="0">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit" maxlength="4" pattern="[0-9]" min="0">
                </div>
                <div class="form-group">
                    <input type="file" name="cover" id="cover">
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