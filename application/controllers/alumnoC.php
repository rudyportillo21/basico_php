<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoC extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('alumnoM');
	}

	
	public function index()
	{
		$data = array('title'=>'Colegio || Alumno',
			'alumno'=>$this->alumnoM->get_alumno(),
			'sexo'=>$this->alumnoM->get_sexo(),
			'seccion'=>$this->alumnoM->get_seccion());
		$this->load->view('template/header',$data);
		$this->load->view('alumnoV');
		$this->load->view('template/footer');
	}

	
	public function eliminar($id){
		$respuesta = $this->alumnoM->eliminar($id);
		$data = array('title'=>'Colegio || Alumno',
			'alumno'=>$this->alumnoM->get_alumno(),
			'sexo'=>$this->alumnoM->get_sexo(),
			'seccion'=>$this->alumnoM->get_seccion(),
			'msj'=>$respuesta);
		$this->load->view('template/header',$data);
		$this->load->view('alumnoV');
		$this->load->view('template/footer');
	}



	public function ingresar(){
		$datos['nombre'] = $this->input->post('nombre');
		$datos['apellido'] = $this->input->post('apellido');
		$datos['id_sexo'] = $this->input->post('sexo');
		$datos['id_seccion'] = $this->input->post('seccion');
		$datos['anio'] = $this->input->post('anio');
		$respuesta = $this->alumnoM->ingresar($datos);

		$data = array('title'=>'Colegio || Alumno',
			'alumno'=>$this->alumnoM->get_alumno(),
			'sexo'=>$this->alumnoM->get_sexo(),
			'seccion'=>$this->alumnoM->get_seccion(),
			'msj'=>$respuesta);
		$this->load->view('template/header',$data);
		$this->load->view('alumnoV');
		$this->load->view('template/footer');
	}

	public function get_datos($id){
		$data = array('title'=>'Colegio || Alumno',
			'datos'=>$this->alumnoM->get_datos($id),
			'sexo'=>$this->alumnoM->get_sexo(),
			'seccion'=>$this->alumnoM->get_seccion());
		$this->load->view('template/header',$data);
		$this->load->view('alumnoVact');
		$this->load->view('template/footer');
	}


	public function actualizar(){
		$datos['id_alumno'] = $this->input->post('id_alumno');
		$datos['nombre'] = $this->input->post('nombre');
		$datos['apellido'] = $this->input->post('apellido');
		$datos['id_sexo'] = $this->input->post('sexo');
		$datos['id_seccion'] = $this->input->post('seccion');
		$datos['anio'] = $this->input->post('anio');
		$respuesta = $this->alumnoM->actualizar($datos);

		$data = array('title'=>'Colegio || Alumno',
			'alumno'=>$this->alumnoM->get_alumno(),
			'sexo'=>$this->alumnoM->get_sexo(),
			'seccion'=>$this->alumnoM->get_seccion(),
			'msj'=>$respuesta);
		$this->load->view('template/header',$data);
		$this->load->view('alumnoV');
		$this->load->view('template/footer');
	}
}
