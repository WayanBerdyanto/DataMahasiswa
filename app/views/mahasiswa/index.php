<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash();  ?>
    </div>
</div>
<div class="row mt-3 ml-5">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary mb-1 tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
    </div>
</div>

<div class="row mt-3 ml-5">
    <div class="col-lg-6">
        <form action="<?= BASEURL;  ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-1">
                <input type="text" class="form-control" placeholder="Cari Nama" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mt-3 ml-5">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item mr-3">
                    <?= $mhs["nama"]  ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']  ?>" class="badge badge-danger float-right  ml-3 p-2" onclick="return confirm('Yakin?')">hapus</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']  ?>" class="badge badge-success float-right p-2  ml-3 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];  ?>">Edit</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']  ?>" class="badge badge-primary float-right p-2">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="number" class="form-control" id="nim" placeholder="Masukan Nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teologi">Teologi</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Desain Produk">Desain Produk</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnTambahMhs">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>