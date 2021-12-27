<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rang Ja Clone</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css'>
</head>

<style>
  .customer_dropdown .dropdown-item.active,.customer_dropdown .dropdown-item:active{
    color: #fff !important;
    background: #ee156c;
  }
  .user_name{
    font-size: 14px;
    background: #ee156c;
    text-align: center;
    border-bottom: 1px solid #ddd;
    margin: 0px;
    color: #fff;
    padding: 5px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 160px;
    overflow: hidden;
  }
  @media (max-width:550px) {
    .customer_dropdown .dropdown-menu{
      left:-100px;
    }
  }
</style>
<body>
    <section class="header_main_content">
        <div class="header_content">
            <div class="container mb-3">
            <div class="row">
            <div class="col-lg-4 d-lg-block d-md-none">
            </div>
            <div class="col-lg-4 col-md-6 text-center main_logo">
              <a href="index.php">
            <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/files/logo_696bbded-cef8-46ce-8c38-f592863d6055.png?v=1630570063" alt="">
              </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="d-flex">
                <form action="" method="" class="search-bar d-flex" role="search">
                    <button type="button" class="btn icon-search">
                        <i class="far fa-search"></i>
                    </button>
                     <div class="input_area">
                        <input type="search" placeholder="Search" class="header-search__input" aria-label="Search Site" autocomplete="off">
                     </div>
                  
                </form>
                <div class="customer-links my-auto d-flex">                                     
                    <a class="acc-links acc-sign-in mx-2" href="javascript:void(0)">
                        Sign In
                    </a>

                    
                   
                    <div class="dropdown customer_dropdown my-auto mx-3">
                      <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-user"></i>
                      </a>

                      <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuLink">
                        <p class="px-2 user_name" title="Muhammad Eiman Iqrar">Qadir</p>
                        <a class="dropdown-item px-2" href="dashboard.php">Dashboard</a>
                        <a class="dropdown-item px-2" href="profile.php">Profile</a>
                        <a class="dropdown-item px-2" href="order.php">Order</a>
                        <a class="dropdown-item px-2" href="index.php">Log Out</a>
                      </div>
                    </div>

                    <!-- <a class="acc-links wishlist mx-2" href="javascript:void(0)">
                        <i class="far fa-heart"></i>
                    </a>                             -->
                    <a class="acc-links cart mx-2" href="javascript:void(0)">
                        <i class="far fa-shopping-bag"></i>
                        <span class="cart_items">0</span>
                    </a>                            
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="navigation_menu">
        <button class="navbar-toggler" type="button">
            <i class="far fa-bars"></i>
        </button>
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-light">
          
            <div class="navbar_child navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./listing.php">NEW ARRIVALS</a>
                </li>
                <li class="nav-item dropdown nav-dropdown-toggle">
                  <a class="nav-link" onclick="location.href = 'orderdetail.php';">
                    Casuals 
                  </a>
                  <span class="chevron_icon"><i class="far fa-chevron-right"></i></span>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">shirts</a>
                      <a class="dropdown-item" href="#">2 Piece</a>
                      <a class="dropdown-item" href="#">3 Piece</a>
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Prints <span class="chevron_icon"><i class="far fa-chevron-right"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">shirts</a>
                      <a class="dropdown-item" href="#">2 Piece</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Formals <span class="chevron_icon"><i class="far fa-chevron-right"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">shirts</a>
                        <a class="dropdown-item" href="#">2 Piece</a>
                        <a class="dropdown-item" href="#">3 Piece</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Solid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">West</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Bottoms <span class="chevron_icon"><i class="far fa-chevron-right"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">shalwar</a>
                        <a class="dropdown-item" href="#">gharara - sharara</a>
                        <a class="dropdown-item" href="#">trousers</a>
                        <a class="dropdown-item" href="#">shirts</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Accessories <span class="chevron_icon"><i class="far fa-chevron-right"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">khussas</a>
                        <a class="dropdown-item" href="#">shrugs & jackets</a>
                        <a class="dropdown-item" href="#">stoles & dupattas</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Catalog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                  </li>
              </ul>
            </div>
          </nav>
    </div>
       

        <div class="wrapper-overlay"></div>
     <div class="sidebar_offset">
        <div class="signin_sidebar">
            <div class="close_icon">
                <i class="far fa-times"></i> CLOSE
            </div>
            <div class="main_content">
              <h6 class="my-3 signin_title">Customer Login :</h6>
              <hr>
              <div class="customer-content">
    
                <div class="customer-inner login-customer">
                  <form accept-charset="UTF-8" action="/account/login" method="post">
                    <input name="form_type" type="hidden" value="customer_login">
                    <input name="utf8" type="hidden" value="✓">
            
                    <div class="ct-login">
                      <div class="form-group">
                        <label for="customer_email">
                          <span>
                            Email Address
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="customer_email" type="email" value="" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <label for="customer_password">
                          <span>
                            Password
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="customer_password" type="password" value="" placeholder="Password">
                        <span class="toggle_password"><i class="far fa-eye"></i></span>
                      </div>
            
                      <div class="action-btn">
                        <input type="submit" class="btn btn-login" value="Login">
                        <a class="text-hover forgot-password forget_pass_btn">
                          Forgot your password?
                        </a>
                      </div>
                    </div>
            
                    <div class="ct-register">
                      <div class="btn btn-register create_an_account">
                        Create An Account
                      </div>
                    </div>
                  </form>
                </div>

                <div class="forgot_password">
                <div class="customer-inner">
                  <form accept-charset="UTF-8" action="/account/login" method="post">
                    <input name="form_type" type="hidden" value="customer_login">
                    <input name="utf8" type="hidden" value="✓">
            
                    <div class="ct-login">
                      <div class="form-group">
                        <label for="forgot_email">
                          <span>
                            Email Address
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="forgot_email" type="email" value="" placeholder="Email Address">
                      </div>
                      <div class="action-btn">
                        <input type="submit" class="btn btn-login" value="Recover Password">
                        <div class="text-hover forgot-password">
                          Already Have An Account ?
                        </div>
                      </div>
                      <div class="ct-register">
                      <div class="btn btn-register forgot_password_login">
                        Login
                      </div>
                    </div>
                    </div>
                  </form>
                </div>
                </div>

                <div class="create_account">
                <div class="customer-inner">
                  <form accept-charset="UTF-8" action="/account/login" method="post">
                    <input name="form_type" type="hidden" value="customer_login">
                    <input name="utf8" type="hidden" value="✓">
            
                    <div class="ct-login">
                    <div class="form-group">
                        <label for="first_name">
                          <span>
                           First Name
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="first_name" type="text" value="" placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <label for="last_name">
                          <span>
                          Last Name
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="last_name" type="text" value="" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <label for="customer_email_register">
                          <span>
                            Email Address
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="customer_email_register" type="email" value="" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <label for="customer_password_register">
                          <span>
                            Password
                          </span>
                          <em class="text-danger">*</em>
                        </label>
                        <input class="form-control" id="customer_password_register" type="password" value="" placeholder="Password">
                        <span class="toggle_password_register"><i class="far fa-eye"></i></span>
                      </div>
                      <div class="action-btn">
                        <input type="submit" class="btn btn-login" value="Create An Account">
                        <div class="text-hover forgot-password">
                          Already Have An Account ?
                        </div>
                      </div>
                      <div class="ct-register">
                      <div class="btn btn-register create_login">
                        Login
                      </div>
                    </div>
                    </div>
                  </form>
                </div>
                </div>
                
              </div>
            </div>
        </div>
        <div class="cart_sidebar">
                <div class="close_icon">
                    <i class="far fa-times"></i> CLOSE
                </div>
                <div class="main_content">
                  <h6 class="my-3 signin_title">YOUR BAG</h6>
                  <hr>
                  <div class="customer-content">
                    <div class="customer-inner login-customer">
                        <div class="ct-login">
                        <div class="item row">
                          <div class="col-md-4 px-0">
                   <div class="slider_image"> <img src="https://cdn.shopify.com/s/files/1/0517/8218/9242/files/Prints-_360X470_711b73ea-7484-467c-9b23-8177ba018fcb_1024x1024_crop_center.jpg?v=1636008002" alt=""></div></div>
                   <div class="col-md-8 m-auto">
                    <div class="text-left">
                        <p class="card-text mb-1">Rang Nagar (FR0432)</p>
                        <h5 class="card-title mt-0">Rs.9,500.00</h5>
                        <div class="counter">
                                                            <span class="down" onclick="decreaseCount(event, this)">-</span>
                                                            <input type="text" value="1" disabled="">
                                                            <span class="up" onclick="increaseCount(event, this)">+</span>
                                                        </div>
                        <div class="btn btn-secondary">
                        Buy Now
                      </div>
                    </div>
                    </div>
                </div>
                            <div class="text-hover forgot-password text-center my-3">
                                Your cart is currently empty.
                            </div>
                          <a href="" class="btn btn-login">
                              Continue Shopping
                          </a>
                        </div>
                    </div>
                    
                  </div>
                </div>
        </div>
     </div>
    </div>