<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Viveka Kulharia</title>
	<?php include('foundation_head.php') ?>
</head>
<body>
	<?php include('foundation_body.php') ?>
	<ul style="display:inline" class="button-group radius even-7" display="inline">
      <li style="display:inline"><a class="button" href="<?php echo base_url() ?>">Home</a></li>
      <li style="display:inline; float:right"><a href="https://www.facebook.com/VivekaKulharia" target="_blank"><img src="<?php echo base_url() ?>img/facebook.jpg" style="width:60px;"></a></li>
    </ul>
    <div id="user">
      <form name="ofuser" action="<?php echo base_url() ?>index.php/verifyusername" method="POST" onsubmit="return validateUsername()">
        <fieldset>
          <legend>Your Good Name</legend>

              <div class="row">
                <div class="large-6 columns">
                    <label>Its you</label>
                    <input id="loginform_username" type="text" <?php if($tag=="red") echo 'class="error"';?> placeholder="How you want me to know you." name="username">
                </div>
              </div>


              <div class="row">
      			<div class="large-4 columns">
      			<?php $a = rand(25, 50);
      			$b = rand(15,35);
      			?>
        		<label>What is <?php echo $a."+".$b ;?> ?</label>
        		<input type="number" <?php if($tag=="blue") echo 'class="error" placeholder="Still I have faith in you!!"'; else echo 'placeholder="You can do this !!"';?> name="no">
      		</div>
		</div>
		<?php
		$file = 'used/god.txt';
		$questions=file($file,FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);
		$count=0;
		foreach($questions as $line):
			$count=$count+1;
        endforeach;
        $count=$count/2;
        $numb=rand(1,$count);
        $numb=2*$numb-2;
        $question=$questions[$numb];
        $numb=$numb+1;
        $answer=$questions[$numb]; 
		?>
            <div class="row">
		
                <div class="large-6 columns">
                    <label><?php echo $question ;?></label>
                    <input id="loginform_answer" type="text" <?php if($tag=="grey") echo 'class="error" placeholder="Still I have faith in you!!"'; else echo 'placeholder="You can do this !!"';?> name="ans">
                </div>
              
	     </div>



              <input id= "a" value=" <?php echo $a ;?>" name="a" style="display:none;">
              <input id= "b" value=" <?php echo $b ;?>" name="b" style="display:none;">
              <input id= "b" value=" <?php echo $answer ;?>" name="answer" style="display:none;">
              <input id= "url" value="url" name="url" style="display:none;">
               

          <button id="loginn_button" class="round tiny">Login</button>
          <font color="red"> <div id="login_error_info" class="error"><?php if($tag=="red") echo 'Please start something';?></div></font>
        </fieldset>
      </form>
    </div>
	<div style="position:fixed;  bottom:0px; clear:both;"><img src="<?php echo base_url() ?>img/ok.png"></div>


    <script>
    function validateUsername()
      {
        var x=document.forms['ofuser']['username'].value;
        var flag=true;
        if(x==null||x=="") 
        {
          $("#loginform_username").addClass("error");
          flag=false;
        }
        else $("#loginform_username").removeClass("error");
        if(!flag) document.getElementById("login_error_info").innerHTML="* invalid submission";
        //$("#login_error_info").addClass("error");
        return flag;
      }
      </script>

</body>
</html>

