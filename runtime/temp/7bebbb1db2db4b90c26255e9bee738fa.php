<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:25:"./admintpl/admin_add.html";i:1510212176;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
	<style type="text/css">
.ui-sortable .panel-header{ cursor:move}
</style>
<title>管理员添加</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
	<nav class="breadcrumb">
			<div class="container">
				<i class="Hui-iconfont">&#xe67f;</i>
				<a href="/" class="c-primary">首页</a>
				<span class="c-gray en">&gt;</span>
				<a href="#">管理员管理</a>
				<span class="c-gray en">&gt;</span>
				<span class="c-gray">管理员添加</span>
			</div>
		</nav>
		<div class="container ui-sortable">
			<h1>管理员添加</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="f-l">管理员添加</span>
					<!-- <span class="f-r">右侧标题</span> -->
				</div>
				<div class="panel-body">
	<form action="" method="post" id="form-admin-add" class="form form-horizontal" enctype="multipart/form-data" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input class="input-text" value="" placeholder="" id="adminName" name="username" required="true" invalid="true" type="text">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input class="input-text"  autocomplete="off" value="" placeholder="密码" aria-required="true" id="password" name="password" type="text">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>头像：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<span class="btn-upload form-group">
		  <input class="input-text upload-url radius" type="text" name="photo" id="uploadfile-1" readonly>
			<a href="javascript:void();" class="btn btn-primary radius">
			<i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
		  <input type="file" multiple name="photo" class="input-file">
		</span>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input value="1" name="sex" type="radio" id="sex-1" checked>
				<label for="sex-1">男</label>
			</div>
			<div class="radio-box">
				<input value="0" type="radio" id="sex-2" name="sex">
				<label for="sex-2">女</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input class="input-text" value="" placeholder="" id="phone" name="telphone" type="text">
		</div>
	</div>
		<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户组：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select class="select" size="1" name="group">
			<?php if(is_array($groupname) || $groupname instanceof \think\Collection || $groupname instanceof \think\Paginator): if( count($groupname)==0 ) : echo "" ;else: foreach($groupname as $key=>$vo): ?>
				<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input class="input-text" placeholder="@" name="email" id="email" type="text">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">备注：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea name="" cols="" rows="" class="textarea" placeholder="说点什么...100个字符以内" dragonfly="true" onkeyup="$.Huitextarealength(this,100)"></textarea>
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input id="button" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" class="btn btn-primary radius">
		</div>
	</div>
	</form>
				</div>
			</div>
			       
			 
		</div>


<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}

</script>
<script type="text/javascript">
$('#button').click(function(){
var formData = new FormData(document.getElementById("form-admin-add"));
		$.ajax({
			url:"/do_aduseradd",
			type:'POST',
			 data:formData,
			  contentType: false,
				processData: false,
			success:function(result){
				   switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
						  //icon: 1,
						  time: 2000 
						});
					//setInterval(function () {
			//location.href="<?php echo url('News/newslist'); ?>";
                              //  },1000);						
                break;
                    case 2 :layer.msg(result.msg, {
                        //offset: 't',
                        anim: 6
                    });
                break;
				  case 3 :layer.msg(result.msg, {
                        //offset: 't',
                        anim: 6
                    });
                break;
                }
			},
			error:function(data){
				alert('未知错误');
			}
		});
	});
</script>
</body>
</html>