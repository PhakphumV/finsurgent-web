<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <?php render_header("STOCK"); ?>

  <div class="container text-center">
    <div id="stock-gridview" class="row row-cols-xl-10 row-cols-lg-6 row-cols-sm-2 row-cols-md-5 g-0">
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
                  <?php echo $row['offer']; ?>
                </div>
                <p class="card-text">
                  <span>
                    CNG : <?php echo $row['change'] . "(" . $row["change_percentage"] . "%)"; ?>
                  </span>
                  <span>
                    P/E : <?php echo $row['pe']; ?>
                  </span>
                  <span>
                    P/BV : <?php echo $row['pbv']; ?>
                  </span>
                  <span>
                    EPS : <?php echo $row['eps']; ?>
                  </span>
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
      <div class="col text-center">
        Last update : <?php echo date("Y/m/d H:i:s", $last_update); ?>
      </div>
    </div>
  </div>
  <?php render_footer("STOCK"); ?>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script>
    $('#stock-gridview').isotope({
      // options
      itemSelector: '.col',
      layoutMode: 'fitRows'
    });
  </script>
</body>

</html>