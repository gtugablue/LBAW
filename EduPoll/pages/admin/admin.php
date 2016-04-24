<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="img/favicon.png">

<title>EduPoll</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/global.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">

	<!-- Fixed navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin.html">EduPoll</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="admin-addusers.html">Add users</a></li>
					<li><a href="admin-removeusers.html">Remove users</a></li>
					<li><a href="admin-groups.html">Manage groups</a></li>
					<li><a href="index.html">Logout</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">

				<div class="calendar-mini">
					<div class="calendar-month">
						<ul class="calendar-header">
							<li class="calendar-prev-month">❮</li>
							<li class="calendar-next-month">❯</li>
							<li style="text-align: center">August<br> <span
								style="font-size: 18px">2016</span>
							</li>
						</ul>
					</div>

					<ul class="calendar-weekdays">
						<li>Mo</li><li>Tu</li><li>We</li><li>Th</li><li>Fr</li><li>Sa</li><li>Su</li>
					</ul>

					<ul class="calendar-days">
						<li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8
						</li><li>9</li><li><span class="calendar-day-active">10</span></li><li>11
						</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18
						</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25
						</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li>
					</ul>
				</div>
				
          	</br></br><ul class="nav nav-sidebar" text-align="right">
            	<li><a href="edit-profile.html">Administrator</a></li>
          	</ul>
          
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container theme-showcase" role="main">

					<ol class="breadcrumb">
						<li class="active">Home</li>
					</ol>

					<a href="admin-addusers.html"><button type="button" class="btn btn-lg btn-primary">Add users</button></a>
					<a href="admin-removeusers.html"><button type="button" class="btn btn-lg btn-primary">Remove users</button></a>
					<a href="admin-groups.html"><button type="button" class="btn btn-lg btn-primary">Manage groups</button></a>

					<div class="page-header">
						<h1>Statistics</h1>
					</div>

					<div class="row">
						<table class="table">
							<tbody>
								<tr>
									<td>1</td>
									<td>Number of registered users</td>
									<td>8012</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Number of exams this week</td>
									<td>10</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Exams created during the last week</td>
									<td>2</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>






	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
					window.jQuery
							|| document
									.write('<script src="js/vendor/jquery.min.js"><\/script>')
				</script>
	<script src="javascript/bootstrap.min.js"></script>
	<script src="javascript/docs.min.js"></script>
</body>
</html>