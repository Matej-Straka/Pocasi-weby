<?php

$this->extend("layout/layout");

$this->section("content");

echo '<h1>Přehled Stanic</h1><br>';
echo '<div class="container"><div class="row">';

foreach($stanice as $station){
    ?>
      <div class="col-xl-3 col-md-6 col-lg-4">
      <div class="card mb-4" style="width: 18rem;">
      <img src="<?php echo base_url($cesta.'/vlajky/'.$station->flag) ?>" class="card-img-top" alt="Responsive image">
      <div class="card-body">
        <h5 class="card-title"><?= anchor("stanice/".$station->S_ID, $station->place) ?></h5>
        <p class="card-text">Zeměpisná šířka: <?php echo $station->geo_latitude ?> E</p>
        <p class="card-text">Zeměpisná délka: <?php echo $station->geo_longtitude ?> N</p>
        <p class="card-text">Nadmořská výška: <?php echo $station->height ?> m.n.m</p>
      </div>
      </div>
      </div>
    <?php
}
$this->endSection();