<?php
function conexion() //funcion para hacer la conexion hacia la bd
     {
         if (!($con=mysql_connect("localhost","root","admin"))) //crea un vinculo entre la bd y la pagina php
         {
           echo "No se pudo conectar a la BD";
           exit();
         }
           if (!mysql_select_db("practicaabc",$con))
            {
              echo "Error al seleccionar la base de datos.";
              exit();
            }
          return $con;
      }

?>
