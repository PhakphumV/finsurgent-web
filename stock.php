<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="stock.php" class="nav-link active" aria-current="page">STOCK</a>
        </li>
        <li class="nav-item"><a class="nav-link text-muted">TAX</a></li>
        <li class="nav-item"><a class="nav-link text-muted">SAVING</a></li>
        <li class="nav-item"><a class="nav-link text-muted">FUND</a></li>
      </ul>
    </header>
  </div>
  <?php render_footer("STOCK"); ?>
</body>

</html>