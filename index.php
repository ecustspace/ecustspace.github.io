<!doctype html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>无标题文档</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script src='//recaptcha.net/recaptcha/api.js'></script>
	<script>
	function onSubmit(token){
	$(document).ready(function() {
	var formData = $('#myform').serialize() + '&tape=1'; // 获取表单数据
    $.ajax({
      url: 'http://686ba30c.r11.cpolar.top/renjiyanzheng.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        $('#response').html(response); // 显示响应数据
      },
      error: function(xhr, status, error) {
        console.log(xhr);
		
      }
    });})
	}
	
  
  $(document).ready(function() {
  $('#zhuce').click(function(event) {
    event.preventDefault(); // 阻止按钮的默认提交行为
    var formData = $('#myform').serialize(); // 获取表单数据
    $.ajax({
      url: 'http://686ba30c.r11.cpolar.top/yanzhengma_in.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        $('#response').html(response); // 显示响应数据
      },
      error: function(xhr, status, error) {
        console.log(xhr);
      }
    });
  });
});
	
	</script>
	</head>

	<body>
	<div class="container col-md-6 col-sm-12 mt-5">
	
	<form method="post" id="myform">
	<div class="mb-3">
	<label for="exampleInputEmail1" class="form-label">Email address</label>
	<div class="input-group mb-3">
<input type="text" class="form-control" name="email" placeholder="你的学号" aria-label="Recipient's username" aria-describedby="basic-addon2">
<span class="input-group-text" id="basic-addon2">@mail.ecust.edu.cn</span>
</div>

	<div id="emailHelp" class="form-text">忘记密码再注册一遍就行了，新注册的账号会覆盖原来的账号</div>
	</div>
	<div class="mb-3">
	<label for="exampleInputPassword1" class="form-label">Password</label>
	<input type="password" class="form-control" name="password" id="exampleInputPassword1">
	<div class="form-text">密码只能包含数字和字母，长度在6-18字符</div>
	</div>
	<div class="mb-3">
	<div class="row">
	<label for="exampleInputPassword1" class="form-label ">验证码</label>
	<div class="col-6">
	<input type="yanzhengma" class="form-control" id="yanzhengma" name="yanzhengma">
	</div>
	<div class="col-6"><button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="6LdFP0AlAAAAAHCFWFdhftLrUsVIvK-ezlwVAlcS" data-callback="onSubmit" id="huoqu" >获取验证码</button></div>
	</div>
	</div>
	<div class="mb-3 form-check">
	<input type="checkbox" class="form-check-input" id="exampleCheck1">
	<label class="form-check-label" for="exampleCheck1">Check me out</label>
	</div>
	<div class="row">
	<div class="col-6">
	<button type="submit" class="btn btn-primary" id="zhuce">注册</button>
	</div>
	<div class="col-6"><button type="button" class="btn btn-link">转到登录界面</button></div>
	</div>
	</form>
	</div>
	<div id="response"></div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
	</html>