<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <p>上午好，<?php echo $admin;?>!   你最后登陆的时间是<?php echo DateTime::ATOM;?></p>      
        </div>
        <?php 
            $row=$result->row();
            
        ?>
        <div>
		<ul>
		系统首页
		<li>快速导航
			<ul>
			
			<li>会员认证审核
			<ul>
				<li>个人会员认证待审核： 
					<a href="账户具体信息"><?php  echo $row->user_sum ?></a>	
					
					
				</li>
				<li>个人会员认证未通过： 
					<?php  echo $row->weitongguo ?>
					
				</li>


			</ul>

				
				
			</li>
			<li>会员统计
			<ul>
				<li>普通用户： 
					<?php  echo 'value' ?>
					
				</li>
				<li>认证用户： 
					<?php  echo 'value' ?>
					
				</li>
				<li>机器人： 
					<?php  echo 'value' ?>
					
				</li>
				<li>会员总数： 
					<?php  echo 'Summary' ?>
					
				</li>
				

			</ul>

				
				
			</li>
			<li>充值提现
				<ul>
					<li>充值单：<?php  echo 'value' ?></li>
				</ul>

				
				
			</li>
			<li>直播统计
			<ul>
				<li>直播中视频： 
					<?php  echo 'value' ?>
					
				</li>
				<li>结束已保存视频： 
					<?php  echo 'value' ?>
					
				</li>


			</ul>

				
				
			</li>

			</ul>


		</li>

		<li>网站数据统计
			<ul>
			
			<li>
				
				
			</li>

			</ul>

			


		</li>
		</ul>



	</div>

    </body>
</html>
