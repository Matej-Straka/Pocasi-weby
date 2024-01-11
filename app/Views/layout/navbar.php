<div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

      <div class="navbar-collapse collapse-horizontal w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <?php
                             $anchorProperties = [
                              'title' => 'Země',
                              'class' => 'nav-link'
                             ];

                            echo anchor('/', 'Země', $anchorProperties);
                      ?>
            </li>
            <li class="nav-item">
            <?php
                             $anchorProperties = [
                              'title' => 'Polští Hráči',
                              'class' => 'nav-link'
                             ];

                            echo anchor('hraci', 'Polští Hráči', $anchorProperties);
                      ?>
            </li>
            <li class="nav-item">
            <?php
                             $anchorProperties = [
                              'title' => 'Karty Hračů',
                              'class' => 'nav-link'
                             ];

                            echo anchor('kartyHraci', 'Karty Hráčů', $anchorProperties);
                      ?>
            </li>
                    
        </ul>
      </div>
      <div class="navbar-collapse collapse-horizontal order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <?php
                             $anchorProperties = [
                              'title' => 'Login',
                              'class' => 'nav-link'
                             ];

                            echo anchor('login', 'Login', $anchorProperties);
                      ?>
            </li>
        </ul>
      </div>
    </nav>
  </div>