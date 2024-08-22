<?php 
include("conexion.php");
$conexion = conexion();

$sql = "SELECT * FROM enfermedades";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 

<header>
    <div class="cj-banner text-end" style="width: 100vw;">
    </div>
</header>

<main>
     
    <div class="container cj-table">
        <div class="row cj-table-title">
            <div class="col-3 col-md-3 text-break">Name</div>
            <div class=" col-8 col-md-6 text-break">Description</div>
            <div class="col-1 col-md-3 cj-title-action">Action</div>
        </div>
        <?php
            while($fila=mysqli_fetch_assoc($query)){
        ?>
        <div class="row cj-list-row">
            <div hidden><?php echo $fila["id"] ?></div>
            <div class="col-3 col-md-3 text-break"> <?php echo $fila["name"] ?> </div>
            <div class="col-8 col-md-6"> <?php echo $fila["description"] ?> </div>
            <div class="col-1 col-md-3 cj-groupBtn">
                <a title="Delette" href="deletteData.php?id=<?php echo $fila["id"]?>"><i class="bi bi-trash3"></i></a>
                <a title="Edit" href="formEditarData.php?id=<?php echo $fila["id"]?>"><i class="bi bi-file-earmark-font"></i></a> 
                <a title="Print" href="viewData.php?id=<?php echo $fila["id"]?>"><i class="bi bi-file-earmark-text"></i></a> 
            </div>
        </div>
        <?php } ?>  
    </div>

    <div>
        <button class="btn btn-success" id="displayNewData">Add New Data</button>
    </div>
         <div class="cj-formAddDisease" id="cj-formAddDisease">
            <form action="addData.php" method="GET">
                <input type="text" id="name" name="name" class="cj-inputAddData" placeholder="name" required/>
                <textarea type="text" id="description" name="description" class="cj-inputAddData" placeholder="description" required></textarea>
                <textarea type="text" id="info_1" name="info_1" class="cj-inputAddData" placeholder="recommendation 1" ></textarea>
                <textarea type="text" id="info_2" name="info_2" class="cj-inputAddData" placeholder="recommendation 2" ></textarea>
                <textarea type="text" id="info_3" name="info_3" class="cj-inputAddData" placeholder="recommendation 3" ></textarea>
                <textarea type="text" id="info_4" name="info_4" class="cj-inputAddData" placeholder="recommendation 4" ></textarea>
                <textarea type="text" id="info_5" name="info_5" class="cj-inputAddData" placeholder="recommendation 5" ></textarea>
                <button class="btn btn-success" id="sendNewData" type="submit">Add Data</button>    
            </form>           
        </div>       
</main>

<?php 
include("footer.php");
?>
