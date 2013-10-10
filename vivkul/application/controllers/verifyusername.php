<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifyusername extends CI_Controller {   

 public function index()
 {
 	$no=$this->input->post('no');
 	$a=$this->input->post('a');
 	$b=$this->input->post('b');
  $ans=$this->input->post('ans');
  $answer=$this->input->post('answer');
 	if(strcmp(" ".$ans,$answer)==0){    //$answer has an extra space ahead of it.
 	if($a+$b==$no){
  $username=$this->input->post('username');
 	if($username!=null||$username!=''){
 	
    
    $file='used/saddam.txt';
    $data['content']=file($file,FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);
        $count=0;
		    foreach($data['content'] as $line):
          if($line==$username) $count=$count+1;
           endforeach;
    if ($count) {
      $data['status']="something";
	} 
	else {
    	$data['status']="nothing";
	}
	//echo $conten;
	$data['user']=$username;
    $data['tag']="green";
    $this->load->view('comment', $data);
}
else{
$data['tag']="red";
$this->load->view('user', $data);

}
}
else{
	$data['tag']="blue";
	$this->load->view('user', $data);
 }
}
else{
  $data['tag']="grey";
  $this->load->view('user', $data);
}
}
}