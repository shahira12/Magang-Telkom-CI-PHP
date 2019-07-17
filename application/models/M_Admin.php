<?php
/**
* 
*/
class M_Admin extends CI_Model
{

//--------------------------BEGIN DATA TRUNK-------------------------------------

	function ShowDataTrunk()
	{   		
		$data = $this->db->get('data_trunk')->result();
		return $data;
	}

	function AddDataTrunk()
	{		
	  $data = array(
	  	            'id' => $this->input->post("id"),
	  	            'lokasi' => $this->input->post("lokasi"),
		            'node_asal' => $this->input->post("node_asal"),
		            'node_tujuan'  => $this->input->post("node_tujuan"),
		            'bandwidth'  => $this->input->post("bandwidth")
		            );
	  $this->db->insert("data_trunk",$data);
	}

	function EditDataTrunk()
	{		
	  $data = array(
	  	            'lokasi' => $this->input->post("lokasi"),
		            'node_asal' => $this->input->post("node_asal"),
		            'node_tujuan'  => $this->input->post("node_tujuan"),
		            'bandwidth'  => $this->input->post("bandwidth")
		            );
	  $this->db->where("id",$this->input->post("id"));
	  $this->db->update("data_trunk",$data);
	}

	function DeleteDataTrunk($id)
	{
		$this->db->where("id",$id);
		return $this->db->delete("data_trunk");
	}

	function get_datatrunk_selected($id)
	{
		$this->db->where("id",$id);
		return $this->db->get("data_trunk");
	}

//--------------------------END DATA TRUNK-------------------------------------

//--------------------------BEGIN DATA TRAFFIC-------------------------------------

	function ShowDataTraffic()
	{   		
		$data = $this->db->get('datatraffic')->result();
		return $data;
	}

	function AddDataTraffic()
	{	
		$band = $this->input->post("bandwidth");
		$loading = $this->input->post("load");
		$occ = $band*$loading/100;
	  $data = array(
	  	            'lokasi' => $this->input->post("lokasi"),
		            'nodeasal' => $this->input->post("nodeasal"),
		            'nodetujuan'  => $this->input->post("nodetujuan"),
		            'bandwidth'  => $this->input->post("bandwidth"),
		            'load'  => $this->input->post("load"),
		            'occup'  => $occ
		            );
	  $this->db->insert("datatraffic",$data);
	}

	function EditDataTraffic()
	{		
	  $data = array(
	  	            
	  	            'lokasi' => $this->input->post("lokasi"),
		            'nodeasal' => $this->input->post("nodeasal"),
		            'nodetujuan'  => $this->input->post("nodetujuan"),
		            'bandwidth'  => $this->input->post("bandwidth"),
		            'load'  => $this->input->post("load")
		            );
	  $this->db->where("id_traffic",$this->input->post("id_traffic"));
	  $this->db->update("datatraffic",$data);
	}

	function DeleteDataTraffic($id_traffic)
	{
		$this->db->where("id_traffic",$id_traffic);
		return $this->db->delete("datatraffic");
	}

	function get_datatraffic_selected($id_traffic)
	{
		$this->db->where("id_traffic",$id_traffic);
		return $this->db->get("datatraffic");
	}
	
//--------------------------END DATA TRAFFIC-------------------------------------

//--------------------------BEGIN PIKET----------------------------------------

	function ShowDataPiket()
	{   		
		$data = $this->db->get('piket')->result();
		return $data;
	}

	function AddDataPiket()
	{		
	  $data = array(
	  	            'nik' => $this->input->post("nik"),
		            'nama' => $this->input->post("nama"),
		            'telp'  => $this->input->post("telp"),
		            'jam_jaga'  => $this->input->post("jam_jaga")
		            );
	  $this->db->insert("piket",$data);
	}

	function EditDataPiket()
	{		
	  $data = array(
	  	            'nik' => $this->input->post("nik"),
		            'nama' => $this->input->post("nama"),
		            'telp'  => $this->input->post("telp"),
		            'jam_jaga'  => $this->input->post("jam_jaga")
		            );
	  $this->db->where("nik",$this->input->post("nik"));
	  $this->db->update("piket",$data);
	}

	function DeleteDataPiket($nik)
	{
		$this->db->where("nik",$nik);
		return $this->db->delete("piket");
	}

	function get_datapiket_selected($nik)
	{
		$this->db->where("nik",$nik);
		return $this->db->get("piket");
	}

//------------------------------------END PIKET---------------------------------------------

//------------------------------------BEGIN DATA CABLE--------------------------------------

	function ShowDataCable()
	{   		
		$data = $this->db->get('kabel')->result();
		return $data;
	}

	function AddDataCable($foto)
	{		
	  $data = array(
	  	            'nama_kabel' => $this->input->post("nama_kabel"),
		            'tipe_kabel' => $this->input->post("tipe_kabel"),
		            'warna'  => $this->input->post("warna"),
		            'kegunaan'  => $this->input->post("kegunaan"),
		            'keterangan'  => $this->input->post("keterangan"),
		            'foto' => $foto['file_name']
		            );
	  $this->db->insert("kabel",$data);
	}

	function EditDataCable($foto)
	{		
	  $data = array(
	  	            'nama_kabel' => $this->input->post("nama_kabel"),
		            'tipe_kabel' => $this->input->post("tipe_kabel"),
		            'warna'  => $this->input->post("warna"),
		            'kegunaan'  => $this->input->post("kegunaan"),
		            'keterangan'  => $this->input->post("keterangan"),
		            'foto' => $foto['file_name']
		            );
	  $this->db->where("kode_kabel",$this->input->post("kode_kabel"));
	  $this->db->update("kabel",$data);
	}

	function DeleteDataCable($kode_kabel)
	{
		$this->db->where("kode_kabel",$kode_kabel);
		return $this->db->delete("kabel");
	}

	function get_datacable_selected($kode_kabel)
	{
		$this->db->where("kode_kabel",$kode_kabel);
		return $this->db->get("kabel");
	}

//------------------------------------END DATA CABLE-----------------------------------------------

//------------------------------------BEGIN TEMPERATURE---------------------------------------------

	function ShowDataTemperature()
	{   		
		$data = $this->db->get('temperatur')->result();
		return $data;
	}

	function AddDataTemperature($evidence)
	{		
	  $data = array(
	  	            'nama_metro' => $this->input->post("nama_metro"),
		            'suhu_masuk' => $this->input->post("suhu_masuk"),
		            'suhu_keluar'  => $this->input->post("suhu_keluar"),
		            'tanggal_input'  => $this->input->post("tanggal_input"),
		            'evidence' => $evidence['file_name']
		            );
	  $this->db->insert("temperatur",$data);
	}

	function EditDataTemperature($evidence)
	{		
	  $data = array(
	  	            'nama_metro' => $this->input->post("nama_metro"),
		            'suhu_masuk' => $this->input->post("suhu_masuk"),
		            'suhu_keluar'  => $this->input->post("suhu_keluar"),
		            'tanggal_input'  => $this->input->post("tanggal_input"),
		            'evidence' => $evidence['file_name']
		            );
	  $this->db->where("id_metro",$this->input->post("id_metro"));
	  $this->db->update("temperatur",$data);
	}

	function DeleteDataTemperature($id_metro)
	{
		$this->db->where("id_metro",$id_metro);
		return $this->db->delete("temperatur");
	}

	function get_datatemperature_selected($id_metro)
	{
		$this->db->where("id_metro",$id_metro);
		return $this->db->get("temperatur");
	}

//------------------------------------END TEMPERATURE---------------------------------------------

}
?>