<?php include('header.php') ?>


<style>
    .cart_page .cart_page_detail #table_area thead tr{
        border-bottom:1px solid #ddd;
    }
    .cart_page .cart_page_detail .order_summary,
    .cart_page .cart_page_detail #table_area {
        width:100%;
        margin:20px 0px;
    }
    .cart_page .cart_page_detail #table_area td i{
        color:#232323;
    }
    .cart_page .cart_page_detail #table_area td img{
        width:70px;
    }
    .cart_page .cart_page_detail #table_area td input{
        width: 60px;
        height: 40px;
        text-align: center;
    }
    .cart_page .cart_page_detail #table_area td,
    .cart_page .cart_page_detail #table_area th{
        font-size:13px;
        font-weight:normal;
        padding: 10px;
    }
    .cart_page .cart_page_detail .order_summary p span{
        font-size:14px;
    }
    .cart_page .cart_page_detail .order_summary p{
        font-size:12px;
        font-weight:500;
    }
    .cart_page .cart_page_detail .order_summary .main_heading{
        font-size:13px;
    }
    
    .cart_page .cart_page_detail .order_summary input,
    .cart_page .cart_page_detail .order_summary select{
        height: 40px;
        margin-bottom:10px;
        width: 90%;
        font-size: 13px;
        border: 1px solid #ddd;
        color: #232323;
        outline:none;
        padding:0px 10px;
    }
    .width-90{
        width:90%;
    }
    .cart_page .cart_page_detail .order_summary .btn-primary{
        background-color: #c6c3c2;
        border-color: #c6c3c2;
        margin-left: 10px;
        border-radius: 5px;
        color: white;
        font-weight: 500;
        padding: 0 1.7em;
        font-size: 14px;
    }
    .cart_page .cart_page_detail .order_summary .form-control{
        box-shadow: none;
        color: #545454;
        padding: 20px 11px;
        margin:0px;
        font-size: 14px;
    }
    @media (max-width:550px) {
        .overflow-auto-mobile{
            overflow:auto;
        }
        .cart_page .cart_page_detail #table_area td img{
            max-width:initial;
        }
    }
</style>
<section class="cart_page body_padding mt-4">
<div class="bread_crumb">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="listing.php">FORMAL</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shisham (FR0434)</li>
  </ol>
</nav>
    </div>

    <div class="cart_page_detail">
        <h4 class="font-weight-bold">MY CART</h4>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 overflow-auto-mobile">
                <table id="table_area">
                    <thead>
                        <tr>
                            <th colspan="2">PRODUCTS</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th colspan="2">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/products/FR044902_2_160x.jpg?v=1640073589" alt=""></td>
                            <td>Screen Phool (FR0449) <br> <small>(XS)</small></td>
                            <td>Rs.7,750.00</td>
                            <td><input type="number" value="1" name="" id=""></td>
                            <td>Rs.7,750.00<td>
                            <td><a href=""><i class="fas fa-times"></i></a><td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="order_summary">
                    <p class="main_heading">ORDER SUMMARY</p>
                    <hr>
                    <p class="main_heading">Apply Discount Coupon</p>
                    <form>
                        <div class="form-group d-flex">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Gift card or discount code" aria-describedby="emailHelp">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>
          <hr>
          <p>Delivery type <span class="float-right">Cash On Delivery</span></p>
          <hr>

          <p>Sub Total: <span class="float-right">Rs.7,750.00</span></p>
                         <!--  <p class="main_heading">GET SHIPPING ESTIMATES</p>
                    <hr>
                    <div class="text-center">
                    <select name="" id="">
                        <option value="" selected>Pakistan</option>
                        <option value="">Pakistan</option>
                        <option value="">Pakistan</option>
                        <option value="">Pakistan</option>
                    </select>
                    <br>
                    <input type="text" placeholder="Enter Zip Code" name="" id="">
                    <button class="btn btn-secondary py-2">CALCULATE SHIPPING</button>
                    </div> -->
                    <hr>
                    <p>TOTAL: <span class="float-right">RS.7,750.00</span></p>
                   <div class="text-center">
                   <button class="btn btn-outline-secondary py-2 text-uppercase my-2 width-90">Proceed to Checkout</button>
                    <button class="btn btn-success py-2 text-uppercase width-90">CONTINUE SHOPPING</button>
                   </div>
                   <hr>
                </div>
            </div>
        </div>
    </div>

  
</section>


<?php include('recentlyview.php') ?>
<?php include('footer.php') ?>
