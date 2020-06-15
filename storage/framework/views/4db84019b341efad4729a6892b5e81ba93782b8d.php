<h4>Hi, <?php echo e($name); ?></h4>
<p>This is your username and password for signing in to the report App.</p> 
<tr><td width="10%">Username:&nbsp;</td><td><font color="blue"><?php echo e($username); ?></font></td></tr>
<tr><td width="10%">Password:&nbsp;</td><td><font color="blue"><?php echo e($password); ?></font></td></tr>
<tr><td width="10%">Url:&nbsp;</td><td><font color="blue"><?php $url = explode('/v',$_SERVER['HTTP_REFERER']);echo $url[0];?></font></td></tr><?php /**PATH C:\xampp\htdocs\reportsapp\resources\views/report/mail.blade.php ENDPATH**/ ?>