@extends('layouts.dashboard')

@section('content')

<div class="row">
                            <div class="col-12 col-xl-8 mb-4">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="card border-light shadow-sm">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                    <h2 class="h5">Page visits</h2>
                                                    </div>
                                                    <div class="col text-right">
                                                        <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Page name</th>
                                                        <th scope="col">Page Views</th>
                                                        <th scope="col">Page Value</th>
                                                        <th scope="col">Bounce rate</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            /demo/admin/index.html
                                                        </th>
                                                        <td>
                                                            3,225
                                                        </td>
                                                        <td>
                                                            $20
                                                        </td>
                                                        <td>
                                                            <span class="fas fa-arrow-up text-danger mr-3"></span> 42,55%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            /demo/admin/forms.html
                                                        </th>
                                                        <td>
                                                            2,987
                                                        </td>
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                            <span class="fas fa-arrow-down text-success mr-3"></span> 43,52%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            /demo/admin/util.html
                                                        </th>
                                                        <td>
                                                            2,844
                                                        </td>
                                                        <td>
                                                        294
                                                        </td>
                                                        <td>
                                                            <span class="fas fa-arrow-down text-success mr-3"></span> 32,35%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            /demo/admin/validation.html
                                                        </th>
                                                        <td>
                                                            2,050
                                                        </td>
                                                        <td>
                                                            $147
                                                        </td>
                                                        <td>
                                                            <span class="fas fa-arrow-up text-danger mr-3"></span> 50,87%
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            /demo/admin/modals.html
                                                        </th>
                                                        <td>
                                                            1,483
                                                        </td>
                                                        <td>
                                                            $19
                                                        </td>
                                                        <td>
                                                            <span class="fas fa-arrow-down text-success mr-3"></span> 32,24%
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-4">
                                        <div class="card border-light shadow-sm">
                                            <div class="card-header border-bottom border-light d-flex justify-content-between">
                                               <h2 class="h5 mb-0">Team members</h2>
                                                <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush list my--3">
                                                    <li class="list-group-item px-0">
                                                        <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <!-- Avatar -->
                                                            <a href="#" class="user-avatar">
                                                                <img class="rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-auto ml--2">
                                                            <h4 class="h6 mb-0">
                                                                <a href="#">Christopher Wood</a>
                                                            </h4>
                                                            <span class="text-success">●</span>
                                                            <small>Online</small>
                                                        </div>
                                                        <div class="col text-right">
                                                            <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check mr-1"></i> Invite</a>
                                                        </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <a href="#" class="user-avatar">
                                                                    <img class="rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="col-auto ml--2">
                                                                <h4 class="h6 mb-0">
                                                                    <a href="#">Jose Leos</a>
                                                                </h4>
                                                                <span class="text-warning">●</span>
                                                                <small>In a meeting</small>
                                                            </div>
                                                            <div class="col text-right">
                                                                <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment mr-1"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <a href="#" class="user-avatar">
                                                                    <img class="rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="col-auto ml--2">
                                                                <h4 class="h6 mb-0">
                                                                    <a href="#">Bonnie Green</a>
                                                                </h4>
                                                                <span class="text-danger">●</span>
                                                                <small>Offline</small>
                                                            </div>
                                                            <div class="col text-right">
                                                                <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check mr-1"></i> Invite</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <a href="#" class="user-avatar">
                                                                    <img class="rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="col-auto ml--2">
                                                            <h4 class="h6 mb-0">
                                                                    <a href="#">Neil Sims</a>
                                                            </h4>
                                                            <span class="text-success">●</span>
                                                            <small>Online</small>
                                                            </div>
                                                            <div class="col text-right">
                                                                <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment mr-1"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-4">
                                        <div class="card border-light shadow-sm">
                                            <div class="card-header border-bottom border-light">
                                                <h2 class="h5 mb-0">Progress track</h2>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto">
                                                        <span class="icon icon-md text-purple"><span class="fab fa-bootstrap"></span></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="h6 mb-0">Rocket - SaaS Template</div>
                                                                <div class="small font-weight-bold text-dark"><span>34 %</span></div>
                                                            </div>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto">
                                                        <span class="icon icon-md text-danger"><span class="fab fa-angular"></span></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="h6 mb-0">Pixel - Design System</div>
                                                                <div class="small font-weight-bold text-dark"><span>60 %</span></div>
                                                            </div>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto">
                                                        <span class="icon icon-md text-success"><span class="fab fa-vuejs"></span></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="h6 mb-0">Spaces - Listings Template</div>
                                                                <div class="small font-weight-bold text-dark"><span>45 %</span></div>
                                                            </div>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-tertiary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto">
                                                        <span class="icon icon-md text-info"><span class="fab fa-react"></span></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="h6 mb-0">Stellar - Dashboard</div>
                                                                <div class="small font-weight-bold text-dark"><span>35 %</span></div>
                                                            </div>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span class="icon icon-md text-purple"><span class="fab fa-bootstrap"></span></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress-wrapper">
                                                            <div class="progress-info">
                                                                <div class="h6 mb-0">Volt - Dashboard</div>
                                                                <div class="small font-weight-bold text-dark"><span>34 %</span></div>
                                                            </div>
                                                            <div class="progress mb-0">
                                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-4">
                                <div class="col-12 mb-4">
                                    <div class="card border-light shadow-sm">
                                        <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                            <div class="d-block">
                                                <div class="h6 font-weight-normal text-gray mb-2">Total orders</div>
                                                <h2 class="h3">452</h2>
                                                <div class="small mt-2">                               
                                                    <span class="fas fa-angle-up text-success"></span>                                   
                                                    <span class="text-success font-weight-bold">18.2%</span>
                                                </div>
                                            </div>
                                            <div class="d-block ml-auto">
                                                <div class="d-flex align-items-center text-right mb-2">
                                                    <span class="shape-xs rounded-circle bg-quaternary mr-2"></span>
                                                    <span class="font-weight-normal small">July</span>
                                                </div>
                                                <div class="d-flex align-items-center text-right">
                                                    <span class="shape-xs rounded-circle bg-secondary mr-2"></span>
                                                    <span class="font-weight-normal small">August</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-2">
                                            <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mb-4">
                                    <div class="card border-light shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom border-light pb-3">
                                                <div>
                                                    <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-globe-europe"></span></span>Global Rank</h6>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-primary font-weight-bold">#755<span class="fas fa-chart-line ml-2"></span></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                                                <div>
                                                    <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-flag-usa"></span></span>Country Rank</h6>
                                                    <div class="small card-stats">United States<span class="icon icon-xs text-success ml-2"><span class="fas fa-angle-up"></span></span></div>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-primary font-weight-bold">#32<span class="fas fa-chart-line ml-2"></span></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between pt-3">
                                                <div>
                                                    <h6 class="mb-0"><span class="icon icon-xs mr-3"><span class="fas fa-folder-open"></span></span>Category Rank</h6>
                                                    <a href="#" class="small card-stats">Travel > Accomodation</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-primary font-weight-bold">#16<span class="fas fa-chart-line ml-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mb-4">
                                    <div class="card border-light shadow-sm">
                                        <div class="card-body">
                                            <h2 class="h5">Acquisition</h2>
                                            <p>Tells you where your visitors originated from, such as search engines, social networks or website referrals.</p>
                                            <div class="d-block">
                                                <div class="d-flex align-items-center pt-3 mr-5">
                                                    <div class="icon icon-shape icon-sm icon-shape-danger rounded mr-3"><span class="fas fa-chart-bar"></span></div>
                                                    <div class="d-block">
                                                        <label class="mb-0">Bounce Rate</label>
                                                        <h4 class="mb-0">33.50%</h4>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center pt-3">
                                                    <div class="icon icon-shape icon-sm icon-shape-quaternary rounded mr-3"><span class="fas fa-chart-area"></span></div>
                                                    <div class="d-block">
                                                        <label class="mb-0">Sessions</label>
                                                        <h4 class="mb-0">9,567</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection