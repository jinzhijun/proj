<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>直播-后台管理</title>
	<link rel="stylesheet" href=<?php echo base_url("css/my_style.css")?>>
	
</head>
<body>
	<div class="log-in">
		<?php  echo validation_errors();?>
               
            <form method="post"action=<?php echo site_url("login/handle");?> >
			<table>
				<tr>
					<td colspan="2" style="text-align: center;">
						<img class="logo" src=<?php  echo base_url("img/logo-icon.png")?> alt="">
	            		<span class="brand-name">SlickLab</span>
	            	</td>
				</tr>
				<tr>
					<td class="first-col" >账号：</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td class="first-col" >密码：</td>
					<td><input type="password"  name='password'></td>
				</tr>
				<tr>
					<td class="first-col" >验证码：</td>
					<td><input type="text" name='captcha'>
				</tr>
			
				<tr>
                                    <td colspan="2" style="text-align: center;"><button class="log-in-btn" type="submit" name="submit" value='submit' >登录</button></td>
				</tr>
			</table>
			<td><?php echo $captcha_url?></td>
		</form>
	</div>
</body>

<script src=<?php echo base_url("js/jquery-1.10.2.min.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script src=<?php echo base_url("js/scripts.js")?>></script>
</html>