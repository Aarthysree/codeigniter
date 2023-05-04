<?php 
class Home extends CI_Controller{
    public function create(){
        $this->load->model('ComModel');
        $countries=$this->ComModel->getCountries();
       
       $data=[];
       $data['countries']=$countries;
      

        $this->load->view('create',$data);
    }
    public function getstates(){
        if($this->input->post('country_id'))
    {
     echo $this->ComModel->getstates($this->input->post('country_id'));
    }
}
function getcities()
 {
  if($this->input->post('state_id'))
  {
   echo $this->ComModel->getcities($this->input->post('state_id'));
  }
 }
}
?>