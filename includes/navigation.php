<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img style="width: 50px" src="assets/imgs/<?php echo LOGO_URL ?>" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php 
        foreach (NAV_DATA as $element) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $element['link'] ?>">
              <?php echo $element['title'] ?>

              <?php 
                if(array_key_exists('children', $element)) { ?>
                    <div class="my-dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <?php foreach ($element['children'] as $child) { ?>
                        <a class="my-dropdown-item" href="<?php echo $child['link'] ?>"><?php echo $child['title'] ?></a>
                      <?php } ?>
                    </div>
                <?php } ?>
            </a>
          </li>
       <?php } ?>
    </ul>
  </div>
</nav>