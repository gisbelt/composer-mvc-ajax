<?php

	namespace content\models;

	use content\config\conection\database as database;
    use PDO as pdo;

	class homeModel extends database{

		private $con;
        public $titulo;
        public $descripcion;
        public $imagen;

		public function __construct($imagen,$titulo,$descripcion){
            $this->titulo=$titulo;
            $this->descripcion=$descripcion;
            $this->imagen=$imagen;
		}

        public function consultarNoticias(){
            $conexionBD=database::crearInstancia();
            $sql="SELECT * FROM noticias";
            $query = $conexionBD->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_ASSOC);
            if($query -> rowCount() > 0){
                foreach($results as $result){
                    $listaNoticias[]=$result;
                }
                echo json_encode($listaNoticias);
            }
            return $listaNoticias;
        }

        public function consultarNoticiasHome(){
            $listaNoticias1=[];
            $conexionBD=database::crearInstancia();
            $sql= $conexionBD->prepare("SELECT * FROM noticias");
            $sql->execute();
            $results=$sql->fetchAll();
            
            foreach($results as $result){
                $listaNoticias1[]=new homeModel($result['imagen'],$result['titulo'],$result['descripcion']);
            }

            return $listaNoticias1;
        }


	}

?>