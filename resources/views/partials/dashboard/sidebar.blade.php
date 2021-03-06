

      <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
        
                <div class="sidebar-inner px-4 pt-3">
                  <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                    <div class="d-flex align-items-center">
                      <div class="user-avatar lg-avatar mr-4">
                        <img src="dashboard/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                      </div>
                      <div class="d-block">
                        <h2 class="h6">Hi, {{ Auth::user()->name }}</h2>
                        <a href="dashboard/pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                      </div>
                    </div>
                    <div class="collapse-close d-md-none">
                        <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                            aria-label="Toggle navigation"></a>
                    </div>
                  </div>
                  <ul class="nav flex-column">
                    <li class="nav-item  active ">
                      <a href="dashboard/pages/dashboard/dashboard.html" class="nav-link">
                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                        <span>Overview</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="dashboard/pages/transactions.html" class="nav-link">
                          <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                          <span>Transactions</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="dashboard/pages/settings.html" class="nav-link">
                          <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                          <span>Settings</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app">
                        <span>
                          <span class="sidebar-icon"><span class="fas fa-table"></span></span> 
                          Tables
                        </span>
                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
                      </span>
                      <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                          <ul class="flex-column nav">
                              <li class="nav-item "><a class="nav-link" href="dashboard/pages/tables/bootstrap-tables.html"><span>Bootstrap Tables</span></a></li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages">
                        <span>
                          <span class="sidebar-icon"><span class="far fa-file-alt"></span></span> 
                          Page examples
                        </span>
                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
                      </span>

                      <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                          <ul class="flex-column nav">
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/sign-in.html"><span>Sign In</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/sign-up.html"><span>Sign Up</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/forgot-password.html"><span>Forgot password</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/reset-password.html"><span>Reset password</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/lock.html"><span>Lock</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/404.html"><span>404 Not Found</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="dashboard/pages/examples/500.html"><span>500 Server Error</span></a></li>
                          </ul>
                      </div>
                    </li>
                    
                    
                    <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

                  </ul>
                </div>
            </nav>

