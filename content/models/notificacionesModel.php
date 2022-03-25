<?php
	namespace content\models;

	use content\config\conection\database as database;
    use PDO as pdo;

	class notificacionesModel extends database{

		private $con;
        public $autor;
        public $nombre;
        public $fecha;
        public $estado;

		public function __construct($autor,$fecha,$nombre){
			$this->autor=$autor;
            $this->fecha=$fecha;
            $this->nombre=$nombre;
		}

        public function notificacionesNoLeidas(){
            $conexionBD=database::crearInstancia();
            $sql="SELECT * FROM notificaciones WHERE estado=0";
            $query = $conexionBD->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_ASSOC);
            
            return $results;
        }

        public function notificacionesLeidas(){
            $listaNotificaciones=[];
            $conexionBD=database::crearInstancia();
            $sql= $conexionBD->prepare("SELECT * FROM notificaciones ORDER BY id_notificaciones DESC limit 5");
            $sql->execute();
            $results=$sql->fetchAll(PDO::FETCH_ASSOC);
            $response='';
            
            foreach($results as $result){
                /* Formate fecha */
                $fechaOriginal = $result["fecha"];
                $fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));
                $response = $response . 
                "<div class='notification-item dropdown-item mt-3'>" .
                "<p class='notification-subject mb-0'>". $result["nombre"] . " - <span>". $fechaFormateada . "</span> </p>" . 
                "<p class='notification-comment mb-0'>Autor: " . $result["autor"]  . "</p>" .
                "</div>";                
                
            }
            if(!empty($response)) {
                print $response;
            }

            return $results;
        }

        public function modificarNotificacionesLeidas(){
            $listaNotificaciones=[];
            $conexionBD=database::crearInstancia();
            $sql= $conexionBD->prepare("UPDATE notificaciones SET estado=1 WHERE estado=0");
            $sql->execute();
        }
	}
?>