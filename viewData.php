<?php 
include("conexion.php");
$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM enfermedades WHERE id=$id";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 


<main class="container d-flex justify-content-center align-items-center">
    <div class="cj-printarea" id="cj-printarea">
        <?php
        while($fila=mysqli_fetch_assoc($query)){
        ?>
        <!-- <p><?php echo $fila["id"] ?></p> -->

            <div class="card border">
                <h5 class="card-header">Recommendation</h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila["name"] ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $fila["info_1"] ?></li>
                        <li class="list-group-item"><?php echo $fila["info_2"] ?></li>
                        <li class="list-group-item"><?php echo $fila["info_3"] ?></li>
                        <li class="list-group-item"><?php echo $fila["info_4"] ?></li>
                        <li class="list-group-item"><?php echo $fila["info_5"] ?></li>
                    </ul>                    
                </div>
                <div class="cj-info-firma">
                    <p>Dr. Carla Perrota</p> 
                    <p>Matricula 4567/01</p> 
                </div>  
                <div class="card-footer">
                    <p>Avenue Collins, 3400, Dublin Nord - Phone 388 34567</p>
                </div>  
            </div>
        
        <?php } ?>
        <!-- <button type="submit" class="btn btn-primary cj-print-btn">Print</button> -->
    </div>

</main>


<?php 
include("footer.php");
?>
