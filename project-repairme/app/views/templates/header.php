<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title><?= $data['judul']; ?></title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASEURL; ?>/home-master/assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= BASEURL; ?>/home-master/assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASEURL; ?>/home-master/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= BASEURL; ?>/home-master/assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>/home-master/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= BASEURL; ?>/home-master/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="<?= BASEURL; ?>/home-master/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/owl.carousel/dist/<?= BASEURL; ?>/home-master/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/owl.carousel/dist/<?= BASEURL; ?>/home-master/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/home-master/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?= BASEURL; ?>/home-master/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?= BASEURL; ?>/home-master/assets/css/colors/default.css" rel="stylesheet">

    <?php require 'leafletjs.php'; ?>


  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="<?= BASEURL; ?>">RepairME</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
                  <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_video_background.html">Default</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_op_fullscreen_gradient_overlay.html">One Page</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_agency.html">Agency</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_portfolio.html">Portfolio</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_restaurant.html">Restaurant</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_finance.html">Finance</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_landing.html">Landing Page</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_photography.html">Photography</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/index_shop.html">Shop</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Headers</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Static Image Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_static.html">Fulscreen</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_classic_static.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Flexslider Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_flexslider.html">Fulscreen</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_classic_flexslider.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Video Background Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_video_background.html">Fulscreen</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_classic_video_background.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Text Rotator Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_text_rotator.html">Fulscreen</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_classic_text_rotator.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gradient Overlay Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_fullscreen_gradient_overlay.html">Fulscreen</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/index_mp_classic_gradient_overlay.html">Classic</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/about1.html">About 1</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/about2.html">About 2</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/about3.html">About 3</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/about4.html">About 4</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/about5.html">About 5</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/service1.html">Service 1</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/service2.html">Service 2</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/service3.html">Service 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pricing</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/pricing1.html">Pricing 1</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/pricing2.html">Pricing 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/gallery_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/gallery_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/gallery_col_4.html">4 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/gallery_col_6.html">6 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/contact1.html">Contact 1</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/contact2.html">Contact 2</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/contact3.html">Contact 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Restaurant menu</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/restaurant_menu1.html">Menu 2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/restaurant_menu2.html">Menu 3 Columns</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= BASEURL; ?>/home-master/login_register.html">Login / Register</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/faq.html">FAQ</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/404.html">Page 404</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Portfolio</a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed - Gutter</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_gutter_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_gutter_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_boxed_gutter_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width - Gutter</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_gutter_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_gutter_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_full_width_gutter_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_hover_black.html">Black</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/portfolio_hover_gradient.html">Gradient</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_image1.html">Style 1</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_image2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_slider1.html">Style 1</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_slider2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                        <ul class="dropdown-menu">
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_video1.html">Style 1</a></li>
                          <li><a href="<?= BASEURL; ?>/home-master/portfolio_single_featured_video2.html">Style 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Standard</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/blog_standard_left_sidebar.html">Left Sidebar</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_standard_right_sidebar.html">Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Grid</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_masonry_col_2.html">2 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_masonry_col_3.html">3 Columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_grid_masonry_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/blog_single_left_sidebar.html">Left Sidebar</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/blog_single_right_sidebar.html">Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Features</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?= BASEURL; ?>/home-master/alerts-and-wells.html"><i class="fa fa-bolt"></i> Alerts and Wells</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/buttons.html"><i class="fa fa-link fa-sm"></i> Buttons</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/tabs_and_accordions.html"><i class="fa fa-tasks"></i> Tabs &amp; Accordions</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/content_box.html"><i class="fa fa-list-alt"></i> Contents Box</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/icons.html"><i class="fa fa-star"></i> Icons</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/progress-bars.html"><i class="fa fa-server"></i> Progress Bars</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/typography.html"><i class="fa fa-font"></i> Typography</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= BASEURL; ?>/home-master/shop_product_col_3.html">3 columns</a></li>
                      <li><a href="<?= BASEURL; ?>/home-master/shop_product_col_4.html">4 columns</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= BASEURL; ?>/home-master/shop_single_product.html">Single Product</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/shop_checkout.html">Checkout</a></li>
                </ul>
              </li>
              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='<?= BASEURL; ?>/home-master/assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='<?= BASEURL; ?>/home-master/assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
              <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a href="<?= BASEURL; ?>/login">Login</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#contact">Contact Form</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#reservation">Reservation Form</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#mailchimp">Mailchimp</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#gmap">Google Map</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#plugin">Plugins</a></li>
                  <li><a href="<?= BASEURL; ?>/home-master/documentation.html#changelog">Changelog</a></li>
                  <li><a href="" data-toggle="modal" data-target="#exampleModal">Registrasi</a></li>
                  <?php mySession::sessionLogin(); ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="<?= BASEURL; ?>/pelanggan/registrasi" class="btn btn-primary">Gabung Menjadi Pelanggan</a>
              
               <a href="<?= BASEURL; ?>/mitra/registrasi" class="btn btn-primary tombol-mitra">Gabung Menjadi Mitra</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>