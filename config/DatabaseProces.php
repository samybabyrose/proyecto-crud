<?php


include_once('db.php');


class DatabaseProcess extends DatabasePDO
{

    private $user;
    private $pass;

    public function getAll()
    {
        try {
            
            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
              $respuesta = $cnn->prepare("select * from productos");
              //Ejecutamos la consulta
              $respuesta->execute();

              $productos = $respuesta ->fetchAll(PDO::FETCH_OBJ);

        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $productos;
    }



    public function login($user,$pass)
    {
        try {
            
            $this->user=$user;
            $this->pass=$pass;

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
        
                //Preparamos la consulta sql
                $stmt = $cnn->prepare("SELECT * FROM administrador WHERE usuario=:usernameEmail  AND contraseña=:hash_password"); 
                $stmt->bindParam("usernameEmail", $this->user,PDO::PARAM_STR) ;
                $stmt->bindParam("hash_password", $this->pass,PDO::PARAM_STR) ;
                //Ejecutamos la consulta
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                $mesage= "";
                if($count)
                {
                
                    $mesage = "verdadero";
                }
                else
                {
                    $mesage = "Falso";


                } 
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                return $mesage;
    }
}