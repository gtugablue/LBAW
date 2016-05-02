{include file='common/header.tpl'}
{include file='common/menu.tpl'}

	<div class="container-fluid">
		<div class="row">
			{include file='common/sidebar.tpl'}
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container theme-showcase" role="main">
				
					{include file='common/result_messages.tpl'}

					<ol class="breadcrumb">
						<li><a href="{$BASE_URL}pages/users/main.php">Home</a></li>
						<li class="active">My Exams</li>
					</ol>

					<div class="list-group">
						<div class="list-group-item">
							<div class="row">
								<div class="col-md-10">
									<a href="exam-statistics.html"><h4 class="list-group-item-heading">COMP -
											Avaliação Individual 2</h4></a>
									<datetime class="list-group-item-text">15-02-2015
									12:00-14:00</datetime>
								</div>

								<div class="col-md-2">
									<br/><p class="list-group-item-text">Owner <a href="edit.php">(edit exam)</a></p>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="row">
								<div class="col-md-10">
									<a href="exam-statistics.html"><h4 class="list-group-item-heading">TCOM -
											Avaliação 2</h4></a>
									<datetime class="list-group-item-text">15-02-2015
									12:00-14:00</datetime>
								</div>

								<div class="col-md-2">
									<br/><p class="list-group-item-text">Manager <a href="edit.php">(edit exam)</a></p>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="row">
								<div class="col-md-10">
									<a href="exam-statistics.html"><h4 class="list-group-item-heading">IART -
											Teste 1</h4></a>
									<datetime class="list-group-item-text">15-02-2015
									12:00-14:00</datetime>
								</div>

								<div class="col-md-2">
									<br/><p class="list-group-item-text">Owner <a href="edit.php">(edit exam)</a></p>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="row">
								<div class="col-md-10">
									<a href="exam-statistics.html"><h4 class="list-group-item-heading">PPIN -
											Inquérito de projeto</h4></a>
									<datetime class="list-group-item-text">15-02-2015
									12:00-14:00</datetime>
								</div>

								<div class="col-md-2">
									<br/><p class="list-group-item-text">Manager <a href="edit.php">(edit exam)</a></p>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="row">
								<div class="col-md-10">
									<a href="exam-statistics.html"><h4 class="list-group-item-heading">LBAW -
											Avaliação A2</h4></a>
									<datetime class="list-group-item-text">15-02-2015
									12:00-14:00</datetime>
								</div>

								<div class="col-md-2">
									<br/><p class="list-group-item-text">Manager <a href="edit.php">(edit exam)</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>






	</div>
	<!-- /container -->

{include file='common/footer.tpl'}