<?php namespace App\Models;

    use CodeIgniter\Model;

    class CrudModel extends Model {
            public function listarNombres(){
                $Nombres = $this->db->query("SELECT * FROM albums");
                return $Nombres->getResult();
            }

            public function insertar($datos){
                $Nombres = $this->db->table('albums');
                $Nombres->insert($datos);

                return $this->db->insertID();
            }

            public function obtenerNombre($data){
                $Nombres = $this->db->table('albums');  
                $Nombres->where($data); 
                return $Nombres->get()->getResultArray();         
            }

            public function eliminar($data){
                $Nombres = $this->db->table('albums');
                $Nombres->where($data); 
                return $Nombres->delete();                           
            }

            public function actualizar($data, $id){
                $Nombres = $this->db->table('albums');
                $Nombres->set($data);
                $Nombres->where('id', $id);
                return $Nombres->update();  
            }

            public function listarGeneros(){
                $Nombres = $this->db->query("SELECT * FROM genres");
                return $Nombres->getResult();
            }

            public function insertarGenero($datos){
                $Nombres = $this->db->table('genres');
                $Nombres->insert($datos);

                return $this->db->insertID();
            }

            public function actualizarGenero($data, $id){
                $Nombres = $this->db->table('genres');
                $Nombres->set($data);
                $Nombres->where('id', $id);
                return $Nombres->update();  
            }

            public function obtenerGenero($data){
                $Nombres = $this->db->table('genres');  
                $Nombres->where($data); 
                return $Nombres->get()->getResultArray();         
            }

            public function eliminargenero($data){
                $Nombres = $this->db->table('genres');
                $Nombres->where($data); 
                return $Nombres->delete();                           
            }

            

    }

?>