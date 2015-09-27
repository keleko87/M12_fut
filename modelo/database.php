<?php

class Database {
    private $con;
    
    public function __construct(){}

    public function conectar(){
        $this->con = mysqli_connect("mysql.hostinger.es", "u887907535_mario", "keleko87" , "u887907535_futbo");
    }
    
    public function desconectar(){
        mysqli_close($this->con);
    } 
    
    public function valida_usuario($nombre,$pass){
        $consulta = "SELECT nombre FROM gestor WHERE nombre='$nombre' and password='$pass'";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta);
        $encontrado = false;
        
        if($row = mysqli_fetch_array($result)){
            $encontrado = true;
        }
        
        $this->desconectar();
        return $encontrado;
    }
    
    
    // ----------------  EQUIPOS ------------------------------
    public function select_equipos() {
        $consulta = "select * from equipo";
        $this->conectar();                        
        $result= mysqli_query($this->con,$consulta);    
        $this->desconectar(); 
        
        return $result;        
        
    }
    
    public function select_equipo($id){
        $consulta = "select * from equipo where idequipo=$id";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta );   
        $this->desconectar();

        return $result;           
    }
    
    
    public function insert_equipo($nombre,$estadio,$localidad) {
        $consulta = "insert into equipo(nombre,estadio,localidad) values('$nombre','$estadio','$localidad')";  
        $this->conectar();           
        mysqli_query($this->con, $consulta);          
        $this->desconectar(); 
    }
    
    public function eliminar_equipo($id){
        $this->conectar();  
        $consulta = "delete from equipo where idequipo=$id";
        mysqli_query($this->con, $consulta);       
        $this->desconectar(); 
    }
    
    public function modificar_equipo($id,$nombre,$estadio,$localidad){
        $this->conectar();                        
        $consulta = "update equipo set nombre='$nombre', estadio='$estadio', localidad='$localidad' where idequipo=$id";
        mysqli_query($this->con, $consulta);        
        $this->desconectar(); 
    }
    
    
    // --------------------  JUGADORES  -------------------------------
    
    public function insert_jugador($nombre,$dorsal,$posicion,$equipo) {
        $consulta = "insert into jugador(nombr,dorsal,posicion,equipo) values('$nombre',$dorsal,'$posicion',$equipo)";  
        $this->conectar();           
        mysqli_query($this->con, $consulta);          
        $this->desconectar(); 
    }
  
    public function select_jugadores(){
        $consulta = "select J.idjugador,J.nombr,J.dorsal,J.posicion,J.equipo,E.nombre from jugador J inner join equipo E on E.idequipo = J.equipo;";
        $this->conectar();                        
        $result= mysqli_query($this->con,$consulta);    
        $this->desconectar(); 
        
        return $result;           
    }
    
    public function select_jugador($idjugador){
        $consulta = "select idjugador,nombr,dorsal,posicion,equipo,nombre from jugador as J inner join equipo E on E.idequipo = J.equipo and idjugador=$idjugador";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta );   
        $this->desconectar();

        return $result;           
    }
    public function modificar_jugador($idjugador,$nombre,$dorsal,$posicion,$equipo){
        $consulta = "update jugador set nombr='$nombre', dorsal=$dorsal, posicion='$posicion', equipo=$equipo where idjugador=$idjugador";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta );   
        $this->desconectar();
        return $result;  // True o false
    }
    public function eliminar_jugador($idjugador){
        $this->conectar();  
        $consulta = "delete from jugador where idjugador=$idjugador";
        mysqli_query($this->con, $consulta);       
        $this->desconectar(); 
    }
    
    
    
    //  --------------  PARTIDO  ------------------------------
    
    public function insert_partido($local,$visitante,$resultado,$fecha) {
        $consulta = "insert into partido (local,visitante,resultado,fecha) values($local,$visitante,'$resultado','$fecha')";  
        $this->conectar();           
        mysqli_query($this->con, $consulta);          
        $this->desconectar(); 
    }
    
    public function select_partidos() {      
        $consulta = "select idpartido,local,visitante,E.nombre as loc,E2.nombre as visit,resultado,fecha from partido as P inner join equipo E on E.idequipo = P.local inner join equipo E2 on E2.idequipo = P.visitante;";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta);
        
        $this->desconectar();     
        return $result;       
        
    }
    
    public function select_partido($idpartido){
        $consulta = "select idpartido,local,visitante,E.nombre as loc,E2.nombre as visit,resultado,fecha from partido as P inner join equipo E on E.idequipo = P.local inner join equipo E2 on E2.idequipo = P.visitante and idpartido=$idpartido";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta );   
        $this->desconectar();
        return $result;           
    }
    
    public function modificar_partido($idpartido,$local,$visitante,$resultado,$fecha){
        $consulta = "update partido set local='$local', visitante='$visitante', resultado='$resultado', fecha='$fecha' where idpartido=$idpartido";
        $this->conectar();
        $result = mysqli_query($this->con, $consulta );   
        $this->desconectar();
        return $result;  // True o false
    }
    
    public function eliminar_partido($idpartido){
        $this->conectar();  
        $consulta = "delete from partido where idpartido=$idpartido";
        mysqli_query($this->con, $consulta);       
        $this->desconectar(); 
    }
}
?>