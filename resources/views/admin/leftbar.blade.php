<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" >
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>

									<div class="dropdown-divider"></div>
                						<a href="{{url('/')}}" class="dropdown-item preview-item">
                  							<div class="preview-thumbnail">
                    							<div class="preview-icon bg-dark rounded-circle">
                     							 <i class="mdi mdi-account"></i>
                    							</div>
                  							</div>
                 								 <div class="preview-item-content">
                    								<p class="preview-subject ellipsis mb-1 text-small">Logout</p>
                  								</div>
                							</a>
									</ul>
								</div>
							</div>
						</div>
					<ul class="nav">
						<li class="nav-item active">
						<a href="{{url('admin_dashboard')}}">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="{{url('admin_dashboard')}}">
								<i class="la la-table"></i>
								<p>Manage Booking</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="{{url('admincar')}}">
								<i class="la la-keyboard-o"></i>
								<p>Manage Car</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="{{url('adminuser')}}">
								<i class="la la-th"></i>
								<p>Manage User</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="{{url('admin_dashboard')}}">
								<i class="la la-bell"></i>
								<p>User Feedback</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="{{url('admin_dashboard')}}">
								<i class="la la-font"></i>
								<p>All Reports</p>
							</a>
						</li>
					</ul>
				</div>
			</div>