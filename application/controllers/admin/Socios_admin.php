<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/Socios_model');

		if(!isset($_SESSION['user']) || !$_SESSION['status'])
		{
			$this->session->sess_destroy();
			redirect(base_url('admin'));
		}
	}

	public function index(){
		$pagina = "socios";
		$socios = $this->Socios_model->get_listado();

		$data = array(
			'pagina' => $pagina,
			'socios' => $socios
		);

		$this->load->view('admin/templates/head_admin',$data);
 		$this->load->view('admin/admin_socios',$data);
		$this->load->view('admin/templates/footer_admin');
	}


    public function do_upload($imagen){
            $config['upload_path']          = FCPATH.'/uploads/archivos/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload($imagen)){
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                    exit;
            }
            else{
                    $data = array('upload_data' => $this->upload->data());
            }
    }

	public function guardar(){

		/*
		$this->do_upload("archivo1");
		$this->do_upload("archivo2");
		*/




		$data = array(
			'numero_cuenta' => $this->input->post('codigo_usuario'),
			'numero_cuenta' => $this->input->post('numero_cuenta'),
			'solicitud' => $this->input->post('solicitud'),
			'consentimiento' => $this->input->post('consentimiento'),
			'nombre_madre' => $this->input->post('nombre_madre'),
			'apellidos_madre' => $this->input->post('apellidos_madre'),
			'dni_madre' => $this->input->post('dni_madre'),
			'dni_img_madre' => $this->input->post('dni_img_madre'),
			'direccion_madre' => $this->input->post('direccion_madre'),
			'localidad_madre' => $this->input->post('localidad_madre'),
			'provincia_madre' => $this->input->post('provincia_madre'),
			'codigo_postal_madre' => $this->input->post('codigo_postal_madre'),
			'movil_madre' => $this->input->post('movil_madre'),
			'telefono_madre' => $this->input->post('telefono_madre'),
			'email_madre' => $this->input->post('email_madre'),
			'email_madre' => $this->input->post('email_madre'),
			'nombre_padre' => $this->input->post('nombre_padre'),
			'apellidos_padre' => $this->input->post('apellidos_padre'),
			'dni_padre' => $this->input->post('dni_padre'),
			'dni_img_padre' => $this->input->post('dni_img_padre'),
			'direccion_padre' => $this->input->post('direccion_padre'),
			'localidad_padre' => $this->input->post('localidad_padre'),
			'provincia_padre' => $this->input->post('provincia_padre'),
			'codigo_postal_padre' => $this->input->post('codigo_postal_padre'),
			'movil_padre' => $this->input->post('movil_padre'),
			'telefono_padre' => $this->input->post('telefono_padre'),
			'email_padre' => $this->input->post('email_padre'),
			'email_padre' => $this->input->post('email_padre'),
			'foto_usuario' => $this->input->post('foto_usuario'),
			'nombre_usuario' => $this->input->post('nombre_usuario'),
			'apellidos_usuario' => $this->input->post('apellidos_usuario'),
			'dni_usuario' => $this->input->post('dni_usuario'),
			'dni_img_usuario' => $this->input->post('dni_img_usuario'),
			'direccion_usuario' => $this->input->post('direccion_usuario'),
			'localidad_usuario' => $this->input->post('localidad_usuario'),
			'provincia_usuario' => $this->input->post('provincia_usuario'),
			'codigo_postal_usuario' => $this->input->post('codigo_postal_usuario'),
			'movil_usuario' => $this->input->post('movil_usuario'),
			'telefono_usuario' => $this->input->post('telefono_usuario'),
			'email_usuario' => $this->input->post('email_usuario'),
			'email_usuario' => $this->input->post('email_usuario'),
			'diagnostico_usuario' => $this->input->post('diagnostico_usuario'),
			'diagnostico_img_usuario' => $this->input->post('diagnostico_img_usuario'),
			'grado_dependencia_usuario' => $this->input->post('grado_dependencia_usuario'),
			'grado_dependencia_img_usuario' => $this->input->post('grado_dependencia_img_usuario'),
			'grado_discapacidad_usuario' => $this->input->post('grado_discapacidad_usuario'),
			'grado_discapacidad_img_usuario' => $this->input->post('grado_discapacidad_img_usuario'),
			'tipo_escolarizacion_usuario' => $this->input->post('tipo_escolarizacion_usuario'),
			'colegio_usuario' => $this->input->post('colegio_usuario'),
			'movilidad_usuario' => $this->input->post('movilidad_usuario'),
			'nivel_educativo_usuario' => $this->input->post('nivel_educativo_usuario')
		);



		$id = $this->input->post('id');

		if($id){
			$this->Socios_model->editar_socio($data, $id);
		}
		else{
			$id_socio = $this->Socios_model->crear_socio($data);


			//TODO: HACER INSERT DE ESTO EN TABLA ALTAS_BAJAS
			/*
			$fecha_alta = $this->input->post('fecha_alta');
			$motivo_alta = $this->input->post('motivo_alta');
			$fecha_baja = $this->input->post('fecha_baja');
			$motivo_baja = $this->input->post('motivo_baja');
			$this->Socios_model->crear_alta($id_socio, $fecha_alta, $motivo_alta);
			$this->Socios_model->crear_baja($id_socio, $fecha_baja, $motivo_baja);
			*/
		}



		
		redirect(base_url('admin/socios'));
		
	}



	public function editar($id_socio){
		
		$pagina = "socios";
		$socio = $this->Socios_model->get_info($id_socio);

		$data = array(
			'pagina' => $pagina,
			'socios' => $socio
		);

		$this->load->view('admin/templates/head_admin',$data);
 		$this->load->view('admin/editar_socio',$data);
		$this->load->view('admin/templates/footer_admin');
		
	}





	public function crear(){
		
		$pagina = "socios";

		$data = array(
			'pagina' => $pagina
		);
		
		$this->load->view('admin/templates/head_admin',$data);
 		$this->load->view('admin/editar_socio',$data);
		$this->load->view('admin/templates/footer_admin');
		
	}



	
	public function borrar($id){
		$this->Socios_model->elimina_socio($id);
		redirect(base_url('admin/socios'));
	}



}
