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
              $respuesta = $cnn->prepare("select * from clients");
              //Ejecutamos la consulta
              $respuesta->execute();
              //Creamos un array donde almacenaremos la data obtenida
              $usuarios = [];
              //Recorremos la data obtenida
              foreach($respuesta as $res){
                  //Llenamos la data en el array
                  $usuarios[]=$res;
              }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
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
                $stmt = $cnn->prepare("SELECT * FROM clients WHERE firstname=:usernameEmail  AND pass=:hash_password"); 
                $stmt->bindParam("usernameEmail", $this->user,PDO::PARAM_STR);
                $stmt->bindParam("hash_password", $this->pass,PDO::PARAM_STR);
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

   /*  function __construct()
    {
        parent::__construct();
    }

    public function insertData($data='')
    {
        try {
            $cnn = $this->dbh;

            // set the PDO error mode to exception
            $stmt = $cnn->prepare(
                    "INSERT INTO clients(firstname, lastname, birthday, country)
                    VALUES (:fname, :lname, :bday, :ctry)");
            $stmt->bindParam(':fname', $data['firstname']);
            $stmt->bindParam(':lname', $data['lastname']);
            $stmt->bindParam(':bday', $data['birthday']);
            $stmt->bindParam(':ctry', $data['country']);

            // use exec() because no results are returned
            $stmt->execute();
            echo "New record created successfully";
            //return true;
        }
        catch(PDOException $e) {
                echo $stmt . "<br>" . $e->getMessage();
                //return false;
        }
        $cnn = null;
    }

    public function updateData($data='', $id)
    {
        try {
            $pdo = $this->dbh;
            $sql = "UPDATE clients SET
                firstname = :fname,
                lastname = :lname,
                birthday = :bday,
                country = :ctry
                WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':fname', $data['firstname']);
            $stmt->bindParam(':lname', $data['lastname']);
            $stmt->bindParam(':fn', $data['birthday']);
            $stmt->bindParam(':ctry', $data['country']);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            echo "New record updated successfully";
            //return true;
        }
        catch(PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
            //return false;
        }
        $cnn = null;
    }

    public function deleteData($id)
    {
        try {
            $pdo = $this->dbh;
            $sql = "DELETE FROM clients WHERE id =  :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            echo "The record deleted successfully";
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
        $cnn = null;
    }

    // Obtener todos los registros
    public function getAll()
    {
        try {
            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->dbh;
            //Preparamos la consulta sql
              $respuesta = $cnn->prepare("select * from clients");
              //Ejecutamos la consulta
              $respuesta->execute();
              //Creamos un array donde almacenaremos la data obtenida
              $usuarios = [];
              //Recorremos la data obtenida
              foreach($respuesta as $res){
                  //Llenamos la data en el array
                  $usuarios[]=$res;
              }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
    } */
}