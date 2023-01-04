<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <?php render_header("STOCK"); ?>

  <div class="container text-center">
    <div id="stock-gridview" class="row row-cols-6 g-0">
      <?php
      // Connecting to DB

      $db_host = getenv('FSG_DB_HOST');
      $db_username = getenv('FSG_DB_USER');
      $db_password = getenv('FSG_DB_PASS');
      $db_name = getenv('FSG_DB_NAME');

      $db_conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

      if (!$db_conn) {
        echo "Cannon connect db";
      }
      $query = "SELECT * FROM u549428984_python.mkd_data_current";
      $result = mysqli_query($db_conn, $query);

      $last_update = "";

      if (mysqli_num_rows($result) > 0) {
      ?>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          // echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
          $bg_class = "";
          if ($row["change_percentage"] > 0) {
            $bg_class = "text-bg-success";
          } elseif ($row["change_percentage"] == 0) {
            $bg_class = "text-bg-secondary";
          } else {
            $bg_class = "text-bg-danger";
          }
        ?>
          <div class="col">
            <div class="card text-center <?php echo $bg_class; ?>">
              <div class="card-body">
                <div class="card-title">
                  <?php echo $row['symbol']; ?>
                </div>
                <div class="card-subtitle">

                </div>
                <p class="card-text">
                  CNG : <?php echo $row['change'] . "(" . $row["change_percentage"] . "%)"; ?>
                  
                </p>
              </div>
            </div>
          </div>
      <?php
        $last_update = $row['timestamp'];
        }
      } else {
        echo "No data found in the database.";
      }

      mysqli_close($db_conn);
      ?>
    </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col">
          Last update : <?php echo date("Y/m/d H:i:s",$last_update) ?>
        </div>
      </div>
  </div>
  <?php render_footer("STOCK"); ?>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script>
    var iso = new Isotope('#stock-gridview', {
      // options
      itemSelector: '.col',
      layoutMode: 'fitRows'
    });
  </script>
</body>

</html>