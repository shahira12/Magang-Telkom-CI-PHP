<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
   public function index()
	{
		if(!$this->session->userdata('level')){
			redirect('auth');
		}
		else{
			$this->load->view('admin/admina');
		}
	}
    
    //-------------------------- SIDEBAR WAS HERE -------------------------------------

    public function sidebar()
	{
		$this->load->include('sidebar2');
	}

	//-------------------------- SIDEBAR END -----------------------------------------

	//-------------------------- HEADER WAS HERE -------------------------------------

    public function header()
	{
		$this->load->include('header');
	}

	//-------------------------- HEADER END -----------------------------------------

	//-------------------------- SIDEBAR WAS HERE -------------------------------------

    public function footer()
	{
		$this->load->include('footer');
	}

	//-------------------------- SIDEBAR END -----------------------------------------

	//--------------------------BEGIN MANAGEMENT TRAFFIC-------------------------------------

	//BEGIN DATA TRUNK

	public function data_trunk()
	{
		$this->load->model('M_Admin');
		$data['data_trunk'] = $this->M_Admin->ShowDataTrunk();
		$this->load->view('admin/data_trunk', $data);
	}

	public function FormAddTrunk()
	{
		$this->load->view('admin/add_data_trunk');
	}

	public function AksiAddTrunk()
	{
		$this->load->model('M_Admin');
		$this->M_Admin->AddDataTrunk();
		redirect(base_url('index.php/admin/data_trunk'));
	}

	public function FormEditTrunk($id)
	{
		$this->load->model('M_Admin');
		$data['data_trunk']=$this->M_Admin->get_datatrunk_selected($id)->result();
		$this->load->view("admin/edit_data_trunk", $data);
	}

	public function AksiEditTrunk()
	{
		$this->load->model('M_Admin');
		$this->M_Admin->EditDataTrunk();
		redirect(base_url('index.php/admin/data_trunk'));
	}

	public function AksiDeleteTrunk($id)
	{
		$this->load->model('M_Admin');
		$this->M_Admin->DeleteDataTrunk($id);
		redirect(base_url('index.php/admin/data_trunk'));
	}

	//END DATA TRUNK

	//BEGIN DATA TRAFFIC

	public function data_traffic()
	{
		$this->load->model('M_Superadmin');
		$data['datatraffic'] = $this->M_Superadmin->ShowDataTraffic();
		$this->load->view('admin/data_traffic', $data);
	}
	
	public function FormAddTraffic()
	{
		$this->load->view('admin/add_data_traffic');
	}

	public function AksiAddDataTraffic()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataTraffic();
		redirect(base_url('index.php/admin/data_traffic'));
	}

	public function FormEditDataTraffic($id_traffic)
	{
		$this->load->model('M_Superadmin');
		$data['datatraffic']=$this->M_Superadmin->get_datatraffic_selected($id_traffic)->result();
		$this->load->view("admin/edit_data_traffic", $data);
	}

	public function AksiEditDataTraffic()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataTraffic();
		redirect(base_url('index.php/admin/data_traffic'));
	}

	public function AksiDeleteDataTraffic($id_traffic)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataTraffic($id_traffic);
		redirect(base_url('index.php/admin/data_traffic'));
	}
	
	//END DATA TRAFFIC

	//--------------------------END MANAGEMENT TRAFFIC-------------------------------------

	//------------------------------------BEGIN METRO AND TRANSMISSION---------------------------------------------

	/*BEGIN TRUNK

	public function trunk()
	{
		$this->load->view('trunk');
	}*/

	//END TRUNK

	//BEGIN PIKET

	public function jadwal_piket()
	{
		$this->load->model('M_Admin');
		$data['piket'] = $this->M_Admin->ShowDataPiket();
		$this->load->view('admin/jadwal_piket', $data);
	}

	public function FormAddPiket()
	{
		$this->load->view('admin/add_jadwal_piket');
	}

	public function AksiAddPiket()
	{
		$this->load->model('M_Admin');
		$this->M_Admin->AddDataPiket();
		redirect(base_url('index.php/admin/jadwal_piket'));
	}

	public function FormEditPiket($nik)
	{
		$this->load->model('M_Admin');
		$data['piket']=$this->M_Admin->get_datapiket_selected($nik)->result();
		$this->load->view("admin/edit_jadwal_piket", $data);
	}

	public function AksiEditPiket()
	{
		$this->load->model('M_Admin');
		$this->M_Admin->EditDataPiket();
		redirect(base_url('index.php/admin/jadwal_piket'));
	}

	public function AksiDeletePiket($nik)
	{
		$this->load->model('M_Admin');
		$this->M_Admin->DeleteDataPiket($nik);
		redirect(base_url('index.php/admin/jadwal_piket'));
	}

	//END PIKET

	//BEGIN DATA CABLE

	public function data_cable()
	{
		$this->load->model('M_Admin');
		$data['kabel'] = $this->M_Admin->ShowDataCable();
		$this->load->view('admin/data_cable', $data);
	}

	public function FormAddCable()
	{
		$this->load->view('admin/add_cable');
	}

	public function AksiAddCable()
	{
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;
		$this->load->library("upload", $config);
		$this->upload->do_upload("foto");
		$nama_foto = $this->upload->data();
		$this->load->model('M_Admin');
		$this->M_Admin->AddDataCable($nama_foto);
		redirect(base_url('index.php/admin/data_cable'));
	}

	public function FormEditCable($kode_kabel)
	{
		$this->load->model('M_Admin');
		$data['kabel']=$this->M_Admin->get_datacable_selected($kode_kabel)->result();
		$this->load->view("admin/edit_cable", $data);
	}

	public function AksiEditCable()
	{
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;
		$this->load->library("upload", $config);
		$this->upload->do_upload("foto");
		$nama_foto = $this->upload->data();
		$this->load->model('M_Admin');
		$this->M_Admin->EditDataCable($nama_foto);
		redirect(base_url('index.php/admin/data_cable'));
	}

	public function AksiDeleteCable($kode_kabel)
	{
		$this->load->model('M_Admin');
		$this->M_Admin->DeleteDataCable($kode_kabel);
		redirect(base_url('index.php/Admin/data_cable'));
	}

	//END DATA CABLE

