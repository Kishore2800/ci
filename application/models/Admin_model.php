<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    //function to get all users from database table user.
	public function store($data){
        $this->db->insert('user',$data);
        return true;
}
    public function getUser($uemail){
        return $this->db->where('uemail',$uemail)->get('user')->row();

}
    public function insertData($data){

        $this->load->database();

        if($this->db->insert('user', $data)){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function changeUserPassword($id,$new_password){
        $this->db->set('upassword',$new_password)->where('id',$id)->update('user');

}
    public function oldPasswordMatches($id,$old_password){
        $query = $this->db->where('id',$id)->where('upassword',$old_password)->get('user');
        if($query->num_rows()>0){
            return true;
        }
            return false;
}
    public function getUserByEmail($uemail){
        return $this->db->where('uemail',$uemail)->get('user')->row();
}

    public function deleteUser($id) {
        // Perform the deletion operation
        $this->db->where('id', $id);
        $this->db->delete('user');
}
    public function getUsers() {
    // Fetch user data from the database based on the provided userId
    return $this->db->get('user')->result();
}
 
    public function getUserData($id){
        return $this->db->where('id',$id)->get('user')->row();
}
public function getUserById($id) {
    // Retrieve the user data based on the provided user ID from the database
    $query = $this->db->get_where('user', array('id' => $id));
    return $query->row();
}

    public function file_upload ($config, $filename, $ismulti = false){  
		
        if(!file_exists($config['upload_path']))  {  mkdir($config['upload_path'], 0777, true);}
        
        $this->load->library('upload', $config);	
     
        if($ismulti){
            
            $count = count($_FILES[$filename]['name']);
            $updata = array(); 
            $i=0;
            
            if(!empty($_FILES[$filename]['name'])){ 
                $filesCount = count($_FILES[$filename]['name']);
     
                for($i = 0; $i < $filesCount; $i++){   
                    $this->upload->initialize($config);
                    $_FILES[$filename.'[]']['name']     = $_FILES[$filename]['name'][$i]; 
                    $_FILES[$filename.'[]']['type']     = $_FILES[$filename]['type'][$i]; 
                    $_FILES[$filename.'[]']['tmp_name'] = $_FILES[$filename]['tmp_name'][$i]; 
                    $_FILES[$filename.'[]']['error']     = $_FILES[$filename]['error'][$i]; 
                    $_FILES[$filename.'[]']['size']     = $_FILES[$filename]['size'][$i]; 
                    
                    
                    if (!$this->upload->do_upload($filename.'[]')) { 
                        $data['msg'] 		= $this->upload->display_errors();
                        $data['filename']	= NULL;
                        $data['filepath']	= NULL;
                        $data['response'] 	= FALSE; 
                        $data['rowid'] 		= $i; 
                    }else { 
                        // Get data about the file
                        $uploadData 		= $this->upload->data();  
                        $data['filename']	= $uploadData['file_name'];
                        $data['filepath']	= $config['upload_path'].$uploadData['file_name'];
                        $data['msg']		= 'success'; 
                        $data['response'] 	= TRUE; 
                        $data['rowid'] 		= $i;  
                    }   
                    $updata[]= (object) $data;  
                }
            }
             
            return $updata; 
        }else{
            $this->upload->initialize($config);
            if(!$this->upload->do_upload($filename)){
                $data['msg'] 		= $this->upload->display_errors();
                $data['filename'] 		= NULL;
                $data['filepath'] 		= NULL;
                $data['response'] 	= false; 
            }else { 
                // Get data about the file
                $uploadData 		= $this->upload->data();  
                $data['filename'] 		= $uploadData['file_name'];
                $data['filepath'] 		= $config['upload_path'].$uploadData['file_name'];
                $data['msg']		= 'success'; 
                $data['response'] = true; 
            }   
            return (object) $data; 
        }
    }

   
}
 
?>

       
