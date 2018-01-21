<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:22:"./admintpl/addnav.html";i:1508853515;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>Hi，H-ui v3.1</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
 <nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导航管理 <span class="c-gray en">&gt;</span> 导航添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
 </nav>
<div class="containBox"> 
	 
	<div class="wap-container">

		<div class="container ui-sortable">
			<h1>导航添加</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="f-l">导航添加</span>
				</div>
				<div class="panel-body">
				<form  id="form-admin-add" class="form form-horizontal"  method="post"  >
      	<table class="table table-border table-bordered table-bg">
        	<tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 导航名字：</th>
            <td>
	            
				<div class="row cl">
                <div class="formControls col-xs-8 col-sm-9">
                  <input class="input-text" value="" placeholder="请输入2~6字为您的导航起名字" id="name" name="name" required="true" invalid="true" type="text" style="width:30%">
               <small id="showzhjs"></small>
			   </div>
				
              </div>

            </td>
          </tr>
		  <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 导航英文名字：</th>
            <td>
	            
				<div class="row cl">
                <div class="formControls col-xs-8 col-sm-9">
                  <input class="input-text" value="" placeholder="请输入2~6字为您的导航起名字" name="ename" required="true" invalid="true" type="text" style="width:30%">
               
			   </div>
				
              </div>

            </td>
          </tr>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 导航描述：</th>
            <td>
            	<div class="row cl">
                <div class="formControls col-xs-8 col-sm-9">
                  <input class="input-text" value="" placeholder="请至少输入3个字符，作为导航描述" id="description" name="description" required="true" invalid="true" type="text">
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <th width="100" class="text-r"><span class="c-red"></span> 选择上级导航：</th>
            <td>
			<select class="input-text" name="top">
				    <option value="0">作为一级导航</option>
			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$vo): ?>
			<option value="<?php echo $vo['id']; ?> "><?php echo $vo['name']; ?></option>
				<?php if(is_array($vo['second']) || $vo['second'] instanceof \think\Collection || $vo['second'] instanceof \think\Paginator): if( count($vo['second'])==0 ) : echo "" ;else: foreach($vo['second'] as $key=>$list): ?>
					<option value="<?php echo $list['id']; ?>" style="color:blue">&nbsp;&nbsp;└─<?php echo $vo['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</td>
          </tr>
          
		 
          
         
         
         
		  <tr>
            <th class="text-r" name="sex">显示在导航栏：</th>
            <td><div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input name="show" type="radio" id="sex-1" value="1" checked>
				<label for="sex-1">显示</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="sex-2" name="show" value="0">
				<label for="sex-2">不显示</label>
			</div>
		</div>
		</td>
          </tr>
		  
          <tr>
            <th></th>
            <td><div class="row cl">
				    <div class="col-xs-8 col-xs-offset-3" style="margin-left:20px;margin-bottom:15px;border-radius:5px">
				                <input id="subbut" class="btn btn-secondary radius" type="button" value="提交" />

				              </div></td>
          </tr>
        </tbody>
      </table>
    </form>
				</div>
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
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			name:{
				minlength:2,
				maxlength:6,
				required:true,
			},
			description:{
				minlength:3,
				maxlength:30,
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script>
<script type="text/javascript">
/*验证名称*/
		$('#name').blur(function(){
		var name=$('#name').val();
		
		if(!(/^[a-zA-Z0-9\u4e00-\u9fa5]+$/.test(name)) || name==''){ 
		 layer.tips('导航名称格式不对',$('#name'));  
		 $('#showzhjs').html('');
			 return false;
		}
		
		$.ajax({
			url:"<?php echo url('Nav/navname'); ?>",
			type:"post",
			data:{name:name,id:1},
			success:function (data) {
				
				if (data.status) {
					$('#showzhjs').html(data.msg);
					$('#showzhjs').css('color', 'red');
					 return false;
				}
				else {
					$('#showzhjs').html(data.msg);
					$('#showzhjs').css('color', 'green');
				}
			}
		});
		});
	$('#subbut').click(function(){
		var flag=$("#form-admin-add").valid();
		if(!flag){
			return false;
		}
		var name=$('#name').val();
		if(!(/^[a-zA-Z0-9\u4e00-\u9fa5]+$/.test(name))){ 
		 layer.tips('导航名称格式不对',$('#name'));  
		 $('#showzhjs').html('');
			 return false;
		}
		
		$.ajax({
			url:"<?php echo url('Nav/navname'); ?>",
			type:"post",
			data:{name:name,id:1},
			success:function (data) {
				
				if (data.status) {
					$('#showzhjs').html(data.msg);
					$('#showzhjs').css('color', 'red');
					 return false;
				}
				else {
					$('#showzhjs').html(data.msg);
					$('#showzhjs').css('color', 'green');
				}
			}
		});
		
		$.ajax({
			url: "<?php echo url('Nav/do_addnav'); ?>",
			type:'POST',
			data:$('#form-admin-add').serialize(),
			success:function(data){
				switch(data.status){
					case 1 :
						layer.msg(data.msg,{
							offset: 't',
							anim: 6
						}); 
						 setInterval(function(){ 
							 location.href="<?php echo url('Nav/listnav'); ?>"; 
						 },2000); 
						 break;
					case 2 :layer.msg(data.msg,{
						offset: 't',
						anlm: 6
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
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->