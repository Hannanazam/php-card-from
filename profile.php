<?php include('header.php') ?>

<section class="dashboard_setup profile">
<div class="container container-md-fluid">
     <div class="row">
         <div class="col-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="sidebar">
    <ul class="links">
       <li class="link"><a href="dashboard.php"><i class="fas fa-tachometer-alt-fast"></i><span>Dashboard</span></a></li> 
       <li class="link active"><a href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li> 
       <li class="link"><a href="order.php"><i class="fas fa-shopping-cart"></i><span>Order</span></a></li> 
       <li class="link"><a href="index.php"><i class="fas fa-power-off"></i><span>Logout</span></a></li> 
    </ul>
</div>                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 content2">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="content-title">Profile</h3>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="content-section">
                                <div class="row">
                                    <form action="" class="col-md-12 px-0">
                                        <input type="hidden" name="_token" value="pb3sC7mOxu0wZuipNsXi8wvADTZMczNngw7Et4NS">                                                                        
                                                                                <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="first_name" placeholder="Name" value="Muhammad Hannan" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" readonly="" placeholder="Email" value="hannanazam@gmail.com" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" placeholder="Password" value="12345678" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" name="phone" pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" placeholder="Phone" value="03111111111" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" name="address" placeholder="Address" value="h-77/5 nishta" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input type="text" name="country" placeholder="City" value="Pakistan" class="form-control" required="">
                                        </div>
                                        <div class="form-group text-right">
                                            <button class="btn btn-outline-secondary">Update Profile</button>
                                        </div>
                                    </form>
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
