<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <?php render_header("STOCK"); ?>

  <?php
  // Connecting to DB

  $db_host = getenv('FSG_DB_HOST');
  echo "DB Host : ".$db_host;
  // $db_username = $_ENV['FSG_DB_USER'];
  // $db_password = $_ENV['FSG_DB_PASS'];
  // $db_name = $_ENV['FSG_DB_NAME'];

  // $db_conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

  // if (!$db_conn) {}
  // $query = "SELECT * FROM u549428984_python.mkd_data_current";
  // $result = mysqli_query($conn, $query);

  // mysqli_close($db_conn);
  ?>

  <?php render_footer("STOCK"); ?>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>

</html>