<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoM extends CI_Model {
	public function get_alumno(){
		$this->db->select('a.id_alumno,a.nombre,a.apellido,sexo,seccion,a.anio');
		$this->db->from('alumnos a');
		$this->db->join('sexo s','s.id_sexo=a.id_sexo');
		$this->db->join('seccion se','se.id_seccion=a.id_seccion');
		$exe = 	$this->db->get();
		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_alumno',$id);
		$this->db->delete('alumnos');
		if($this->db->affected_rows()>0){
			return "eli";
		}else{
			return false;
		}
	}

	public function get_sexo(){
		$exe = $this->db->get('sexo');
		return $exe->result();
	}
	public function get_seccion(){
		$exe = $this->db->get('seccion');
		return $exe->result();
	}


	public function ingresar($datos){
		$this->db->set('nombre',$datos['nombre']);
		$this->db->set('apellido',$datos['apellido']);
		$this->db->set('id_sexo',$datos['id_sexo']);
		$this->db->set('id_seccion',$datos['id_seccion']);
		$this->db->set('anio',$datos['anio']);
		$this->db->insert('alumnos');

		if($this->db->affected_rows()>0){
			return "add";
		}else{
			return false;
		}
	}

	public function get_datos($id){
		$this->db->where('id_alumno',$id);
		$exe = $this->db->get('alumnos');
		return $exe->result();
	}

	public function actualizar($datos){
		$this->db->set('nombre',$datos['nombre']);
		$this->db->set('apellido',$datos['apellido']);
		$this->db->set('id_sexo',$datos['id_sexo']);
		$this->db->set('id_seccion',$datos['id_seccion']);
		$this->db->set('anio',$datos['anio']);
		$this->db->where('id_alumno',$datos['id_alumno']);
		$this->db->update('alumnos');

		if($this->db->affected_rows()>0){
			return "edi";
		}else{
			return false;
		}
	}

}
