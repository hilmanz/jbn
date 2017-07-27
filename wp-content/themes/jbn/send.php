<?php
/* get custom field value for a post id */
require('../../../wp-blog-header.php');
$id = (intval($_GET['id'])) ? intval($_GET['id']) : 0;
$key = (isset($_GET['key'])) ? urldecode($_GET['key']) : '';
$value = get_post_meta($id,$key,true);
session_start();
if(strtolower($_POST['answer']) == $_SESSION['captcha']){ ?>
<?php
$email_to = chit.eureka@gmail.com;
$subject = $_POST['cname1'];

$message = "
<h1 style='margin:0; padding:0 20px; line-height:50px; font-size:20px; color:#fff; background:#8eb713;'>School of Nassa </h1>
<table width='100%' border='0' cellspacing='0' cellpadding='0' style='background:#eee; padding:20px; font-size:14px; line-height:24px;'>
  <tr>
    <td width='100' valign='top'>Name</td>
    <td width='10' valign='top'>:</td>
    <td valign='top'>".$_POST['cname1']."</td>
  </tr>
  <tr>
    <td valign='top'>Email</td>
    <td valign='top'>:</td>
    <td valign='top'>".$_POST['cname2']."</td>
  </tr>
  <tr>
    <td valign='top'>Phone</td>
    <td valign='top'>:</td>
    <td valign='top'>".$_POST['cname3']."</td>
  </tr>
  <tr>
    <td valign='top'>Message</td>
    <td valign='top'>:</td>
    <td valign='top'>".$_POST['cname4']."</td>
  </tr>
</table>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= 'From:'.$_POST['cname1']. "\r\n";
    if(mail($email_to, $subject, $message, $headers)){
        echo '1'; // we are sending this text to the ajax request telling it that the mail is sent..      
    }else{
        echo '0';// ... or this one to tell it that it wasn't sent    
    }
?> 
<?php }else{
	echo '2';
}
unset($_SESSION['captcha']);	
?>
