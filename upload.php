    <?php
	$status = "";
    if ($_POST["action"] == "upload") {
        // obtenemos los datos del archivo
        $tamano = $_FILES["archivo"]['size'];
        $tipo = $_FILES["archivo"]['type'];
        $archivo = $_FILES["archivo"]['name'];
        $prefijo = substr(md5(uniqid(rand())),0,6);
        if ($archivo != "") {
            // guardamos el archivo a la carpeta files
            $destino =  "upload/".$prefijo."_".$archivo;
            if (copy($_FILES['archivo']['tmp_name'],$destino)) {
                $status = "Archivo subido: <b>".$archivo."</b>";
				
				
				$con=pg_connect("host=localhost port=5432 dbname=proyectotis user=grupo88 password=face2014");
				
				$sql="INSERT INTO informe (inf_url) VALUES ('$destino');";
				
				pg_query($con, $sql);
				header("Location: http://146.83.198.35/~grupo88");
            } else {
                $status = "Error al subir el archivo";
				echo $status;
            }
        } else {
            $status = "Error al subir archivo";
			echo $status;
        }
		}
?>