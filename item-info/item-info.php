<?php
$insert = false;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include '..\dbconnect.php';
    $vid = $_POST["vid"];
  $cname = $_POST["cname"];
  $cid = $_POST["cid"];
  $complaint = $_POST["complaint"];
  $ins = $_POST["ins"];
    //sql query
    $sql=  " INSERT INTO `notes1` ( `vid`, `cname`, `cid`, `complaint`, `ins`) VALUES ('$vid', '$cname', '$cid', '$complaint', '$ins')";
    $result = mysqli_query($conn, $sql);
    //checking
    if($result){
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
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>

  <?php
         if($insert){
                                           echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
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

          <div class="title-text">
            <div id="title-text-1">Spare Parts Details</div>
          </div>
        </div>

        <div class="row-2">
          <div class="textbox-button">
            <input
              class="input-textbox"
              type="text"
              placeholder="Please Enter Name of the Spare Part"
            />
            <input
              class="input-textbox"
              type="text"
              placeholder="Please Enter Spare Part ID"
            />
            <input
              class="input-textbox"
              type="text"
              placeholder="Please Enter Delivery Address"
            />
            <input
              class="input-textbox"
              type="text"
              placeholder="Enter Preferred Delivery Time in Days"
            />
          </div>

          
          <div class="title-text-2">
              Wish to avail our Maintenance Policy?
          </div>
          <div class="policy">
            <input class="back-gray-text" type="radio" />
            <div class="title-text-2">YES</div>
            <input class="back-gray-text" type="radio" />
            <div class="title-text-2">NO</div>
          </div>

    </div>

    <div>
      <button id="btn" class="btn">Connect To Delivery Agents</button>
    </div>

    <script src="info.js"></script>
  </body>
</html>
