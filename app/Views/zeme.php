<?php

$this->extend("layout/layout");

$this->section("content");

echo "<h1>Přehled meteorologických stanic ve spolkové zemi ".$zeme."</h1>";

$table = new \CodeIgniter\View\Table();

foreach($stanice as $station){
    ?>
    <div class="col-xl-3 col-md-6 col-lg-4">
    <div class="card mb-4" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= anchor("hrac/".$station->place, $station->place) ?></h5>
      <p class="card-text"></p>
    </div>
    </div>
    </div>
    <?php
}
$this->endSection();
