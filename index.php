<?php 
include("conexion.php");
$conexion = conexion();

$sql = "SELECT * FROM enfermedades";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 
<header>
          <!--  Banner -->
          <div class="cj-banner text-end" style="width: 100vw;">
          </div>
          <!-- Fin Banner -->
</header>

<main class="container">
    <div class="container">
       <table class="table">
           <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>  
                <th scope="col"></th> 
            </tr>
           </thead>
           <tbody>
               <?php
               while($fila=mysqli_fetch_assoc($query)){
                ?>
                   <tr class="cj-trDataList">
                       <!-- <td><?php echo $fila["id"] ?></td> -->
                       <th scope="row" class="cj-thDataName"><?php echo $fila["name"] ?></th>
                       <td><div class="cj-tdDescriptionContent"><?php echo $fila["description"] ?></div></td>
                       <td class="cj-tdMethod">
                        <div class="cj-groupBtn">
                            <a title="Delette" href="deletteData.php?id=<?php echo $fila["id"]?>"><i class="bi bi-trash3"></i></a>
                            <a title="Edit"><i class="bi bi-file-earmark-font"></i></a> 
                            <a title="Print" href="viewData.php?id=<?php echo $fila["id"]?>"><i class="bi bi-card-checklist"></i></a> 
                        </div>
                        </td>
                   </tr>
              <?php } ?>
               
              
           </tbody>
        </table>
         <!-- FORM FOR ADDING DISEASES     -->
         <div class="cj-formAddDisease">
            <form action="addData.php" method="GET">
                <input type="text" id="name" name="name" class="cj-inputAddData" placeholder="name" required/>
                <input type="text" id="description" name="description" class="cj-textareaAddData" placeholder="description" required></input>
                <input type="text" id="info_1" name="info_1" class="cj-textareaAddData" placeholder="recommendation 1" ></input>
                <input type="text" id="info_2" name="info_2" class="cj-textareaAddData" placeholder="recommendation 2" ></input>
                <input type="text" id="info_3" name="info_3" class="cj-textareaAddData" placeholder="recommendation 3" ></input>
                <input type="text" id="info_4" name="info_4" class="cj-textareaAddData" placeholder="recommendation 4" ></input>
                <input type="text" id="info_5" name="info_5" class="cj-textareaAddData" placeholder="recommendation 5" ></input>
                <button class="btn btn-success" id="sendNewData" type="submit">Add Data</button>
            </form>    
        </div>

    </div>   
</main>
<?php 
include("footer.php");
?>
