<?php
    include("connn.php");
    $id = $_GET['id'];
    $select = "select * from medicine";
    $result = mysqli_query($conn,$select);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $price = $row['reat'];
            $md_code = $row['md_code'];
            $img = $row['image'];
        }
    }

    if(isset($_POST['submit'])){
      $quantity = $_POST['quantity'];
      $Total = $_POST['total'];

      $insert = "insert into ordere(name,md_code,quantity,price,Total) value('$name','$md_code','$quantity','$price','$Total')";
      $res = mysqli_query($conn,$insert);
      if($res){
          header('Location:buy medicine.php');
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .chaout{
        width: 100%;
        position: fixed;
        z-index: 3000;
        background: #0000ff63;
        height: 100vh;
    }
</style>
<body>
<div class="chaout">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-6">
        <form action="" method="post">
        <div class="card mb-4">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-2">
                <img src="../user/img/<?php echo $img ?>"
                  class="img-fluid" alt="Generic placeholder image">
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Name</p>
                  <p class="lead fw-normal mb-0"><?php echo $name ?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Code</p>
                  <?php echo $md_code ?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Quantity</p>
                 <input type="text" name="quantity" id="quantity" style="width: 40px;">
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Price</p>
                  <p class="lead fw-normal mb-0 " id="price"><?php echo $price ?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Total</p>
                  <input class="lead fw-normal mb-0" id="to" style="width: 40px; border: none;" value="<?php echo $price ?>"  name="total">
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Order total:</span> <span
                  class="lead fw-normal " id="total"><?php echo $price ?></span>
              </p>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" name="submit" class="btn btn-primary btn-lg">Buy</button>
        </div>
        </form>
      </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
  texte =0;
      $("#quantity").keyup(function(){
        texte = $('#quantity').val()
        price = document.getElementById('price').innerHTML;
        price = parseInt(price)
        texte = parseInt(texte);
        Total = texte*price;
        document.getElementById('total').innerHTML=Total;
        document.getElementById('to').value=Total;
      })
    </script>
</body>
</html>