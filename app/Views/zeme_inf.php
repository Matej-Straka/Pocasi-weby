<?php

$this->extend("layout/layout");

$this->section("content");
echo '<h1>'.anchor('zeme/'.$zeme->id, 'Informace o zemi '.$zeme->name).'</h1><br>';
?>
<h2>Vlajka:</h2>
<img src="<?php echo base_url($cesta.'/vlajky/'.$zeme->flag) ?>" class="img-fluid" style="max-width: 30%;" alt="Responsive image">
<h2>Mapa:</h2>
<img src="<?php echo base_url($cesta.'/mapy/'.$zeme->map) ?>" class="img-fluid" style="max-width: 30%;"  alt="Responsive image">
<?php
$this->endSection();
