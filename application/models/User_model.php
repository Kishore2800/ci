<?php
class User_model extends CI_Model {
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

//public function insert_uploaded_files($data)
    //{
    //    $this->db->insert('user', $data);
    //    return $this->db->insert_id();
    //}
 
}
?>

       