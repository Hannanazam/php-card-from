<?php include('header.php') ?>
<style>
   #ordertable{
       margin-bottom:30px !important;
   }
   #ordertable tr:nth-child(even){
        background-color:#f3f3f3;
    }
</style>
<section class="dashboard_setup profile order">
<div class="container container-md-fluid">
     <div class="row">
         <div class="col-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="sidebar">
    <ul class="links">
       <li class="link"><a href="dashboard.php"><i class="fas fa-tachometer-alt-fast"></i><span>Dashboard</span></a></li> 
       <li class="link"><a href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li> 
       <li class="link active"><a href="order.php"><i class="fas fa-shopping-cart"></i><span>Order</span></a></li> 
       <li class="link"><a href="index.php"><i class="fas fa-power-off"></i><span>Logout</span></a></li> 
    </ul>
</div>                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 content2">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="content-title">Order</h3>
                            <br>
                        </div>
                    </div>
                            <div class="content-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="ordertable">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Order #</th>
                                                    <th>Order Amount</th>
                                                    <th>Total Bill</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr style="cursor:pointer;" onclick="location.href = 'orderdetail.php';">
                                               <td>Dec 22, 2021</td>
                                                <td>#0007</td>
                                                <td>Rs. 2000</td>
                                                <td>Rs. 2150</td>
                                                <td>In-Process</td>
                                               </tr>
                                              <tr style="cursor:pointer;" onclick="location.href = 'https://www.madstitched.com/customer/order/detail/2';">
                                               <td>Dec 22, 2021</td>
                                                <td>#0007</td>
                                                <td>Rs. 2000</td>
                                                <td>Rs. 2150</td>
                                                <td>In-Process</td>
                                               </tr>
                                            </tbody>
                                        </table>
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
