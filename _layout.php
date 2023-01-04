<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
  header('HTTP/1.0 403 Forbidden', TRUE, 403);
  die(header('location: /index.php'));
}


$menu_list = array(
  array(
    'label' => "Home",
    'link'  => 'index.php',
    'classes' => []
  ),
  array(
    'label' => "STOCK",
    'link'  => 'stock.php',
    'classes' => []
  ),
  array(
    'label' => "TAX",
    'link'  => '#',
    'classes' => ["text-muted"]
  ),
  array(
    'label' => "SAVING",
    'link'  => '#',
    'classes' => ["text-muted"]
  ),
  array(
    'label' => "FUND",
    'link'  => '#',
    'classes' => ["text-muted"]
  )
);

function render_head_tag()
{
?>

  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/finsurgent.css" />


    <meta name="theme-color" content="#fafafa" />
  </head>
<?php
}

function render_header($current_page = "Home")
{
  global $menu_list;
?>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <?php foreach ($menu_list as $menu) : ?>
          <li class="nav-item">
            <?php
            $classes = $menu['classes'];
            if ($menu['label'] == $current_page) {
              $classes[] = "active";
            }
            ?>
            <a href="<?php echo $menu["link"] ?>" class="nav-link <?php echo implode(" ", $classes); ?>" aria-current="page">
              <?php echo $menu["label"]; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </header>
  </div>
<?php
}

function render_footer($current_page = "Home")
{
  global $menu_list;

?>
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav nav-pills justify-content-center border-bottom pb-3 mb-3">
        <?php foreach ($menu_list as $menu) : ?>
          <?php
          $classes = $menu['classes'];
          if ($menu['label'] == $current_page) {
            $classes[] = "active";
          }
          ?>
          <li class="nav-item">
            <a href="<?php echo $menu["link"] ?>" class="nav-link px-2 <?php echo implode(" ", $classes); ?>">
              <?php echo $menu["label"]; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="text-center text-muted">&copy; 2023 Finsurgent</p>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0KMD9EML8W"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-0KMD9EML8W');
  </script>
<?php
  return;
}
?>