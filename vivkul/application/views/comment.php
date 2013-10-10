<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Viveka Kulharia</title>
	<?php include('foundation_head.php') ?>
</head>
<body>
	<?php include('foundation_body.php') ?>
	<ul style="display:inline" class="button-group radius even-7">
      <li style="display:inline"><a class="button" href="<?php echo base_url() ?>">Home</a></li>
      <li style="display:inline; float:right"><a href="https://www.facebook.com/VivekaKulharia" target="_blank"><img src="<?php echo base_url() ?>img/facebook.jpg" style="width:60px;"></a></li>
    </ul>


    <div>
      <form name="comment" action="<?php echo base_url()?>index.php/create"  method= "POST" onsubmit="return validateComment()" enctype="multipart/form-data">
        <fieldset>
          <legend>Whatever is in your mind</legend>
          <div class="row">
            <div class="large-6 columns">
                <label>Tell Me</label>
            <textarea placeholder="What do you love to share" <?php if($tag=="red") echo 'class="error"';?> name="content" style="height : 100px" id="about_me"></textarea>
          </div>
          </div>
          <input id= "user" value="<?php echo $user; ?>" name="username" style="display:none;">
		  <input id= "url1" value="url" name="url" style="display:none;">
			<button class="tiny round">Submit</button>
          <font color="red"> <div id="thought" class="error"><?php if($tag=="red") echo 'I will love to hear from you.';?></div></font>
        </fieldset>
      </form>
    </div>

	<div>
  <ul class="pricing-table">
  <?php
  if ($status=="nothing")
    {
    echo "<li class='price'>You seem to be visiting here for the first time.Have a good day! </li>";
    }
  else
    { $count=3;$counts=0;
      foreach ($content as $about):
        if($about==$user) {$count=0; $counts=$counts+1;}
        if($count>0&&$count<3){
        if($count%2==1) echo "<li class='title'>".$about."</li><div class=''>";
        else echo"<li class='price'>".$about."</li></div>";  }  // give a class to div
        $count=$count+1;
      endforeach;
    }
  ?> 
  </ul></div>
<?php
if ($status=="nothing"||$counts<2) $counts=0;
else $counts=1;
?>

<?php if($counts==1) echo "<div>"; ?>
<div style="<?php if($counts==0) echo "position:fixed;  bottom:0px; clear:both;"; else echo "margin-top: 50px; bottom:0px; clear:both;"; ?>"><img src="<?php echo base_url() ?>img/ok.png"></div>
<?php if($counts==1) echo "</div>"; ?>
    <script>
    	function validateComment()
      {
        var x=document.forms['comment']['content'].value;
        var flag=true;
        if(x==null||x=="")
        {
          $("#about_me").addClass("error");
          flag=false;
        }
        else $("#about_me").removeClass("error");
		if(!flag) document.getElementById("thought").innerHTML="Please write something";
        //$("#login_error_info").addClass("error");
        return flag;
      }
    </script>


</body>
</html>

