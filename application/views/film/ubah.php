<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Film
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $film['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="judul_film" class="form-control" id="judul_film" value="<?= $film['judul_film']; ?>">
                            <small class="form-text text-danger"><?= form_error('judul_film'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Genre</label>
                            <input type="text" name="genre" class="form-control" id="genre" value="<?= $film['genre']; ?>">
                            <small class="form-text text-danger"><?= form_error('genre'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" value="<?= $film['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>