<?php 
  //incluir modelo 
    include "postulanteModel.php";
    class PostulanteFunction
    {
    	public $_postuModel;
    	public function __construct(){
    		$this->_postuModel = new postulanteModel;
    	}
         //llamar metodo
    	public function getMetodo($name,$array = false){
            return $this->$name($array);
    	}
    	//cargar lista de postulantes registrados 
    	public function load()
    	{
             $data = $this->_postuModel->load();
    		return $data;
    	}
    	public function delete($id)
    	{
            
            $respuesta = $this->_postuModel->deleteP($id);
            if ($respuesta) 
            {
            	$msj='Se eliminaron los datos con exito';
            }else{
        	    $msj='Ocurio una falla al borrar los datos';        	
            }
        	echo json_encode($msj);
    	}
    }
    //instanciar funciones de la clase Postulante function.php
     $_postuFunt = new PostulanteFunction;   

    //si la peticion es via post
    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $data1 = array(
                    ':nombres'               =>$_POST["nombres"],
                    ':apellidos'             =>$_POST["apellidos"],
                    ':telefono'              =>$_POST["telefono"],                    
                    ':id_sexo'               =>$_POST["id_sexo"],
                    ':id_estado_civil'       =>$_POST["id_estado_civil"],
                    ':direccion'             =>$_POST["direccion"],
                    ':dni'                   =>$_POST["dni"],
                    );

        $data2 = array(':objetivo'           =>$_POST["objetivo"]);
        $data3 = array(                    
        	        ':empresa'               =>$_POST["empresa"],
                    ':actividad_empresa'     =>$_POST["actividad_empresa"],
                    ':puesto'                =>$_POST["puesto"],
                    ':nivel'                 =>$_POST["nivel"],
                    ':id_pais'               =>$_POST["id_pais"],
                    ':desde'                 =>date("Y-m-d", strtotime($_POST["desde"])),
                    ':hasta'                 =>date("Y-m-d", strtotime($_POST["hasta"])),
                    ':area_del_puesto'       =>$_POST["area_del_puesto"],
                    ':descripcion'           =>$_POST["descripcion"],
                    ':persona_acargo'       =>$_POST["personas_acargo"],
                    ':persona_referencia'    =>$_POST["persona_referencia"],
                    );
        $data4 = array(
        	        ':casa_estudios'         =>$_POST["casa_estudios"],
                    ':nivel'                 =>$_POST["nivelEst"],
                    ':especialidad'          =>$_POST["especialidad"],
                    ':desde'                 =>date("Y-m-d", strtotime($_POST["desde_e"])),
                    ':hasta'                 =>date("Y-m-d", strtotime($_POST["hasta_e"])),
                    );
        $data5 = array(
        	        ':nombre'                =>$_POST["idioma"],
                    ':oral'                  =>$_POST["oral"],
                    ':escrito'               =>$_POST["escrito"]
                    );
        
                     $_postuModel = new PostulanteModel;
        $respuesta = $_postuModel->save($data1,$data2,$data3,$data4,$data5);

        if ($respuesta)
        {
        	$msj='Se guardaron los datos con exito';
        }else{
        	$msj='Ocurio una falla al guardar los datos';        	
        }
        	echo json_encode($msj);
        }
        if($_SERVER['REQUEST_METHOD'] == 'GET') 
        {   

            $action=$_GET['action'];
            $id=$_GET['id'];
            if (!empty($action)) {
            	$_postuFunt->getMetodo($action,$id);
            }
            
        }

        //retornar datos de los postulantes en lista
        $getPostulantes = $_postuFunt->getMetodo('load');
 ?>