<main>
    <div class="container my-5">
        <!-- productions -->
        <h4 class="text-white mt-5 mb-3 ps-1">Productions</h4>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <?php foreach ($productions as $production) : ?>
                <div class="col">
                    <div class="card bg-dark h-100" data-bs-theme="dark">
                        <div class="card-header  d-flex">
                            <span class="text-warning"><?= $production->title ?></span>
                            <span class="rating ms-auto"><?= $production->rating ?><span class="text-secondary">/10</span></span>
                        </div>
                        <div class="card-body">
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Language: </span><?= $production->language ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Genre: </span><?= $production->genre->name ?></h6>
                            <hr>
                            <p style="font-size: 0.85rem;" class="card-text text-secondary"><?= $production->genre->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- movies -->
        <h4 class="text-white mt-5 mb-3 ps-1">Movies</h4>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card bg-dark h-100" data-bs-theme="dark">
                        <div class="card-header  d-flex">
                            <span class="text-danger"><?= $movie->title ?></span>
                            <span class="rating ms-auto"><?= $movie->rating ?><span class="text-secondary">/10</span></span>
                        </div>
                        <div class="card-body">
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Language: </span><?= $movie->language ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Genre: </span><?= $movie->genre->name ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Profits: </span><?= $movie->getProfit() ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Duration: </span><?= $movie->getDuration() ?></h6>
                            <hr>
                            <p style="font-size: 0.85rem;" class="card-text text-secondary"><?= $movie->genre->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- tv serie -->
        <h4 class="text-white mt-5 mb-3 ps-1">TV Series</h4>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <?php foreach ($tvSeries as $series) : ?>
                <div class="col">
                    <div class="card bg-dark h-100" data-bs-theme="dark">
                        <div class="card-header  d-flex">
                            <span class="text-success"><?= $series->title ?></span>
                            <span class="rating ms-auto"><?= $series->rating ?><span class="text-secondary">/10</span></span>
                        </div>
                        <div class="card-body">
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Language: </span><?= $series->language ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Genre: </span><?= $series->genre->name ?></h6>
                            <h6><span style="font-size: 0.85rem;" class="text-body-tertiary">Seasons: </span><?= $series->seasons ?></h6>
                            <hr>
                            <p style="font-size: 0.85rem;" class="card-text text-secondary"><?= $series->genre->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>