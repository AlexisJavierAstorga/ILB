<?php
if (isset($_GET['term'])){
	# conectare la base de datos
    $con=@mysqli_connect("localhost", "root", "", "audi");

$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
	$fetch = mysqli_query($con,"SELECT * FROM proyecto where proyecto like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50");

	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		//$id_producto=$row['id_producto'];
		//$precio=number_format($row['precio_venta'],2,".","");
		$row_array['value'] = $row['proyecto']." ";//buscador
		//$row_array['id_producto']=$row['id_producto'];
		$row_array['proyecto']=$row['proyecto'];//recibe nombre de producto
    $row_array['alumno']=$row['alumno'];//recibe precio del producto en el input
    $row_array['grupo']=$row['grupo'];
    $row_array['salon']=$row['salon'];
    $row_array['consultoria']=$row['consultoria'];
		$row_array['descripcion']=$row['descripcion'];//recibe nombre del producto en el input

		//$row_array['modelo_producto']=$precio;
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($con);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}
?>
