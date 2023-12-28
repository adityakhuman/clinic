<?php 
    include("connn.php");
    if(isset($_POST['sub']) && !empty($_POST['saerch'])){
        $search = $_POST['saerch'];
        
        $select = "SELECT * FROM medicine WHERE `name` LIKE '%$search%'";
        $result = mysqli_query($conn,$select);

    }else{
        $select = "select * from medicine";
        $result = mysqli_query($conn,$select);
    }

?>
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Medicine</p>
                <h1>Buy Medicine</h1>
            </div>
            <div class="row g-4">
            <div class="input-group mb-3">
                <form action="" method="post" class="d-flex">
                    <input type="text" class="form-control me-2" name="saerch" placeholder="Saerch" id="saerch">
                    <button class="input-group-text" type="sub" name="sub" id="basic-addon1">Search</button>
                </form>
            </div>
        <?php if($result){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $Department = $row['reat'];
            $img = $row['image'];
            $id = $row['id'];
            ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp itam-o" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="img/<?php echo $img ?>" alt="">
                </div>
                <div class="team-text bg-light text-center p-4">
                    <h5><a href="addtocart.php?id=<?php echo $id ?>"><?php echo $name ?></a></h5>
                    <p class="text-primary"><?php echo "₹ ".$Department ?></p>
                </div>
            </div>
        </div>
        <?php }
    }
    
    ?>
               
            </div>
        </div>
    </div>