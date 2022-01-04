<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Film
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Judul film</label>
                            <input type="text" name="judul_film" class="form-control" id="judul_film">
                            <small class="form-text text-danger"><?= form_error('judul_film'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Genre</label>
                            <input type="text" name="genre" class="form-control" id="genre">
                            <small class="form-text text-danger"><?= form_error('genre'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun">
                            <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>