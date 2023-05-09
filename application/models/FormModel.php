<?php 
class FormModel extends CI_Model {

    public function post_user_details(){
        date_default_timezone_set('Asia/Karachi'); # add your city to set local time zone
        $date = date('Y-m-d H:i:s');
        $form_data = array(
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'createdDate' => $date
        );
        $this->db->insert('enquiry', $form_data);
        if ($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>