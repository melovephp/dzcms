<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:28:"./admintpl/templet_page.html";i:1508844064;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
<title>模板列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 模板管理 <span class="c-gray en">&gt;</span> 选择模板 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="container ui-sortable">
			<h1>选择模板</h1>
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="f-l">模板风格</span>
					<span class="f-r"></span>
				</div>


				<!-- 下拉开始 -->
				
			<div class="panel panel-default" style="width:1000px;margin:20px auto ; border:none;">
		<form action="<?php echo url('Templet/do_templet'); ?>" method="post" class="form form-horizontal responsive" id="demoform">
		<span class="select-box" style="width:120px;margin-left:180px;border:0px solid red">	可用风格：</span>					
   	<span class="select-box" style="width:160px">
  <select class="select" size="1" id="styles" name="styles" style="border:0px solid red;width:150px" id="fengge">
	  <?php if(is_array($xueze) || $xueze instanceof \think\Collection || $xueze instanceof \think\Paginator): if( count($xueze)==0 ) : echo "" ;else: foreach($xueze as $key=>$val): ?>
	  <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
	  <?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
</span>
<br/><br/><br/><br/>

<input type="submit" id="subbtn"  class="btn btn-success radius" style="width:80px;margin-left:190px" value="提交"/>
<button class="btn btn-secondary radius" style="width:80px;margin-left:50px">取消</button>
								
						
					
					</form>
			
			</div>
					

			</div>
			   <footer class="footer mt-20">
			<div class="container">
				<nav class="footer-nav">
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=index">关于DZ</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=list&a=index&id=9">新闻中心</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=page&a=index&id=4">联系我们</a>
				</nav>
				<p>Copyright © 2002-2016 www.linyiit.cn 山东交通技师学院软件开发专业 <br>
					<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备15015336号-1</a>
					<br>
					未经允许，禁止转载、抄袭、镜像<br>
					用心做站，做不一样的站</p>
			</div>
		</footer>    
			 
		</div>

<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
	$('#subbtn').click(function () {
                var styles=$('#styles').val();
				$.ajax({ 
                    url:"<?php echo url('Templet/do_templet'); ?>", 
                     type:'POST', 
                     data: {data:styles}, 
                     success:function (data) { 
                         switch (data.status){ 
                             case 1: 
                                 layer.msg(data.msg, { 
                                        // offset: 't', 
                                         anim: 0 
                                    });

                             break; 
                             case 2: 
                                 layer.alert(data.msg); 
                                 break; 
                         } 

                     }, 
                    error:function (error) { 
                       layer.msg('未知错误', {icon: 2,time:2000});
                     } 
                 });
        });
	</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>