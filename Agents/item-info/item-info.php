<?php
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '..\dbconnect.php';
  $sp_name = $_POST["sp_name"];
  $sp_id = $_POST["sp_id"];
  $d_add = $_POST["d_add"];
  $d_time = $_POST["d_time"];
  $policy = $_POST["policy"];
  //sql query
  $sql = "INSERT INTO `customers` (`spare_part_name`, `spare_part_id`, `delivery_address`, `delivery_time`, `maintenance_policy`) VALUES ('$sp_name', '$sp_id', '$d_add', '$d_time', '$policy')";
  $result = mysqli_query($conn, $sql);
  //checking
  if ($result) {
    $insert = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>item-info</title>

  <!-- CSS link -->
  <link rel="stylesheet" href="item-info.css" />

  <!-- Font Styles link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&display=swap" rel="stylesheet" />
</head>

<body>

  <?php
  if ($insert) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                              <strong>Success!</strong> Your record has been inserted successfully.
                                               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
</button>
                                                   </div>";
  }
  ?>

  <div class="nav">
    <div>
      <img src="https://www.ashokleyland.com/images/al-logo.svg" />
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="row-1">
        <form action="item-info.php" method="post">
          <div class="title-text">
            <div id="title-text-1">Spare Parts Details</div>
          </div>
      </div>

      <div class="row-2">
        <div class="textbox-button">
          <input class="input-textbox" type="text" placeholder="Please Enter Number of the Spare Parts" name="sp_name" />
          <input class="input-textbox" type="text" placeholder="Please Enter Transaction ID" name="sp_id" />
          <input class="input-textbox" type="text" placeholder="Please Enter Delivery Address" name="d_add" />
          <input class="input-textbox" type="text" placeholder="Enter Preferred Delivery Time in Days" name="d_time" />
        </div>


        <!-- <div class="title-text-2">
              Wish to avail our Maintenance Policy?
          </div>
          <div class="policy">
            <input class="back-gray-text" type="radio" />
            <div class="title-text-2">YES</div>
            <input class="back-gray-text" type="radio" />
            <div class="title-text-2">NO</div>
          </div> -->

        <table>
          <div>
            <tr>
              <td>
                <p id=organization>Wish to avail our maintainence policy</p>
              </td>
              <td>
                <select name="policy" id="oll">
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
              </td>
            </tr>
          </div>
        </table>

      </div>

      <div>
        <button class="btn">Submit</button>
      </div>
      </form>

      <div class="nextpage-btn" >
        <button id="nextpage">Connect to Delivery Agents</button>
      </div>

      <script type="text/javascript" src="info.js"></script>
</body>

</html>