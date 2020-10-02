<!-- Coded by : Siddharth Kumar Yadav -->
<!doctype html>
<html lang="en">
  <head>
    <title>PHP Live Search</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <center><input type="text" name="search" id="search_text" placeholder="Enter the username (PHP Live Search)" style="width:500px; height:50px; padding:10px;"></center>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Name</td>
          <td>Address</td>
          <td>City</td>
          <td>Country</td>
        </tr>
      </thead>

      <?php
      try {
        $con = new mysqli("localhost", "root", "", "schooldb");
        $query = "SELECT * FROM classxd";
        $q = $con->query($query);

        if ($con->connect_error) {
          echo "Connection Failed" . $con->connect_error;
        }
        while ($result = $q->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $result['Name']; ?></td>
            <td><?php echo $result['Address']; ?></td>
            <td><?php echo $result['City']; ?></td>
            <td><?php echo $result['Country']; ?></td>
          </tr>
      <?php }
      } catch (Exception $e) {
        $msg = $e->getMessage();
        echo "<p> Error Message: $msg</p>";
      }
      ?>

    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('#search_text').on("keyup", function() {
      var value = $(this).val();
      $("table tr").each(function(result) {
        if (result !== 0) {
          var id = $(this).find("td:first").text();
          if ((id.indexOf(value)) && (id.toLowerCase().indexOf(value.toLowerCase()) < 0)) {
            $(this).hide();
          } else {
            $(this).show();
          }
        }
      })
    })
  </script>
</body>

</html>