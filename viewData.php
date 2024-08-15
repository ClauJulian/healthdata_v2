<?php 
include("conexion.php");
$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM enfermedades WHERE id=$id";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 


<main class="container">
    <div class="cj-printarea" id="cj-printarea">
        <?php
        while($fila=mysqli_fetch_assoc($query)){
        ?>
        <!-- <p><?php echo $fila["id"] ?></p> -->

            <div class="card border-success">
                <h5 class="card-header">Información</h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila["name"] ?></h5>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $fila["recommendation"] ?></li>
                        <li class="list-group-item"><?php echo $fila["recommendation"] ?></li>
                    </ol>
                            
                </div>
                <div class="cj-info-firma">
                    <p>Dr. Nombre Apellido</p> 
                    <p>Matricula</p> 
                </div>  
                <div class="card-footer">
                    <p>Telefono Turnos y datos de interés</p>
                </div>  
            </div>
        
        <?php } ?>
        <button type="submit" class="btn btn-primary cj-print-btn">Print</button>
    </div>
</main>


<?php 
include("footer.php");
?>
