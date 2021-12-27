<?php include('header.php') ?>

<style>
    .theme-color{
        color:#ee156c;
    }
    .font-size-16{
        font-size: 16px;
    }
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


<div class="col-md-9 col-8 content2">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="content-title">
                                <span class="theme-color">
                                Order #0002
                                </span>
                            <span class="float-right">
                                2020-11-17 16:36:55
                            </span>
                            </h3>

                            <hr>
                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="content-section">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 ">
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Name
                                            </span>
                                            
                                            <span class="float-right">kabir khan</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Email
                                            </span>
                                            <span class="float-right">kabir@gmail.com</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Phone
                                            </span>
                                            <span class="float-right">03121231211</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Status
                                            </span>
                                            <span class="float-right">In-Process</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-6 col-xs-12 ">
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Coupon Discount
                                            </span>
                                            <span class="float-right">0 OFF</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Shipping Amount
                                            </span>
                                            <span class="float-right">PKR 150</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Product Bill
                                            </span>
                                            <span class="float-right">PKR 4000</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Total Bill
                                            </span>
                                                                                        <span class="float-right">PKR 4150</span>
                                        </h4>
                                        
                                    </div>
                                    <div class="col-md-12 ">
                                        <hr>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Shipping Address
                                            </span>
                                            <span class="float-right">North</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            City
                                            </span>
                                            <span class="float-right">Karachi</span>
                                        </h4>
                                        <h4 class="my-2 font-size-16">
                                            <span class="theme-color">
                                            Payment Method
                                            </span>
                                            <span class="float-right">Cash on Delivery</span>
                                        </h4>
                                        
                                    </div>
                                    <div class="col-md-12 table-responsive">
                                                                                <hr>
                                        <h3>Products</h3>
                                        <hr>
                                        <table id="ordertable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Variation</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img  style="width:40px;" src="https://www.madstitched.com/public/storage/images/product/02b_1638802800.jpg" alt=""></td>
                                                    <td>test</td>
                                                    <td>4444</td>
                                                    <td>2222</td>
                                                    <td>33</td>
                                                    <td>2250</td>
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
     </div>
 </div>
</section>
<?php include('footer.php') ?>