<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Film
                </div>
                <div class="card-body">
                 
                    <h6 class="card-subtitle mb-2 text-muted"><?= $film['judul_film']; ?></h6>
                    <p class="card-text"><?= $film['genre']; ?></p>
                    <p class="card-text"><?= $film['tahun']; ?></p>
                    <a href="<?= base_url(); ?>film" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>