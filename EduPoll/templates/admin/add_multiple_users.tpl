{include file='common/header.tpl'}
{include file='common/menu.tpl'}

	<div class="container-fluid">
		<div class="row">
			{include file='common/sidebar.tpl'}
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container theme-showcase" role="main">

					<ol class="breadcrumb">
						<li><a href="admin.html">Home</a></li>
						<li><a href="add-users.html">Add Users</a></li>
						<li class="active">Add Multiple Users</li>
					</ol>

					<div class="page-header">
						<h1>Import file</h1>
					</div>

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Select the file with the users'
								information</h3>
						</div>
						<div class="panel-body">
							<form class="form-importfile">
								<input type="file">
								<br/><button type="button" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
					
					<br/><br/><h3>The specified file must match the following format:</h3>

					<div class="last-element well">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Maecenas sed diam eget risus varius blandit sit amet non magna.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
							commodo cursus magna, vel scelerisque nisl consectetur et. Cras
							mattis consectetur purus sit amet fermentum. Duis mollis, est non
							commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
							nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Maecenas sed diam eget risus varius blandit sit amet non magna.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
							commodo cursus magna, vel scelerisque nisl consectetur et. Cras
							mattis consectetur purus sit amet fermentum. Duis mollis, est non
							commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
							nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
					</div>

				</div>
			</div>
		</div>






	</div>
	<!-- /container -->

{include file='common/footer.tpl'}