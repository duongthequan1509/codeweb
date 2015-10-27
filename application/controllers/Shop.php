<?php
class Shop extends CI_Controller {
	public function __construct(){ 
        parent::__construct();
		$this->load->Model('Shop_models'); 
		$this->load->library("session");
    } 
	public function index()
	{	
		
		$this->load->helper('url'); //load url helper array
         
        $data['baseURL'] = base_url();
         
		$this->load->view('shop_view',$data);
	}
	public function login(){
		$this->load->helper('url'); //load url helper array  
        $data['baseURL'] = base_url();
		$this->load->view('shop_login',$data);
        if (isset($_POST['submit'])) { // kiem tra xem co an nut dang nhap ko		
                $data['u'] = $_POST['name'];
                $data['p'] = $_POST['password'];
            if (isset($data)) {
                $dulieu = $this->Shop_models->check($data['u'], $data['p']);
                if (count($dulieu) == 0) {
                    echo "Username or password is not correct, please try again";
                } else {
                     $this->session->set_userdata('id',$dulieu['id'] );
                     $this->session->set_userdata('name',$dulieu['name'] );
                     header("location: http://localhost/codeweb/shop");                  
                 }
              }
           }
		}
	function logout(){
        $this->session->sess_destroy();
        header("location: http://localhost/codeweb/shop/login");     
       }
	public function insert(){
		$session_id= $this->session->userdata('id');
		
	  	if(!$session_id){
             header("location: http://localhost/codeweb/shop/login");
        }
		if($this->input->post('them')){
         //Khai bao bien cau hinh
         $config = array();
         //thuc mục chứa file
         $config['upload_path']   = './public/upload/user';
         //Định dạng file được phép tải
         $config['allowed_types'] = 'jpg|png|gif';
         //load thư viện upload
         $this->load->library('upload', $config);
         //thuc hien upload
         if($this->upload->do_upload('image1'))
         {
             //chua mang thong tin upload thanh con
             $data = $this->upload->data();
             //in cau truc du lieu cua file da upload
			 $anh1=$data['file_name'];
         }
         else
         {
            //hien thi lỗi nếu có
            $error = $this->upload->display_errors();
            echo $error;
         }
 		 $data1 = array(
                'img1' => $anh1,
				'type' => $_POST['type'],
				'sumay' => $_POST['sumay'],
				'code' => $_POST['code'],
				'name' => $_POST['name'],
				'soluong' => $_POST['soluong'],
            );
		  $this->Shop_models->insert_data($data1);
		}
		$this->load->helper('url'); //load url helper array  
        $data['baseURL'] = base_url();
		$this->load->view('shop_insert',$data);
		
	}

	public function delete(){
		}
	public function edit(){
		}
}
?>
