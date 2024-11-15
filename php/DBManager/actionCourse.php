<?php

require 'DBManager.php';

$db = new DBManager();
srand(time());
$info = $_POST['descripcion'];
$titulo = $_POST['titulo'];
$link = $_POST['contenido_link'];
$numero_aleatorio = rand(1,100);
$id = $_REQUEST['id_curso'];

if (isset($_FILES['archivo']) && !empty($_FILES['archivo']['tmp_name'])) {
echo "Aqui estoy en el primer IF<br />";
    if (is_uploaded_file($_FILES['archivo']['tmp_name']) && $_FILES['archivo']["error"] === 0) {
	echo "Aqui estoy en el segundo IF<br />";
        $limite_kb = 20000;
        $rutaIcono = $db->showCouseIcon($id);
        $rutaArchivo = $db->showCourseFile($id);
        $ruta = '../../pdf/Courses/1'.'/'.$_FILES['archivo']['name'];
        $rutaArch = '../../pdf/Courses/1'.'/'.$_FILES['contenido_file']['name'];
        echo $ruta."<br />".$rutaArch."<br />";
        if ($_FILES["archivo"]["type"]=="image/x-icon" && $_FILES["archivo"]["size"] <= $limite_kb * 1024) { //se verifica que el archivo ingresado sea el permitido y que no exceda el limite de peso
            echo "Aqui estoy en el 3er IF<br />"; 
            unlink('../../pdf/Courses'.'/'.$rutaIcono);
            unlink('../../pdf/Courses'.'/'.$rutaArchivo);
            
             
            if (!file_exists($ruta)) { // se copia la imagen a la ruta si esta imagen no existe, si ya hay una imagen repetida no deja volver a sunbirla
                $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
                if ($resultado) { // Si la funcion @move_uploaded_file copio exitosamente el archivo procede a guardar la ruta y los datos en la base de datos
                    if (isset($_FILES['contenido_file']) && !empty($_FILES['contenido_file']['tmp_name'])) {
                        @move_uploaded_file($_FILES["contenido_file"]["tmp_name"], $rutaArch);
                        $db->updateCourse($id, $titulo, $info, '1'.'/'.$_FILES['archivo']['name'],'document', '1'.'/'.$_FILES['contenido_file']['name']);
                        header('location: ../../Admin/Panel/Cursos.php');
                    }else{
                        $db->updateCourse($id, $titulo, $info, '1'.'/'.$_FILES['archivo']['name'],'link', $link);
                        header('location: ../../Admin/Panel/Cursos.php');
                    }
                } else {
                    echo "No se guardo imagen <br />";
                }
            } else {
                $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], '../../pdf/Courses/1'.'/'.$numero_aleatorio.$_FILES['archivo']['name']);
                if ($resultado) { // Si la funcion @move_uploaded_file copio exitosamente el archivo procede a guardar la ruta y los datos en la base de datos
                    if (isset($_FILES['contenido_file']) && !empty($_FILES['contenido_file']['tmp_name'])) {
                        @move_uploaded_file($_FILES["contenido_file"]["tmp_name"], $rutaArch);
                        $db->updateCourse($id, $titulo, $info, '1'.'/'.$numero_aleatorio.$_FILES['archivo']['name'], 'document', '1'.'/'.$_FILES['contenido_file']['name']);
                        header('location: ../../Admin/Panel/Cursos.php');
                    }else{
                        $db->updateCourse( $id, $titulo, $info, '1'.'/'.$numero_aleatorio.$_FILES['archivo']['name'],'link', $link);
                        header('location: ../../Admin/Panel/Cursos.php');
                    }
                    
                } else {
                    echo "No se guardo imagen";
                }
            }
            
           
                
           
        } else {
            echo "Imagen no permitida o pesada";
	    header('location: ../../Admin/Panel/Cursos.php');
        }
    }
} else{
    if (isset($_FILES['contenido_file']) && !empty($_FILES['contenido_file']['tmp_name'])) {
        @move_uploaded_file($_FILES["contenido_file"]["tmp_name"], $rutaArch);
        $db->updateCourse($id, $titulo, $info, '1'.'/'.$_FILES['archivo']['name'],'document', '1'.'/'.$_FILES['contenido_file']['name']);
        header('location: ../../Admin/Panel/Cursos.php');
    }else if(!empty($link)){
        $db->updateCourse($id, $titulo, $info, '1'.'/'.$_FILES['archivo']['name'],'link', $link);
        header('location: ../../Admin/Panel/Cursos.php');
    }else{
        $db->updateCourseInfo($id, $titulo, $info);
        header('location: ../../Admin/Panel/Cursos.php');
    }
}

?>
