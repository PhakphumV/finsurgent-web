<?php
function render_footer($current_page = "Home")
{
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
  )

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