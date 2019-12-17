<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<div class='from'>
	<form  name="from" method="POST" action="{{ route('login.with') }}" >
		{{ csrf_field() }}
		<p>账号</p>
		<input type="text" name="uuid" class="1" >
		<p>密码</p>
		<input type="password" name="password" class="1">
		<input type="submit" name="提交">
	</form>
</div>
</body>
<style type="text/css">
	.from{
		height: 100vh;
		width: 500px;
		background: #fff;
	}
	.from p{
		
	}
</style>
</html>
<?php echo encrypt('qwerty');?>