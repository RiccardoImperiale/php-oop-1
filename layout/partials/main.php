<main>
    <div class="container">
        <?php foreach ($productions as $movie) : ?>
            <div class="card text-center my-3 bg-dark" data-bs-theme="dark">
                <div class="card-header text-warning">
                    <?= $movie->title ?>
                </div>
                <div class="card-body">
                    <h5 class="rating"><?= $movie->rating ?><span class="text-secondary">/10</span></h5>
                    <h6 class="lang"><?= $movie->language ?></h6>
                    <p class="card-text">With supporting text belo lead-in to additional content.</p>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</main>