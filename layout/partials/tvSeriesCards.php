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
                     <h6><span class="fs-sm text-body-tertiary">Language: </span><?= $series->language ?></h6>
                     <h6>
                         <span class="text-body-tertiary fs-sm">Genre: </span>
                         <?php foreach ($series->genre as $genre) : ?>
                             <span class="genre"><?= $genre->name ?></span>
                         <?php endforeach; ?>
                     </h6>
                     <h6><span class="fs-sm text-body-tertiary">Seasons: </span><?= $series->seasons ?></h6>
                     <hr>
                     <p class="fs-sm card-text text-secondary"><?= $series->genre[0]->description ?></p>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>
 </div>