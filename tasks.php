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
				<li><a href="#">宿舍信息查询</a></li>
			</ul>

                <h2>请输入查询的宿舍信息：</h2>
                <form action="tasks.php" method="post">
                    楼栋号：
                    <select name="Bnumber" style="width:100px;color:white;background: #4bb1cf" >
                        <option select="selected"><?php echo $_POST['Bnumber']?></option>
                        <option value=" 东一">东一</option>
                        <option value="东二">东二</option>
                        <option value="东三">东三</option>
                        <option value="东四">东四</option>
                    </select>
                    楼层：
                    <select name="Fnumber" style="width:100px;color:white;background: #4bb1cf">
                        <option select="selected"><?php echo $_POST['Fnumber']?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    宿舍号：
                    <select name="Dnumber" style="width:100px;color:white;background: #4bb1cf">
                        <option select="selected"><?php echo $_POST['Dnumber']?></option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>

                    <input type="submit" name="sub" value="点击查询">
                </form>


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


                <?php

                include "conn.php";

                if(!empty($_POST[sub]))
                {

                        $Bnum = $_POST['Bnumber'];
                        $Fnum = $_POST['Fnumber'];
                        $Dnum = $_POST['Dnumber'];
                        $Dnum ="$Fnum"."$Dnum";


                        $sql = "select * from dorm where Bnumber='$Bnum' AND Dnumber='$Dnum'";


                        $query = $db->query($sql);
                         $rs=$query->fetch_array();

                         $sql2="select *from stu_dorm where Bnumber='$Bnum' AND Dnumber='$Dnum'";
                         $query2=$db->query($sql2);



                        ?>
                    <h2>宿舍信息：</h2>
                <table width="800" border="2"  >
                    <tr>
                        <th>楼栋号</th>
                        <th>宿舍号</th>
                        <th>宿舍人数</th>

                    </tr>

                    <tr>
                     <td align="center"><?php echo $rs['Bnumber'] ?></td>
                    <td align="center"><?php echo $rs['Dnumber'] ?></td>
                    <td align="center"><?php echo $rs['people'] ?></td>
                    </tr>
                </table>
                    <h2>宿舍人员信息：</h2>
                    <table width="800" border="2"  >
                        <tr>
                            <th>学号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>专业</th>
                            <th>联系方式</th>
                        </tr>
                    <?php
                    while($rs2=$query2->fetch_array())
                    {
                        $Snum = $rs2['Snumber'];
                            $sql3 = "select *from student where number='$Snum'";
                            $query3 = $db->query($sql3);
                            $rs3 = $query3->fetch_array();
                            ?>
                        <tr>
                            <td align="center"><?php echo $rs3['number'] ?></td>
                            <td align="center"><?php echo $rs3['name'] ?></td>
                            <td align="center"><?php echo $rs3['sex'] ?></td>
                            <td align="center"><?php echo $rs3['age'] ?></td>
                            <td align="center"><?php echo $rs3['dept'] ?></td>
                            <td align="center"><?php echo $rs3['phone'] ?></td>

                        </tr>


                        <?php
                    }


                }

                ?>
                    </table>

	
</body>
</html>
