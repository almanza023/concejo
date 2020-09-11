<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									
									<span class="user-level">Usuario: </span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Cuenta</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Salir</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Acciones Rapidas</h4>
						</li>
						<li class="nav-item">
							<a href="{{route('secretaria')}}">
								<i class="fas fa-desktop"></i>
								<p>Inicio</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Configuraciones</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('cargos.index')}}">
											<span class="sub-item">Cargos</span>
										</a>
									</li>
									<li>
										<a href="{{route('partidos.index')}}">
											<span class="sub-item">Partidos</span>
										</a>
									</li>
									<li>
										<a href="{{route('tipovotaciones.index')}}">
											<span class="sub-item">Tipo de Votaciones</span>
										</a>
									</li>
									<li>
										<a href="{{route('personas.index')}}">
											<span class="sub-item">Personas</span>
										</a>
									</li>
									<li>
										<a href="{{route('asistencias.index')}}">
											<span class="sub-item">Asistencias</span>
										</a>
									</li>
									<li>
										<a href="{{route('proyectos.index')}}">
											<span class="sub-item">Proyectos</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>