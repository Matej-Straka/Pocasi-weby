<?php

$this->extend("layout/layout");

$this->section("content");

echo "<h1>Přehled meteorologických stanic ve spolkové zemi ".$zeme."</h1><br>";
echo '<div class="container"><div class="row">';

$table = new \CodeIgniter\View\Table();

foreach($stanice as $station){
    ?>
      <div class="col-xl-3 col-md-6 col-lg-4">
      <div class="card mb-4" style="width: 18rem;">
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
