<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {

	public function login()
	{
		$this->load->view('login_view');
	}

	public function con()
	{
		$this->load->view('contact');
	}


	public function index()
	{
		$this->load->view('main_view');
	}


	public function show(){
		$sql ="SELECT * FROM users";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		//var_dump($data['rs']);
		$this->load->view("show_view",$data);
	}
	public function add_view(){
		$this->load->view("add_view");
	}
	public function add(){
		$data = array(
		'id'=> $this->input->post('id'),
		'name'=> $this->input->post('name'),
		'lastname'=> $this->input->post('lastname'),
		'address'=> $this->input->post('address'),
		'email'=> $this->input->post('email'),
		'tel'=> $this->input->post('tel'),
		'username'=> $this->input->post('username'),
		'password'=> $this->input->post('password'),
		'status'=> $this->input->post('status'),
		'image'=> $this->input->post('image')
			);
		//echo $this->input->post('id');

		$this->db->insert("users",$data);
		redirect("member/show","refresh");
		exit();
	}
	public function edit($id){
		$sql = "SELECT * from users where id=$id";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->row_array();
		$this->load->view("edit_view",$data);
	}

	public function del($id){
		$this->db->delete('users',array('id'=>$id));
		redirect("member/show","refresh");
		exit();
	}
	public function update($id){
		$data=array(
		'name'=> $this->input->post('name'),
		'address'=> $this->input->post('address'),
		'email'=> $this->input->post('email'),
		'tel'=> $this->input->post('tel'),
		'password'=> $this->input->post('password')
		);
		$this->db->where('id',$id);
		$this->db->update('users',$data);
		redirect("member/show","refresh");
		exit();
	}
	public function chk_login()

	{	
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

		$numr = $this->db->query("SELECT * from users where username='$username' && password='$password'");
		$chknum = $numr->num_rows();
		if($chknum==1){ 
			foreach ($numr->result() as $row)
			{			   
			    $name =$row->username;
				$id =$row->id;

				$data = array(
				'id'=>$id,
				'username'=>$name
						);
	
			redirect("member/index","refresh");
		
		}
	}
	////user&pass OK
		else{
			echo "no";
			
		}
	
	
}
}
