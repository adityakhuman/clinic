<?php 
  include("conn.php");
  $stt =0;
  if(isset($_POST["submit"]) && isset($_FILES["image"])){
    $name  = $_POST['name'];
    $quantity  = $_POST['quantity'];
    $tabs  = $_POST['tabs'];
    $EX_Date  = $_POST['EX_Date'];
    $buy_date  = $_POST['buy_date'];
    $mrp  = $_POST['mrp'];
    $reat  = $_POST['reat'];
    $code  = $_POST['code'];
    $supplier  = $_POST['supplier'];

    $file_name = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    if(move_uploaded_file($tmp,"../user/img/".$file_name)){
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $update = "UPDATE medicine SET name = '$name', quantity = '$quantity', image = '$file_name', tabs = '$tabs', EX_Date = '$EX_Date', buy_date = '$buy_date', mrp = '$mrp', reat = '$reat', sup_name = '$supplier', md_code = '$code' WHERE id = '$id'";
        mysqli_query($conn,$update);
      }else{
        $insert  = "insert into medicine(name,quantity,image,tabs,EX_Date,buy_date,mrp,reat,sup_name,md_code) value('$name','$quantity','$file_name','$tabs','$EX_Date','$buy_date','$mrp','$reat','$supplier','$code')";
        mysqli_query($conn,$insert);
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Form Basics</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="../user/lib/animate/animate.min.css" rel="stylesheet">
<link href="../user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../user/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../user/css/style.css" rel="stylesheet">
</head>
<style>
    th,td{
        width: 20px !important;
        overflow: hidden !important;
        height: 2px !important;
    }
</style>
<body id="page-top">
  <div id="wrapper">
      <!-- Sidebar -->
      <?php include("sidebar.php") ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include("topbar.php") ?>

        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Medicine Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Medicine Details</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Medicine Doctor</h6>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Quantity</label>
                      <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">tabs</label>
                      <input type="text" name="tabs" class="form-control" id="exampleInputPassword1" placeholder="tabs">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">EX Date</label>
                      <input type="date" name="EX_Date" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Buy date</label>
                      <input type="date" name="buy_date" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">medicine code</label>
                      <input type="text" name="code" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">₹MRP</label>
                      <input type="text" name="mrp" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Price</label>
                      <input type="text" name="reat" class="form-control" id="exampleInputPassword1" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Supplier Name</label>
                      <input type="text" name="supplier" class="form-control" id="exampleInputPassword1" placeholder="Enter Supplier Name">
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Medicine Image</label>
                      </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-lg-12 mt-3">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Medicine Tables</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Medicine Code</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>EX_Date</th>
                        <th>Buy_date</th>
                        <th>₹ MRP</th>
                        <th>Price</th>
                        <th>Supplier Name</th>
                        <th>Update</th>
                        <th>delete</th>
                    </thead>
                    <tbody>
                        <?php
                            include("conn.php");
                            $select = "select * from medicine";
                            $result = mysqli_query($conn,$select);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>            
                        <tr>
                            <td><a href=""><?php echo $row['md_code'] ?></a></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><?php echo $row['EX_Date'] ?></td>
                            <td><?php echo $row['buy_date'] ?></td>
                            <td><?php echo $row['mrp'] ?></td>
                            <td><?php echo $row['reat'] ?></td>
                            <td><?php echo $row['sup_name'] ?></td>
                            <td><a href="medicine.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                   <?php }
                }
            ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>