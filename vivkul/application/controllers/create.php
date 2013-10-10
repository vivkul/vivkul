<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Create extends CI_Controller {

 public function index()
 {
      $username=$this->input->post('username'); 
     	$content=$this->input->post('content');
	$file = 'used/saddam.txt';
      if($username!=null||$username!=''){
          if($content!=null||$content!=''){
              $data["tag"]="green";
              
              $time=date("D M d, Y G:i a");
              $person = $username."\n";
		file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

		$person = $time."\n";
              file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

              $person = $content."\n";
              file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
		
          }
          else{
            $data["tag"]="red";
          }
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
              
          $data['user']=$username;
          $this->load->view('comment', $data);
      }
      else{
        $data['tag']="red";
        $this->load->view('user',$data);
      }
  }
}
?>