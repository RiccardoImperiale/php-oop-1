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
                     <h6><span class="text-body-tertiary fs-sm">Language: </span><?= $movie->language ?></h6>
                     <h6>
                         <span class="text-body-tertiary fs-sm">Genre: </span>
                         <?php foreach ($movie->genre as $genre) : ?>
                             <span class="genre"><?= $genre->name ?></span>
                         <?php endforeach; ?>
                     </h6>
                     <h6><span class="text-body-tertiary fs-sm">Profits: </span><?= $movie->getProfit() ?></h6>
                     <h6><span class="text-body-tertiary fs-sm">Duration: </span><?= $movie->getDuration() ?></h6>
                     <hr>
                     <p class="card-text text-secondary fs-sm"><?= $movie->genre[0]->description ?></p>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
 </div>