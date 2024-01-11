<html lang="cz">
 <head> 
        <title>titulek</title>
        <?= $this->include("layout/assets");?> 
 </head> 
 <body>

 <?= $this->include("layout/navbar");?>
 <!--Dynamický obsah -->
 <div class="container justify-content-center">
 <br>
 <?= $this->renderSection("content"); ?>
 </div>    
 <body>
</html