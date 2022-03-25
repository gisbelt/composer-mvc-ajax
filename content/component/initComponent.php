<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="nav navbar-collapse collapse navbar-nav justify-content-md-center" id="navbarColor01">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link active" href="#">Home
					<span class="visually-hidden">(current)</span>
				</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="#">Noticias</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
				<li class="nav-item demo-content centrado">
					<div id="notification-header">
						<div style="position:relative">
							<a id="notification-icon" class='btn btn-outline-dark' onclick="myFunction()" name="button" role='button' data-title="Mostrar notificaciones">
								<i class="bi bi-bell"></i>
								<span id="notification-count" class="text-danger fw-bold">
									<?php if($conteo>0) { echo $conteo; }?>
								</span>
							</a>
							<div id="notification-latest" class="pb-3" style="display:none">
								<div id="h4-notificaciones">
									<p>Notificaciones</p>
								</div>
							</div>
						</div>          
					</div>
				</li>
			</ul>
			<!-- <form class="d-flex">
			<input class="form-control me-sm-2" type="text" placeholder="Search">
			<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form> -->
		</div>
	</div>
</nav>	