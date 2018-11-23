<?php
include("conexion.php");
$query= "SELECT proyecto.corporativa FROM proyecto WHERE proyecto.id_proy='1'";
$resultado=$con->query($query);
while ($row = $resultado->fetch_assoc()){
  ?>
<tr>
  <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['corporativa']); ?>"/></td>
</tr>

  <?php
}
 ?>
