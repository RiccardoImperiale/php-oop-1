<main>
    <div class="container">
        <?php foreach ($productions as $movie) : ?>
            <div class="card text-center my-3 bg-dark w-75 m-auto" data-bs-theme="dark">
                <div class="card-header text-warning">
                    <?= $movie->title ?>
                </div>
                <div class="card-body">
                    <h5 class="rating"><?= $movie->rating ?><span class="text-secondary">/10</span></h5>
                    <h6><?= $movie->language ?> - <?= $movie->genre->name ?></h6>
                    <p class="card-text"><?= $movie->genre->description ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>