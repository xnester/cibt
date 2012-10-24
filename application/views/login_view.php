<?php
//$attributes = array('id' => 'form_login');
//echo form_open('login/process',$attributes);
echo '<legend>Admin Login</legend>';
echo '<div id="login_alert" style="display:none;"></div>';
// Login img form 
echo '<div class="control-group">';

echo form_label('Username', 'user');
echo '<div class="controls">
	  <div class="input-prepend">
	  <span class="add-on"><i class="icon-user"></i></span>';
echo form_input(array('type'=>'text','id' => 'user','name' => 'user'));
echo '</div>
	  </div>';

echo form_label('Password', 'passwd');
echo '<div class="controls">
	  <div class="input-prepend">
	  <span class="add-on"><i class="icon-lock"></i></span>';
echo form_input(array('type'=>'password','id' => 'passwd','name' => 'passwd'));
echo '</div>
	  </div>';

echo '</div>';
// Login img form 
echo '<p>';
echo form_submit(array('type'=>'submit','value'=>'Login','class'=>'btn btn-success','name'=>'login','id'=>'login'));
echo anchor('login','Cancel',array('class'=>'btn btn-link'));
echo '</p>';
//echo form_close();