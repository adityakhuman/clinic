<?php 
    include("connn.php");
    if(isset($_POST['sub']) && !empty($_POST['saerch'])){
        $search = $_POST['saerch'];
        $select = "SELECT * FROM Doctor WHERE `name` LIKE '%$search%'";
        $result = mysqli_result($conn,$select);
    }else{}
        $per_page_item = 2;
        $current = isset($_GET['page'])?$_GET['page']:1;
        $st_index = ($current - 1) * $per_page_item;
        
        $select = "SELECT * FROM `Doctor`";
        
        if(!empty($search))
        {
            $select .= "WHERE `name` LIKE '%$search%'";
        }   
        $select .= "LIMIT $st_index,$per_page_item";
        $result = mysqli_query($conn,$select);
?>
<style>
    .pagination a{
        padding:5px 10px;
        border:2px solid blue;
        margin-left: 10px;
        margin-top:5px;
        color: black !important;
    }
    .pagination{
        display:flex;
        justify-content:center;
    } 
</style>
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Doctors</p>
                <h1>Our Experience Doctors</h1>
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
            $Department = $row['Department'];
            $img = $row['img'];
            ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <?php 
                        if($stt ==1){
                            ?>
                            <img class="img-fluid" src="img/<?php echo $img ?>" alt="">
                        <?php }else{
                            ?>
                            <img class="img-fluid" src="../user/img/<?php echo $img ?>" alt="">
                        <?php 
                        }
                    ?>
                </div>
                <div class="team-text bg-light text-center p-4">
                    <h5><?php echo $name ?></h5>
                    <p class="text-primary"><?php echo $Department ?></p>
                </div>
            </div>
        </div>

        <?php }
    }
    
    ?>
    <div class="pagination">
            <?php
                $total_row_query = "SELECT COUNT(*) as count FROM Doctor";
                $total_r_result = mysqli_query($conn , $total_row_query);
                $total_row = mysqli_fetch_assoc($total_r_result)['count'];
                $total_page = ceil($total_row / $per_page_item);

                for($i = 1; $i <= $total_page; $i++)
                {
                    echo '<a href="?page=' . $i;
                        if(isset($_GET['data']))
                        {
                            echo '&data=' . $_GET['data'];
                        }
                    echo '">' . $i . '</a>';
                }

            ?>
               
            </div>
        </div>
    </div>