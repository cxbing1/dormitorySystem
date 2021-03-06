<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>

		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index.html"><span>学生宿舍管理系统</span></a>

					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">

							<li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> 我的
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>个人设置</span>
                                    </li>
                                    <li><a href="chart.php"><i class="halflings-icon user"></i> 修改密码</a></li>
                                    <li><a href="login.php"><i class="halflings-icon off"></i> 退出登录</a></li>
                                </ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>

	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 首页</span></a></li>
						<li><a href="messages.php"><i class="icon-envelope"></i><span class="hidden-tablet"> 学生信息查询</span></a></li>
						<li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 宿舍信息查询</span></a></li>
						<li><a href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> 学生入住登记</span></a></li>
						<li><a href="widgets.php"><i class="icon-dashboard"></i><span class="hidden-tablet"> 学生信息管理</span></a></li>
						<li><a href="form.php"><i class="icon-edit"></i><span class="hidden-tablet">学生缺寝记录</span></a></li>
						<li><a href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> 修改密码</span></a></li>
					</ul>
				</div>
			</div>

			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">修改密码</a></li>

			</ul>

                <?php
                include "conn.php";

                    $num=$_SESSION['uid'];
                    $sql="select *from manager where number='$num'";
                    $query=$db->query($sql);
                    $rs=$query->fetch_array();

                ?>

                <h2>个人信息：</h2>
                工号：<?php echo $rs['number']?><br>
                姓名：<?php echo $rs['name']?><br>
                联系方式：<?php echo $rs['phone']?><br><br>


                <h2>密码修改：</h2>
                <form action="chart.php" method="post">
                    原密码：<input type="text" name="oldPw"  ><br>
                    新密码：<input type="text" name="newPw"  ><br>
                    再次输入新密码：<input type="text" name="newPw2"  ><br>
                            <input type="submit" name="sub" value="点击修改">
                </form>




                <?php
                    include "conn.php";

                        if(!empty($_POST['sub']))
                        {
                            if(empty($_POST['oldPw'])||empty($_POST['newPw'])||empty($_POST['newPw2']))
                                echo "请将信息填写完整！";
                            else
                                {
                                    $old = $_POST['oldPw'];
                                    $new = $_POST['newPw'];
                                    $new2 = $_POST['newPw2'];


                                    if ($new != $new2)
                                        echo "两次密码输入不一致，请重新输入！";
                                    else {
                                            $sql = "select *from manager where number='$num'";
                                            $query = $db->query($sql);
                                            $rs = $query->fetch_array();
                                            echo $old;
                                            if ($rs['password'] == $old) {
                                                $sql2 = "update manager set password='$new' where number='$num'";
                                                $db->query($sql2);
                                                echo "<script>alert('密码修改成功，请返回重新登录');location.href='login.php'</script>";
                                            }
                                            else
                                                echo "原密码输入错误！";
                                         }
                                }
                        }




                ?>



	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
