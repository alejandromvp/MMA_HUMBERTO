<?php
// funcion para crear un directorio----------------------------------------
function creandoDirectorio($nombreDirectorio)
{
	mkdir($nombreDirectorio);
}

// funcion para crear archivo 
function creandoArchivo($nArchivo, $qHara)
{
	$usuario = $_POST["usuario"];
	$comentario = $_POST["comentario"];
	$time = time();
	$tiempo = date("d-m-Y");
	$abriendoArchivo = fopen($nArchivo, $qHara) or die ("problemas en la creacion");
	fputs($abriendoArchivo, $usuario.",".$comentario.",".$tiempo);
	fputs($abriendoArchivo, "\r\n");		
	fclose($abriendoArchivo);
}
function creandoArchivo2($nArchivo, $qHara)
{

	$abriendoArchivo = fopen($nArchivo, $qHara) or die ("problemas en la creacion");		
	fclose($abriendoArchivo);
}

function mostrandoArchivos($nArchivo, $qHara)
{
	$abriendoArchivo = fopen($nArchivo, $qHara) or die ("Aun no existen comentarios");;
	while(!feof($abriendoArchivo)){ 
		$comentario = fgets($abriendoArchivo);
		$partes = explode(",", $comentario);
		//echo $obtener . "<br />";
		echo "<div class='media'>
                    <a class='pull-left' href='#'>
                        <img class='media-object' src='../../resource/img/fotos/icono/boy.png' alt=''>
                    </a>
                    <div class='media-body'>
                        <h4 class='media-heading'>".$partes[0]."<small>(".$partes[2].")</small>
                        </h4>".$partes[1]."</div>
       		</div>"; 

	}
	fclose($abriendoArchivo);
}

if ((isset($_POST["btnGuardar"]) && $_POST["btnGuardar"] == "Postear"))
{
	$nombrex = $_POST["nombre_archivo_txt"];
	$nombreDirectorio = "Archivos";
	$nombreArchivo = $nombreDirectorio."/".$nombrex;
	$instruccion = "a"; // abrir y escribir, y escribir encima
	@creandoDirectorio($nombreDirectorio); // permite que la carpeta no se vuelva crear una vez ya creada
	creandoArchivo($nombreArchivo, $instruccion); 

}
?>