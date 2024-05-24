<!-- Start Header Area -->
<header class="header navbar-area">
  <!-- Start Topbar -->
  <div class="topbar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="top-left">
            <ul class="menu-top-link">
              <li>
                <div class="select-position">
                  <select id="select4">
                    <option value="0" selected>$ USD</option>
                    <option value="1">€ EURO</option>
                    <option value="2">$ CAD</option>
                    <option value="3">₹ INR</option>
                    <option value="4">¥ CNY</option>
                    <option value="5">৳ BDT</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="select-position">
                  <select id="select5">
                    <option value="0" selected>English</option>
                    <option value="1">Español</option>
                    <option value="2">Filipino</option>
                    <option value="3">Français</option>
                    <option value="4">العربية</option>
                    <option value="5">हिन्दी</option>
                    <option value="6">বাংলা</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="top-middle">
            <ul class="useful-links">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="top-end">
            <div class="user">
              <i class="lni lni-user"></i>
              Hello
            </div>
            <ul class="user-login">
              @guest
              <li>
                <a href="{{ url('/login') }}">Sign In</a>
              </li>
              <li>
                <a href="{{ url('/register') }}">Register</a>
              </li>
              @else
              <li>
                <a href="#">Logout</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Topbar -->

  <!-- Start Header Middle -->
  <div class="header-middle">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-3 col-7">
          <!-- Start Header Logo -->
          <a class="navbar-brand " href="{{ url('/') }}">
            <img src="{{ asset('/') }}images/logo/logo.svg" alt="Logo">
          </a>
          <!-- End Header Logo -->
        </div>
        <div class="col-lg-5 col-md-7 d-xs-none">
          <div class="main-menu-search">
            <form class="navbar-search search-style-5" action="{{ route('products') }}" method="GET">
              <div class="search-input">
                <input type="text" class="form-control" name="query" placeholder="Search">
              </div>
              <div class="search-btn">
                <button class="btn" type="submit"><i class="lni lni-search-alt"></i></button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4 col-md-2 col-5">
          <div class="middle-right-area">
            <div class="nav-hotline">
              <i class="lni lni-phone"></i>
              <h3>Hotline:
                <span>(+100) 123 456 7890</span>
              </h3>
            </div>
            <div class="navbar-cart">
              <div class="wishlist">
                <a href="javascript:void(0)">
                  <i class="lni lni-heart"></i>
                  <span class="total-items">0</span>
                </a>
              </div>
              <div class="cart-items">
                <a href="javascript:void(0)" class="main-btn">
                  <i class="lni lni-cart"></i>
                  <span class="total-items">2</span>
                </a>
                <!-- Shopping Item -->
                <div class="shopping-item">
                  <div class="dropdown-cart-header">
                    <span>2 Items</span>
                    <a href="{{ url('/cart') }}">View Cart</a>
                  </div>
                  <ul class="shopping-list">
                    <li>
                      <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                      <div class="cart-img-head">
                        <a class="cart-img" href="product-details.html"><img src="{{ asset('/') }}images/header/cart-items/item1.jpg" alt="#"></a>
                      </div>

                      <div class="content">
                        <h4><a href="product-details.html">
                            Apple Watch Series 6</a></h4>
                        <p class="quantity">1x - <span class="amount">$99.00</span></p>
                      </div>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                      <div class="cart-img-head">
                        <a class="cart-img" href="product-details.html"><img src="{{ asset('/') }}images/header/cart-items/item2.jpg" alt="#"></a>
                      </div>
                      <div class="content">
                        <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                        <p class="quantity">1x - <span class="amount">$35.00</span></p>
                      </div>
                    </li>
                  </ul>
                  <div class="bottom">
                    <div class="total">
                      <span>Total</span>
                      <span class="total-amount">$134.00</span>
                    </div>
                    <div class="button">
                      <a href="checkout.html" class="btn animate">Checkout</a>
                    </div>
                  </div>
                </div>
                <!--/ End Shopping Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Middle -->
  <!-- Start Header Bottom -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-6 col-12">
        <div class="nav-inner">
          <!-- Start Mega Category Menu -->
          <div class="mega-category-menu">
            <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
            <ul class="sub-category">
              @foreach ($categories as $category)
              <li><a href="{{ route('productsByCategory', ['categoryId' => $category->id]) }}">{{ $category->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
          <!-- End Mega Category Menu -->
          <!-- Start Navbar -->
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
                </li>
                <li class="nav-item">
                  <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                  <ul class="sub-menu collapse" id="submenu-1-2">
                    <li class="nav-item"><a href="about-us.html">About Us</a></li>
                    <li class="nav-item"><a href="faq.html">Faq</a></li>
                    <li class="nav-item"><a href="login.html">Login</a></li>
                    <li class="nav-item"><a href="register.html">Register</a></li>
                    <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                    <li class="nav-item"><a href="404.html">404 Error</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                  <ul class="sub-menu collapse" id="submenu-1-3">
                    <li class="nav-item"><a href="{{ url('/products') }}">Shop</a></li>
                    {{-- <li class="nav-item"><a href="product-list.html">Shop List</a></li> --}}
                    <li class="nav-item"><a href="{{ url('/detail') }}">shop Single</a></li>
                    <li class="nav-item"><a href="cart.html">Cart</a></li>
                    <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                  <ul class="sub-menu collapse" id="submenu-1-4">
                    <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                    </li>
                    <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                    <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                        Sibebar</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                </li>
              </ul>
            </div> <!-- navbar collapse -->
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="navbar navbar-expand">
          <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}">Đăng ký</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">Đăng nhập</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hồ sơ
              </a>
              <ul class="dropdown-menu text-center" aria-labelledby="profileDropdown">
                <li>
                  <a class="nav-link" href="#">Đơn hàng</a>
                </li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item" style="padding: 0; background: none; border: none; cursor: pointer;">
                      <div class="nav-link" style="display: flex; justify-content: center; font-size: 14px; color: #051441;">
                        Đăng xuất
                      </div>
                    </button>
                  </form>
                </li>
              </ul>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Bottom -->
</header>
<!-- End Header Area -->
