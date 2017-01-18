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
        <div class="htmleaf-container">
       <h2>普通主播列表</h2>
       <div>主播ID：<input type="text" class="uid">
           手机号：<input type="number" class="tel">
           主播昵称：<input type="text" class="nickname">
           <input type="button" value="搜索" name="soso" />
            
       </div>
       
       <div>
           <?php
                //生成的都是一堆html表格代码
                echo form_open('welcome/index');
                echo $form_ID;
                echo $form_nickname;
                echo $form_tel;
                echo $form_submit;
               
                //echo form_input(array('type'=>'submit','name'=>'submit','value'=>'搜索'));
                
           
           ?>
         
           
       </div>
       

    <?php //foreach ($data as $user): ?>

    <h3><?php 
            //因为数据返回的是一个对象，包含所有表的内容
            //如果需要查询某一行的内容，则用row（）方法
            $row=$result->row();
            echo $row->nickname; 
        ?>
     </h3>
    <div class="main">
        <?php 
            //$this->load->library('table');
            //$this->table->set_heading('编号','主播昵称','头像','砖石','累计消费砖石','红票','可用红票','积分','关注','粉丝','等级','永久禁播','状态');
            echo $this->table->generate($result);
            //分页效果：如何只有一个页面将不显示分页 create_links()返回空
            echo '执行到了这里'.$page;
          
        ?>
    </div>
      	</div>
	<nav class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
	    <div class="sidenav-brand">
	      BRAND
	    </div>

	    <div class="sidenav-header">
	      Section Header
	      <small>secondary text</small>
	    </div>

	    <ul class="sidenav-menu">
	      <li>
	        <a href="javascript:;" data-sidenav-dropdown-toggle class="active">
	          <span class="sidenav-link-icon">
	            <i class="material-icons">store</i>
	          </span>
	          <span class="sidenav-link-title">系统首页</span>
	          <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_down</i>
	          </span>
	          <span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_up</i>
	          </span>
	        </a>

	        <ul class="sidenav-dropdown" data-sidenav-dropdown>
	          <li><a href="javascript:;">快速导航</a></li>
	          <li><a href="javascript:;">网站数据统计</a></li>
	          <li><a href="javascript:;">系统日志</a></li>
	        </ul>
	      </li>
	      <li>
	        <a href="javascript:;" data-sidenav-dropdown-toggle>
	          <span class="sidenav-link-icon">
	            <i class="material-icons">payment</i>
	          </span>
	          <span class="sidenav-link-title">Sed do eiusmod</span>
	          <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_down</i>
	          </span>
	          <span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_up</i>
	          </span>
	        </a>

	        <ul class="sidenav-dropdown" data-sidenav-dropdown>
	          <li><a href="javascript:;">Tempor incididunt</a></li>
	          <li><a href="javascript:;">Labore</a></li>
	        </ul>
	      </li>
	      <li>
	        <a href="javascript:;" data-sidenav-dropdown-toggle>
	          <span class="sidenav-link-icon">
	            <i class="material-icons">shopping_cart</i>
	          </span>
	          <span class="sidenav-link-title">Dolore magna</span>
	          <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_down</i>
	          </span>
	          <span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_up</i>
	          </span>
	        </a>

	        <ul class="sidenav-dropdown" data-sidenav-dropdown>
	          <li><a href="javascript:;">Aliqua</a></li>
	          <li><a href="javascript:;">Exercitation</a></li>
	          <li><a href="javascript:;">Minim veniam</a></li>
	        </ul>
	      </li>
	      <li>
	        <a href="javascript:;">
	          <span class="sidenav-link-icon">
	            <i class="material-icons">assignment_ind</i>
	          </span>
	          <span class="sidenav-link-title">Nostrud ullamco</span>
	        </a>
	      </li>
	      <li>
	        <a href="javascript:;">
	          <span class="sidenav-link-icon">
	            <i class="material-icons">alarm</i>
	          </span>
	          <span class="sidenav-link-title">Commodo</span>
	        </a>
	      </li>
	    </ul>

	    <div class="sidenav-header">
	      Another Section Header
	    </div>

	    <ul class="sidenav-menu">
	      <li>
	        <a href="javascript:;" data-sidenav-dropdown-toggle>
	          <span class="sidenav-link-icon">
	            <i class="material-icons">date_range</i>
	          </span>
	          <span class="sidenav-link-title">Reprehenderit</span>
	          <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_down</i>
	          </span>
	          <span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
	            <i class="material-icons">arrow_drop_up</i>
	          </span>
	        </a>

	        <ul class="sidenav-dropdown" data-sidenav-dropdown>
	          <li><a href="javascript:;">Voluptate</a></li>
	          <li><a href="javascript:;">Excepteur</a></li>
	        </ul>
	      </li>
	      <li>
	        <a href="javascript:;">
	          <span class="sidenav-link-icon">
	            <i class="material-icons">backup</i>
	          </span>
	          <span class="sidenav-link-title">Occaecat</span>
	        </a>
	      </li>
	      <li>
	        <a href="javascript:;">
	          <span class="sidenav-link-icon">
	            <i class="material-icons">settings</i>
	          </span>
	          <span class="sidenav-link-title">Deserunt</span>
	        </a>
	      </li>
	    </ul>
	  </nav>

	  <a href="javascript:;" class="toggle" id="sidenav-toggle">
	    <i class="material-icons">menu</i>
	  </a>
	
	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="dist/sidenav.min.js"></script>
  	<script>$('[data-sidenav]').sidenav();</script>
</body>
</html>
