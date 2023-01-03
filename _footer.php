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
            <a href="<?php echo $menu["link"] ?>" class="nav-link px-2 <?php echo implode($classes, " "); ?>">
              <?php echo $menu["label"]; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="text-center text-muted">&copy; 2023 Finsurgent</p>
    </footer>
  </div>
<?php
  return;
}
?>