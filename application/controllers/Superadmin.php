<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {
    
   public function index()
	{
		if(!$this->session->userdata('level')){
			redirect('auth');
		}
		else{
			$this->load->view('superadmin/admina');
		}
	}
    
    //-------------------------- SIDEBAR WAS HERE -------------------------------------

    public function sidebar()
	{
		$this->load->include('sidebar');
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
		$this->load->model('M_Superadmin');
		$data['data_trunk'] = $this->M_Superadmin->ShowDataTrunk();
		$this->load->view('superadmin/data_trunk', $data);
	}

	public function FormAddTrunk()
	{
		$this->load->view('superadmin/add_data_trunk');
	}

	public function AksiAddTrunk()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataTrunk();
		redirect(base_url('index.php/superadmin/data_trunk'));
	}

	public function FormEditTrunk($id)
	{
		$this->load->model('M_Superadmin');
		$data['data_trunk']=$this->M_Superadmin->get_datatrunk_selected($id)->result();
		$this->load->view("superadmin/edit_data_trunk", $data);
	}

	public function AksiEditTrunk()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataTrunk();
		redirect(base_url('index.php/superadmin/data_trunk'));
	}

	public function AksiDeleteTrunk($id)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataTrunk($id);
		redirect(base_url('index.php/superadmin/data_trunk'));
	}

	//END DATA TRUNK

	//BEGIN DATA TRAFFIC

	public function data_traffic()
	{
		$this->load->model('M_Superadmin');
		$data['datatraffic'] = $this->M_Superadmin->ShowDataTraffic();
		$this->load->view('superadmin/data_traffic', $data);
	}
	
	public function FormAddTraffic()
	{
		$this->load->view('superadmin/add_data_traffic');
	}

	public function AksiAddDataTraffic()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataTraffic();
		redirect(base_url('index.php/superadmin/data_traffic'));
	}

	public function FormEditDataTraffic($id_traffic)
	{
		$this->load->model('M_Superadmin');
		$data['datatraffic']=$this->M_Superadmin->get_datatraffic_selected($id_traffic)->result();
		$this->load->view("superadmin/edit_data_traffic", $data);
	}

	public function AksiEditDataTraffic()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataTraffic();
		redirect(base_url('index.php/superadmin/data_traffic'));
	}

	public function AksiDeleteDataTraffic($id_traffic)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataTraffic($id_traffic);
		redirect(base_url('index.php/superadmin/data_traffic'));
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
		$this->load->model('M_Superadmin');
		$data['piket'] = $this->M_Superadmin->ShowDataPiket();
		$this->load->view('superadmin/jadwal_piket', $data);
	}

	public function FormAddPiket()
	{
		$this->load->view('superadmin/add_jadwal_piket');
	}

	public function AksiAddPiket()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataPiket();
		redirect(base_url('index.php/superadmin/jadwal_piket'));
	}

	public function FormEditPiket($nik)
	{
		$this->load->model('M_Superadmin');
		$data['piket']=$this->M_Superadmin->get_datapiket_selected($nik)->result();
		$this->load->view("superadmin/edit_jadwal_piket", $data);
	}

	public function AksiEditPiket()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataPiket();
		redirect(base_url('index.php/superadmin/jadwal_piket'));
	}

	public function AksiDeletePiket($nik)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataPiket($nik);
		redirect(base_url('index.php/superadmin/jadwal_piket'));
	}

	//END PIKET

	//BEGIN DATA CABLE

	public function data_cable()
	{
		$this->load->model('M_Superadmin');
		$data['kabel'] = $this->M_Superadmin->ShowDataCable();
		$this->load->view('superadmin/data_cable', $data);
	}

	public function FormAddCable()
	{
		$this->load->view('superadmin/add_cable');
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
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataCable($nama_foto);
		redirect(base_url('index.php/superadmin/data_cable'));
	}

	public function FormEditCable($kode_kabel)
	{
		$this->load->model('M_Superadmin');
		$data['kabel']=$this->M_Superadmin->get_datacable_selected($kode_kabel)->result();
		$this->load->view("superadmin/edit_cable", $data);
	}

	public function AksiEditCable()
	{	

		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;
		$this->load->library("upload",$config);
		$this->upload->do_upload("foto");
		$nama_foto = $this->upload->data();
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataCable($nama_foto);
		redirect(base_url('index.php/superadmin/data_cable'));
	}

	public function AksiDeleteCable($kode_kabel)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataCable($kode_kabel);
		redirect(base_url('index.php/superadmin/data_cable'));
	}

	//END DATA CABLE

//------------------------------------END METRO AND TRANSMISSION---------------------------------------------


	//------------------------------------BEGIN TEMPERATURE---------------------------------------------

	public function temperature()
	{
		$this->load->model('M_Superadmin');
		$data['temperatur'] = $this->M_Superadmin->ShowDataTemperature();
		$this->load->view('superadmin/temperature', $data);
	}

	public function FormAddTemperature()
	{
		$this->load->view('superadmin/add_temperature');
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
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataTemperature($nama_evidence);
		redirect(base_url('index.php/superadmin/temperature'));
	}

	public function FormEditTemperature($id_metro)
	{
		$this->load->model('M_Superadmin');
		$data['metro']=$this->M_Superadmin->get_datatemperature_selected($id_metro)->result();
		$this->load->view("superadmin/edit_temperature", $data);
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
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataTemperature($nama_evidence);
		redirect(base_url('index.php/superadmin/temperature'));
	}

	public function AksiDeleteTemperature($id_metro)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataTemperature($id_metro);
		redirect(base_url('index.php/superadmin/temperature'));
	}

//------------------------------------END TEMPERATURE---------------------------------------------

//------------------------------------BEGIN USER---------------------------------------------

	public function user()
	{
		$this->load->model('M_Superadmin');
		$data['akun'] = $this->M_Superadmin->ShowDataUser();
		$this->load->view('superadmin/user', $data);
	}

	public function FormAddUser()
	{
		//panggil data yang berkaitan dg dropdown, lalu panggil di view\
		$this->load->model('M_Superadmin');
		//$data['level']=$this->M_Superadmin->showAkun();
		//$data['aktif']=$this->M_Superadmin->showAkun();
		$this->load->view('superadmin/add_user');
	}

	public function AksiAddUser()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->AddDataUser();
		redirect(base_url('index.php/superadmin/user'));
	}

	public function FormEditUser($id_user)
	{
		$this->load->model('M_Superadmin');
		$data['akun']=$this->M_Superadmin->get_datauser_selected($id_user)->result();
		$this->load->view("superadmin/edit_user", $data);
	}

	public function AksiEditUser()
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->EditDataUser();
		redirect(base_url('index.php/superadmin/user'));
	}

	public function AksiDeleteUser($id_user)
	{
		$this->load->model('M_Superadmin');
		$this->M_Superadmin->DeleteDataUser($id_user);
		redirect(base_url('index.php/superadmin/user'));
	}

//------------------------------------END USER---------------------------------------------
}