//------------------------------------END METRO AND TRANSMISSION---------------------------------------------


//------------------------------------BEGIN TEMPERATURE---------------------------------------------

	public function temperature()
	{
		$this->load->model('M_Admin');
		$data['temperatur'] = $this->M_Admin->ShowDataTemperature();
		$this->load->view('admin/temperature', $data);
	}

	public function FormAddTemperature()
	{
		$this->load->view('admin/add_temperature');
	}

	public function AksiAddTemperature()
	{
		$config['upload_path'] = './evidence/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;
		$this->load->library("upload", $config);
		$this->upload->do_upload("evidence");
		$nama_evidence = $this->upload->data();
		$this->load->model('M_Admin');
		$this->M_Admin->AddDataTemperature($nama_evidence);
		redirect(base_url('index.php/admin/temperature'));
	}

	public function FormEditTemperature($id_metro)
	{
		$this->load->model('M_Admin');
		$data['metro']=$this->M_Admin->get_datatemperature_selected($id_metro)->result();
		$this->load->view("admin/edit_temperature", $data);
	}

	public function AksiEditTemperature()
	{
		$config['upload_path'] = './evidence/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;
		$this->load->library("upload", $config);
		$this->upload->do_upload("evidence");
		$nama_evidence = $this->upload->data();
		$this->load->model('M_Admin');
		$this->M_Admin->EditDataTemperature($nama_evidence);
		redirect(base_url('index.php/admin/temperature'));
	}

	public function AksiDeleteTemperature($id_metro)
	{
		$this->load->model('M_Admin');
		$this->M_Admin->DeleteDataTemperature($id_metro);
		redirect(base_url('index.php/admin/temperature'));
	}

//------------------------------------END TEMPERATURE---------------------------------------------

}