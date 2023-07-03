<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

  <h1>Data Film</h1>
        <div class="row">
            <?php foreach ($semua_film as $film): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/img/<?= $film["cover"] ?>"class="card-img-top">
                        <div class="card-body"><h5 class="card-title"><?= $film["nama_film"] ?></h5>
                            <p class="card-text"><?= $film["nama_genre"] ?> ||<?= $film["duration"] ?></p>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="#" class="btn btn-success">Update</a>
                            <a href="#" class="btn btn-warning">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

<script src="/img/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>