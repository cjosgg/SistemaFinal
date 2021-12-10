<?php
session_start();
?>

<?php
//conexión a BD y ejecución de un Select 
class server
{
  public  $server;
  public  $user;
  public  $pass;
  public  $bd;
  public  $username;
  public  $password;
    
    public function checausuario()
    {
        //conexion
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->bd);
       
        //si no hay error
    if ($conn->connect_error) {
          die("Error: " . $conn->connect_error);
    } 
    else {
          $sql = "SELECT id, nom_usuario, contrasenia, nombres, ap_paterno FROM u_maestros WHERE nom_usuario = '$this->username'";
               
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
          
				$row = $result->fetch_array(MYSQLI_ASSOC);
				 if ($this->password == $row['contrasenia']) { 
				
				    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['nombres'] = $row['nombres'];
                    $_SESSION['ap_paterno'] = $row['ap_paterno'];
				    $_SESSION['username'] = $this->username;
				    $_SESSION['start'] = time();
				    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

            echo'<script type="text/javascript">
                        alert("usuario y contraseña correctos! Bienvenido");
                        window.location.href="menu_PrincipalMaestros.php";
                        </script>';
				    

             
          //COOKIE
              if (!empty($_POST['remember'])) {
              setcookie('usarname', $this->username, time() + (86400 * 30));
              setcookie('password', $this->password, time() + (86400 * 30));
            }
            else{
              if (isset($_COOKIE['username'])){
                setcookie('usarname', "");
                $_SESSION['username'] = $this->username;
              }
              if (isset($_COOKIE['password'])) {
                setcookie('password', '');
                $_SESSION['password'] = $this->password;
              }

            
				    } 
          }
				 else
				 	 {   
                        echo'<script type="text/javascript">
                        alert("El usuario y contraseña son incorrectos, intentelo de nuevo");
                        window.location.href="LoginMaestros.php";
                        </script>';
 	               }
             
          }
          else {   
            echo'<script type="text/javascript">
            alert("El usuario y contraseña son incorrectos, intentelo de nuevo");
            window.location.href="LoginMaestro.php";
            </script>';
 	          }
    } 
    $conn->close();
  }
}

//uso de la clase server
//cambien los datos necesarios que correspondan a su conexión 

$miServer = new server;
$miServer->server = "127.0.0.1";
$miServer->user = "root";
$miServer->pass = "";
$miServer->bd = "conesc";
$miServer->username =  $_POST['username'];
$miServer->password = md5($_POST['password']);
$miServer->checausuario();
?>