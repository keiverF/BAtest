<?php  
include("connect.php");
class postulanteModel {
     protected $query;
     public $_db;

   public function __construct()
     {
        $this->_db = new DataBase;
     } 
    function getSql($sql)
      { 
          try{
              $sql = $this->_db->prepare($sql);
              $sql->execute();
              $resultado = $sql->fetchAll();

              return $resultado;
              }catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }
      }
    function getCon($query)
    {
    	$query = "SELECT * FROM postulantesView";
    	$data = $this->getSql($query);
    	return $data;
    }
    function load()
    {
         $this->query = "SELECT * FROM postulantesView;";
          $data = $this->getCon($this->query);
    	return $data;
    }
    function save($data1,$data2,$data3,$data4,$data5)
    {   
       
        try {
                $this->_db->beginTransaction();
                $query1= "INSERT INTO objetivo_laboral (
                    objetivo
                 ) VALUES (
                    :objetivo
                 )";
                $this->_db->prepare($query1)->execute($data2);
                $id_objetivo_laboral=$this->_db->lastInsertId('objetivo_laboral'); 
        

                $query2= "INSERT INTO estudios (                    
                     casa_estudios,
                     nivel,
                     especialidad,
                     desde,
                     hasta
                ) VALUES (                     
                     :casa_estudios,
                     :nivel,
                     :especialidad,
                     :desde,
                     :hasta                   
                )";
                $this->_db->prepare($query2)->execute($data4);
                $estudios_id_estudios=$this->_db->lastInsertId('estudios'); 

                
                $query3 = "INSERT INTO experiencia_laboral (
                    empresa,
                    actividad_empresa,
                    puesto,
                    nivel,
                    id_pais,
                    desde,
                    hasta,
                    area_del_puesto,
                    descripcion,
                    persona_acargo,
                    persona_referencia
                  ) VALUES (
                    :empresa,
                    :actividad_empresa,
                    :puesto,
                    :nivel,
                    :id_pais,
                    :desde,
                    :hasta,
                    :area_del_puesto,
                    :descripcion,
                    :persona_acargo,
                    :persona_referencia
                  )";

                $this->_db->prepare($query3)->execute($data3);
                $id_experiencia_laboral=$this->_db->lastInsertId('experiencia_laboral'); 

                $query6 = "INSERT INTO postulante ( 
                    nombres, 
                    apellidos, 
                    telefono, 
                    id_sexo, 
                    id_estado_civil, 
                    id_objetivo_laboral, 
                    id_experiencia_laboral, 
                    direccion, 
                    dni
                ) VALUES ( 
                    :nombres, 
                    :apellidos, 
                    :telefono, 
                    :id_sexo, 
                    :id_estado_civil, 
                    ".$id_objetivo_laboral.", 
                    ".$id_experiencia_laboral.", 
                    :direccion, 
                    :dni
                )";
                $this->_db->prepare($query6)->execute($data1);
                $postulante_id_postulante=$this->_db->lastInsertId('postulante'); 
                
                $query7="INSERT INTO postulante_has_estudios (
                    postulante_id_postulante,
                    estudios_id_estudios
                    ) VALUES (
                     ".$postulante_id_postulante.",
                     ".$estudios_id_estudios."
                    )";
                $this->_db->prepare($query7)->execute();
                
            
                $query8="INSERT INTO idioma (
                    nombre,
                    oral,
                    escrito
                ) VALUES (
                    :nombre,
                    :oral,
                    :escrito
                 )";
                $this->_db->prepare($query8)->execute($data5);
                $idioma_idi_dioma=$this->_db->lastInsertId('idioma'); 


                $query9="INSERT INTO postulante_has_idioma (
                    postulante_id_postulante,
                    idioma_idi_dioma
                 ) VALUES (
                    ".$postulante_id_postulante.",
                    ".$idioma_idi_dioma."
                 )";
                $this->_db->prepare($query9)->execute();
                $this->_db->commit();    
            }catch (Exception $e){
                    $this->_db->rollBack();
                    echo "Error :: ".$e->getMessage();
                    exit();
            }
            return true;
          
    }

    function deleteP($id){
        try{
            $this->_db->beginTransaction();


            $Est ="SELECT * FROM postulante_has_estudios WHERE postulante_id_postulante =".$id." ";
            $idEst= $this->getSql($Est);
            $query1 = "DELETE FROM estudios WHERE id = ".$idEst[0]['estudios_id_estudios']."";
            $this->_db->prepare($query1)->execute();
            
            $Idim ="SELECT * FROM postulante_has_idioma WHERE postulante_id_postulante =".$id." ";
            $idIdim= $this->getSql($Idim);
            $query2 = "DELETE FROM idioma WHERE id = ".$idIdim[0]['idioma_idi_dioma']."";
            $this->_db->prepare($query2)->execute();

            $Postu ="SELECT * FROM postulante WHERE id =".$id." ";
            $idPostu= $this->getSql($Postu);
            $query3 = "DELETE FROM objetivo_laboral WHERE id = ".$idPostu[0]['id_objetivo_laboral']."";
            $this->_db->prepare($query3)->execute();
            $query4 = "DELETE FROM experiencia_laboral WHERE id = ".$idPostu[0]['id_experiencia_laboral']."";
            $this->_db->prepare($query4)->execute();
            
            $query5 = "DELETE FROM postulante WHERE id= ".$id."";
            $this->_db->prepare($query5)->execute();


            $this->_db->commit(); 


            }catch (Exception $e){
                    $this->_db->rollBack();
                    echo "Error :: ".$e->getMessage();
                    exit();
            }
            return true;
    }

}

?>