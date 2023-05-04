 <?php
 class MyModel extends CI_Controller{
    public function modeldata(){
        $model_id=$this->model_id();
        return $modname="Sid";
       
    }
    // public function model_data(){
    //     return $modlastname="siri";
    // }
        public function model_id(){
            return $modid="charm";
        }

 }
 ?>