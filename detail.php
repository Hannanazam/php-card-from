<?php include('header.php') ?>

<section class="product_detail body_padding mt-4">
<div class="bread_crumb">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="listing.php">FORMAL</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shisham (FR0434)</li>
  </ol>
</nav>
    </div>
    <div class="product_detail_section">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                <div class="d-flex justify-content-between">
                    <div class="main_img">
                    <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/products/DSC09399_80d9b754-31b1-404a-ad0f-7e1e86877dc6.jpg?v=1634550132" alt="">
                    </div>
                    <div class="slider_img">
                        <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/products/DSC09399_80d9b754-31b1-404a-ad0f-7e1e86877dc6.jpg?v=1634550132" alt="">
                        <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/products/DSC09403_143a066c-f277-4a3b-a66e-b2ede132fd1d.jpg?v=1634550132" alt="">
                        <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/products/DSC09419_a0b9876e-724f-46b1-8261-a5af37f76359.jpg?v=1634550132" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pl-md-4 margin-top-mobile-150">
                <div class="product_description">
            <h4 class="product-title">
                <span>Shisham (FR0434)</span>
            </h4>
            <div class="sku-product description_detail">
                <p>Product Code : 
                <span class="ml-4">FR043401</span>
                </p>
            </div>
            <h4 class="product-title mt-4">
                <span>Rs.7,250.00</span>
            </h4>
            <div class="description_detail">
                <p>Description : 
                <span>Full Sleeves Long Frock</span>
                </p>
            </div>
            <div class="description_detail">
                <p>Fabric : 
                <span>Lawn Karandi</span>
                </p>
            </div>
            <div class="description_detail">
                <p>Color : 
                <span>Yellow</span>
                </p>
            </div>
            <div class="description_detail">
                <p>PCS : 
                <span>1 PC</span>
                </p>
            </div>
            <div class="description_detail mt-3">
                <p>Size & Fit : <br> 
                <span>-Model Height Is 5'6.</span> <br>
                <span>-Model Is Wearing <strong>Small</strong> Size</span>
                </p>
            </div>
            <div class="description_detail mt-3">
                <p>SIZE : <span class="size_output text-uppercase">XS</span></p>
                <div class="box d-flex">
                <div class="sizes_label">
                        <input type="radio" name="radio"  class="variation_lg" checked value="xs" id="xs">
                        <label for="xs">XS</label>
                        <input type="radio" name="radio" class="variation_lg" value="l" id="l">
                        <label for="l">L</label>
                        <input type="radio" name="radio"  class="variation_lg" value="s" id="s">
                        <label for="s">S</label>
                </div>
                </div>
            </div>

            <div class="description_detail mt-3">
                <p>Quantity : </p>
               
            <div class="counter">
                <span class="down" onclick="decreaseCount(event, this)">-</span>
                <input type="text" value="1" disabled="">
                <span class="up" onclick="increaseCount(event, this)">+</span>
            </div>
            </div>

            <div class="button_group mt-4">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 pl-lg-0">
                       <a href="checkout.php"> <button class="btn btn-outline-secondary w-100 py-2 text-uppercase font-weight-bold">Add to cart</button></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pl-lg-0">
                    <button class="btn btn-outline-danger w-100 py-2 text-uppercase font-weight-bold wishlist_btn_sm">buy it now</button>
                        <!-- <button class="btn btn-secondary w-100 py-2 text-uppercase wishlist_btn_sm font-weight-bold">Add to wishlist</button> -->
                    </div>
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 pl-lg-0">
                        <button class="btn btn-outline-danger w-100 py-2 my-3 text-uppercase font-weight-bold">buy it now</button>
                    </div> -->
                </div>
            </div>
            <div class="accordian_sec">
                    <div class="accordian px-3 mt-5">
                    <h4 class="accordian-title my-0" data-id="description">
                        <span>DESCRIPTION</span>
                        <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                    </h4>
                    <p class="accordian-text" id="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, rerum commodi voluptas corrupti est explicabo aliquam quae in ducimus esse, deleniti beatae vel adipisci nam ipsam dolorem officia autem omnis.
                    </p>
                    <hr  class="my-2">
                    </div>
                    <div class="accordian px-3">
                    <h4 class="accordian-title my-0" data-id="sizechart">
                        <span>SIZE CHART</span>
                        <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                    </h4>
                    <p class="accordian-text" id="sizechart">
                        <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/files/sizechart1_1_600x600.png?v=1608105271" />
                        </p>
                    <hr  class="my-2">
                    </div>
                    <div class="accordian px-3">
                    <h4 class="accordian-title my-0" data-id="shipping">
                        <span>SHIPPING & HANDLING</span>
                        <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                    </h4>
                    <p class="accordian-text" id="shipping">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, rerum commodi voluptas corrupti est explicabo aliquam quae in ducimus esse, deleniti beatae vel adipisci nam ipsam dolorem officia autem omnis.
                    </p>
                    <hr  class="my-2">
                    </div>
            </div>


            </div>
            </div>
        </div>
    </div>
</section>


<?php include('recentlyview.php') ?>
<?php include('footer.php') ?>
