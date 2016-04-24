<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="img/favicon.png">

<title>EduPoll</title>

<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/global.css" rel="stylesheet">
<link href="css/results.css" rel="stylesheet">
</head>

<body role="document">

	<!-- Fixed navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="main.html">EduPoll</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="exams-taken.html">Previous Exams</a></li>
					<li><a href="create-exam.html">Create Exam</a></li>
					<li><a href="my-exams.html">My Exams</a></li>
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
						<li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>
						<span class="calendar-day-active">10</span></li><li>11</li><li>12</li><li>13</li><li>14</li><li>15
						</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>
						24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li>
					</ul>
				</div>
				
          	<ul class="nav nav-sidebar" text-align="right">
            	<li><a href="edit-profile.html">Student's Name</a></li>
          	</ul>
          
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container theme-showcase" role="main">

					<ol class="breadcrumb">
						<li><a href="main.html">Home</a></li>
						<li><a href="exams-taken.html">Previous Exams</a></li>
						<li class="active">Exam Results</li>
					</ol>

					<!-- Main jumbotron for a primary marketing message or call to action -->
					<div class="first-element jumbotron">
						<h2>LBAW - Test 1: Results</h2>
					</div>

					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-6"><h3 class="panel-title">Your Score was: <strong>14</strong></h3></div>
								<div class="col-md-6 text-right"><a href="exam-taken.html">Review Exam</a></div>
							</div>
						</div>
					</div>
					
					<div class="row text-center">
						<div class="col-md-4">
							<div class="panel panel-default">
							    <div class="panel-heading"><strong>Number of Submitted Exams</strong></div>
							    <div class="panel-body">50</div>
	 						</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
							    <div class="panel-heading"><strong>Number of Approved Exams</strong></div>
							    <div class="panel-body">43</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
							    <div class="panel-heading"><strong>Average Score</strong></div>
							    <div class="panel-body">12.3</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6"><canvas id="myChart" width="600" height="400"></canvas></div>
						<div class="col-md-6 text-center">
							
								<button id="AD" type="button" class="btn btn-primary">Approved/Disapproved</button>
								<button id="GD" type="button" class="btn btn-info">Grades Distribution</button>
						
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>




	<script src="./frameworks/jquery-2.2.1.min.js"></script>
	<script src="./frameworks/Chart.js"></script>
	<script src="./javascript/results.js"></script>
	<script src="./javascript/bootstrap.min.js"></script>
</body>
</html>