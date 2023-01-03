<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <?php render_header("STOCK"); ?>

  <div class="container text-center">
    <div class="row row-cols-5">
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

      if (mysqli_num_rows($result) > 0) {
      ?>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          // echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        ?>
          <div class="col">
            <div class="card text-center">
              <div class="card-body">
                <div class="card-title">
                  <?php echo $row['symbol']; ?>
                </div>
                <div class="card-subtitle">

                </div>
                <p class="card-text">

                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Change : <?php echo $row['change']."(".$row["change_percentage"].")"; ?>
                </li>
                <li class="list-group-item">
                  Volume (Shares) : <?php echo $row['volume (shares)']; ?>
                </li>
                <li class="list-group-item">
                  Value (kTHB) : <?php echo $row['value (kTHB)']; ?>
                </li>
              </ul>
            </div>
          </div>
      <?php
        }
      } else {
        echo "No data found in the database.";
      }

      mysqli_close($db_conn);
      ?>
    </div>
  </div>
  <?php render_footer("STOCK"); ?>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>

</html>