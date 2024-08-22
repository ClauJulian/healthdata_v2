<?php 
include("conexion.php");
$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM enfermedades WHERE id=$id";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 
<main class="container d-flex justify-content-center">
    <div class="cj-formEditData" id="cj-formEditData">
        <?php
               while($fila=mysqli_fetch_assoc($query)){
                ?>
            <form action="editData.php" method="GET">
                <input type="text" id="id" name="id" class="cj-inputAddData" value="<?php echo $fila["id"] ?>" hidden >
                <div class="d-flex">
                    <label class="cj-updateTitleData">Name:</label>
                    <input type="text" id="name" name="name" class="cj-inputAddData" required value="<?php echo $fila["name"] ?>" >
                </div>
                <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Description:</label>
                    <textarea type="text" id="description" name="description" class="cj-inputAddData" required value=""><?php echo $fila["description"] ?></textarea>
               </div>
               <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Recommendation:</label>    
                    <textarea type="text" id="info_1" name="info_1" class="cj-inputAddData" value=""><?php echo $fila["info_1"] ?></textarea>
               </div>
               <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Recommendation:</label>        
                    <textarea type="text" id="info_2" name="info_2" class="cj-inputAddData" value=""><?php echo $fila["info_2"] ?></textarea>
               </div>
               <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Recommendation:</label>            
                    <textarea type="text" id="info_3" name="info_3" class="cj-inputAddData" value=""><?php echo $fila["info_3"] ?></textarea>
               </div>
               <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Recommendation:</label>               
                    <textarea type="text" id="info_4" name="info_4" class="cj-inputAddData" value=""><?php echo $fila["info_4"] ?></textarea>
               </div>    
               <div class="d-flex">
                    <label for="textarea" class="cj-updateTitleData">Recommendation:</label>            
                    <textarea type="text" id="info_5" name="info_5" class="cj-inputAddData" value=""><?php echo $fila["info_5"] ?></textarea>
               </div>    
                <button class="btn btn-success" id="sendNewData" type="submit">Edit Data</button>
            </form>    
        </div>  

        <?php } ?>

    </main>
<?php 
include("footer.php");
?>