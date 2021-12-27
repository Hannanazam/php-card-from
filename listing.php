
<?php 
    @require('./database.php');


    $sql = "SELECT * FROM cards";
    $result = $conn->query($sql);

?>

<?php include('header.php') ?> <section class="listing_page body_padding">
  <div class="main_heading">
    <h3 class="box-title text-center my-4">
      <span class="title">FORMALS</span>
    </h3>
  </div>
  <div class="bread_crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">FORMAL</li>
      </ol>
    </nav>
  </div>
  <div class="sorting_area">
    <div class="d-flex justify-content-between">
      <div class="left_column d-flex">
        <p>View as</p>
        <div class="view-mode">
          <span class="icon-mode icon-mode-grid grid-2" data-col="2"></span>
          <span class="icon-mode icon-mode-grid grid-3" data-col="3"></span>
          <span class="icon-mode icon-mode-grid grid-4" data-col="4"></span>
          <span class="icon-mode icon-mode-grid grid-5" data-col="5"></span>
        </div>
      </div>
      <div class="right_column d-flex">
        <div class="items_per_page d-flex">
          <p>Items Per Page</p>
          <select name="" id="item_per_page_select">
            <option selected disabled>All</option>
            <option class="selected_items" value="2">2</option>
            <option>3</option>
            <option>12</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
          </select>
        </div>
        <div class="sort_per_page d-flex">
          <p>Sort by</p>
          <select name="" id="">
            <option selected>Featured</option>
            <option>Price Low - High</option>
            <option>Price High - Low</option>
            <option>Best Selling</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="products_cards">
    <div class="physicianList">
      <input type='hidden' id='current_page' />
      <input type='hidden' id='show_per_page' />
      <ul id="pagingBox" class="row">
<?php 
      while ($res = mysqli_fetch_array($result)){
      ?>
        <li class="col-lg-3 col-md-4 col-sm-12 display_set">
          <a href="detail.php">
            <div class="item">
              <div class="slider_image">
                <img class="card_img_top" src="images/<?php echo $res['image']; ?>" data-org="images/<?php echo $res['image2']; ?>" data-img="images/<?php echo $res['image']; ?>" alt="">
              </div>
              <div class="img_inner_content">
                <!-- <div class="wishlist-icon"><p><a href=""><i class="fas fa-heart"></i></a></p></div> -->
                <div class="sizing-icon d-flex justify-content-center">
                  <p>
                    <a href="">XS</a>
                  </p>
                  <p>
                    <a href="">M</a>
                  </p>
                </div>
                <div class="quick-buy">
                  <p>
                    <a href="#0" data-toggle="modal" data-target="#abc<?php echo $res['id']; ?>">Quick Buy</a>
                  </p>
                </div>
              </div>
              <div class="card-body text-center">
                <p class="card-text"><?php echo $res['name']; ?></p>
                <h5 class="card-title">Rs.<?php echo $res['price']; ?></h5>
              </div>
            </div>
          </a>

          <!-- Modal -->
          <div class="modal fade" id="abc<?php echo $res['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div id="quickbuyarea" class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group set_on_mble_modal">
                        <img src="images/<?php echo $res['image']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pl-md-4 modal_content">
                      <div class="product_description">
                        <h4 class="product-title">
                          <span><?php echo $res['name']; ?></span>
                        </h4>
                        <div class="description_detail">
                          <p>Price : <?php echo $res['price']; ?></span>
                          </p>
                        </div>
                        <div class="description_detail mt-3">
                          <p>SIZE : <span class="size_output text-uppercase">XS</span>
                          </p>
                          <div class="box d-flex">
                            <div class="sizes_label">
                              <input type="radio" name="radio" class="variation_lg" checked value="xs" id="xs<?php echo $res['id']; ?>">
                              <label for="xs<?php echo $res['id']; ?>">XS</label>
                              <input type="radio" name="radio" class="variation_lg" value="l" id="l<?php echo $res['id']; ?>">
                              <label for="l<?php echo $res['id']; ?>">L</label>
                              <input type="radio" name="radio" class="variation_lg" value="s" id="s<?php echo $res['id']; ?>">
                              <label for="s<?php echo $res['id']; ?>">S</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <form action="" class="mt-3">
                        <div class="form-group">
                          <input type="text" name="name" required="" id="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="03001234567" id="phone" maxlength="11" minlength="11" name="phone" required="" class="form-control">
                        </div>
                        <div class="form-group">
                          <select class="form-control selectbox" required="" name="">
                            <option Selected readonly>City</option>
                            <option>Karachi</option>
                            <option>Islamabad</option>
                            <option>KPK</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <textarea name="address" id="address" class="form-control " placeholder="Address" required="" cols="30" rows="2" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" name="coupon_code" placeholder="Coupon Code" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                          <button type="button" class="py-2 w-100 btn btn-secondary" id="quickbtnorder">Place Order</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </li>
        <?php 
     }
      ?>
      </ul>
    </div>
  </div>
  <hr>
  <div class="pagination_section d-flex justify-content-end">
    <!-- <div class="para">
      <p>Showing: 1 - 12 of 85</p>
    </div> -->
    <nav aria-label="Page navigation example">
      <!-- <ul class="pagination"><li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="far fa-chevron-left"></i></span></a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="far fa-chevron-right"></i></span></a></li></ul> -->
      <div id='page_navigation'></div>
    </nav>
  </div>
</section> <?php include('recentlyview.php') ?>
 <?php include('footer.php') ?> 
<script src="./asset/js/pagination.js"></script>


