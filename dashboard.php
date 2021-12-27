<?php include('header.php') ?>

<section class="dashboard_setup">
<div class="container container-md-fluid">
     <div class="row">
         <div class="col-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="sidebar">
    <ul class="links">
       <li class="link active"><a href="dashboard.php"><i class="fas fa-tachometer-alt-fast"></i><span>Dashboard</span></a></li> 
       <li class="link"><a href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li> 
       <li class="link"><a href="order.php"><i class="fas fa-shopping-cart"></i><span>Order</span></a></li> 
       <li class="link"><a href="index.php"><i class="fas fa-power-off"></i><span>Logout</span></a></li> 
    </ul>
</div>                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 content">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h3 class="content-title">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="content-section">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-0 dashboard_card_main">
                                        <div class="dashboard-card">
                                            <div class="card-icon">
                                                <i class="fas fa-clock"></i>
                                                <div class="card-content">
                                                    <div class="card-count">0</div>
                                                    <div class="card-title">Pending Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-0 dashboard_card_main">
                                        <div class="dashboard-card">
                                            <div class="card-icon">
                                                <i class="fas fa-tshirt"></i>
                                                <div class="card-content">
                                                    <div class="card-count">0</div>
                                                    <div class="card-title">In-Process Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-0 dashboard_card_main">
                                        <div class="dashboard-card">
                                            <div class="card-icon">
                                                <i class="fas fa-check"></i>
                                                <div class="card-content">
                                                    <div class="card-count">0</div>
                                                    <div class="card-title">Completed Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-0 dashboard_card_main">
                                        <div class="dashboard-card">
                                            <div class="card-icon">
                                                <i class="fas fa-truck"></i>
                                                <div class="card-content">
                                                    <div class="card-count">0</div>
                                                    <div class="card-title">Delivered Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
 </div>
</section>


<?php include('footer.php') ?>
