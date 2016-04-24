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

				<ul class="nav nav-sidebar">
					<li><a href="edit-profile.html">Teacher's Name</a></li>
				</ul>

			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container theme-showcase" role="main">

					<ol class="breadcrumb">
						<li><a href="main.html">Home</a></li>
						<li><a href="my-exams.html">My Exams</a></li>
						<li class="active">Exam statistics</li>
					</ol>

					<div class="jumbotron">
						<h1>LBAW - Test 1: Statistics</h1>
						<p>22-01-2015 12:00-14:00</p>
					</div>

					<div class="row text-center">
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Number of Submitted Exams</strong>
								</div>
								<div class="panel-body">50</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Number of Approved Exams</strong>
								</div>
								<div class="panel-body">43</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Average Score</strong>
								</div>
								<div class="panel-body">12.3</div>
							</div>
						</div>
					</div>

					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#questions">Questions Summary</a></li>
						<li><a data-toggle="tab" href="#students">Students Summary</a></li>
						<li><a id="AStab" data-toggle="tab" href="#AS">Approved Students</a></li>
						<li><a id="GDtab" data-toggle="tab" href="#GD">Grades Distribution</a></li>
						<li><a data-toggle="tab" href="#downloads">Export Statistics</a></li>
					</ul>

					<div class="tab-content">
						<div id="questions" class="tab-pane fade in active">
							<h3>Questions Summary</h3>
							<div id="questions-stats" class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Question</th>
											<th>Number of Answers</th>
											<th>Correct Answers</th>
											<th>% of Correct Answers</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>48</td>
											<td>36</td>
											<td>75.0</td>
										</tr>
										<tr>
											<td>2</td>
											<td>50</td>
											<td>41</td>
											<td>82.0</td>
										</tr>
										<tr>
											<td>3</td>
											<td>50</td>
											<td>34</td>
											<td>68.0</td>
										</tr>
										<tr>
											<td>4</td>
											<td>42</td>
											<td>15</td>
											<td>35.7</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div id="students" class="tab-pane fade">
							<h3>Students Summary</h3>
							<div id="students-stats" class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Name</th>
											<th>Number of Questions Answered</th>
											<th>Number of Correct Answers</th>
											<th>Grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>André Lago</td>
											<td>50</td>
											<td>50</td>
											<td>20.0</td>
										</tr>
										<tr>
											<td>Guilherme Pinto</td>
											<td>50</td>
											<td>45</td>
											<td>18.0</td>
										</tr>
										<tr>
											<td>Gustavo Silva</td>
											<td>50</td>
											<td>0</td>
											<td>0.0</td>
										</tr>
										<tr>
											<td>Pedro Castro</td>
											<td>47</td>
											<td>46</td>
											<td>18.0</td>
										</tr>
										<tr>
											<td>There Are Too Many Students</td>
											<td>25</td>
											<td>25</td>
											<td>10.0</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div id="AS" class="tab-pane fade text-center">
							<h3>Approved Students</h3>
								<canvas id="AScanvas" width="600" height="350"></canvas>
						</div>
						<div id="GD" class="tab-pane fade text-center">
							<h3>Grades Distribution</h3>
								<canvas id="GDcanvas" width="600" height="350"></canvas>
						</div>
						<div id="downloads" class="tab-pane fade">
							<h3>Export Statistics</h3>
								<div class="jumbotron">
									<div class="row">
										<div class="col-md-4"><button class="btn-primary btn-lg">Export PDF</button></div>
										<div class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet ornare aliquet. Maecenas interdum lacus enim, vel ultrices est pulvinar vel. Sed vitae interdum nibh. Curabitur et justo ullamcorper, ullamcorper leo vel, imperdiet dolor. Proin egestas nisl in porttitor convallis. Proin maximus tempor elit, in semper eros mollis in. Donec lobortis magna ut massa feugiat, eu porta nulla sollicitudin. Donec lobortis iaculis felis at tempus. Quisque ac lectus libero. Nulla diam turpis, mollis vitae dapibus et, facilisis vitae erat. In pellentesque, sapien ac sagittis consectetur, erat ante egestas purus, id scelerisque mauris nibh eget tortor. Nunc pretium mauris eros, quis consequat ipsum convallis a. In sodales congue felis, eget elementum mauris finibus euismod. Nunc vitae fermentum lacus. Morbi tempor neque non tortor rutrum malesuada. Integer bibendum risus elementum nulla viverra, vitae imperdiet urna pharetra.</div>
									</div>
									
								</div>
								<div class="jumbotron">
									<div class="row">
										<div class="row">
											<div class="col-md-4"><button class="btn-primary btn-lg">Export CLS</button></div>
											<div class="col-md-8">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ac mi ex. Suspendisse elit risus, dictum sit amet turpis quis, imperdiet venenatis risus. Etiam quis velit augue. In cursus luctus eros, id blandit lacus aliquet sit amet. Fusce ut sapien eget lectus feugiat aliquet vel in ligula. Nulla maximus sed arcu vitae tristique.</div>
										</div>
									</div>
									
								</div>
						</div>
					</div>

					

				</div>
			</div>
		</div>
	</div>




	<script src="./frameworks/jquery-2.2.1.min.js"></script>
	<script src="./frameworks/Chart.js"></script>
	<script src="./javascript/exam-statistics.js"></script>
	<script src="./javascript/bootstrap.min.js"></script>
</body>
</html>