<!-- Header -->
<header id="header" class="header">
    <div class="header-top bg-theme-color-sky sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
                <li>
                  <a class="text-white" href="#">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (12)</a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
                          <table class="table cart-table-list table-responsive">
                            <tbody>
                              <tr>
                                <td><a href="#"><img alt="" src="{{ asset('images/products/sm1.jpg')}}"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X3</td>
                                <td>$ 100.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                              <tr>
                                <td><a href="#"><img alt="" src="{{ asset('images/products/sm2.jpg')}}"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X2</td>
                                <td>$ 70.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="total-cart text-right">
                            <table class="table table-responsive">
                              <tbody>
                                <tr>
                                  <td>Cart Subtotal</td>
                                  <td>$170.00</td>
                                </tr>
                                <tr>
                                  <td>Shipping and Handling</td>
                                  <td>$20.00</td>
                                </tr>
                                <tr>
                                  <td>Order Total</td>
                                  <td>$190.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="cart-btn text-right">
                              <a class="btn btn-theme-color-sky btn-xs" href="shop-cart.html"> View cart</a>
                              <a class="btn btn-dark btn-xs" href="shop-checkout.html"> Checkout</a>
                          </div>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="{{ asset('images/logo-wide.png')}}" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-blue m-0"> +(012) 345 6789</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-color-red font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">We are open!</a>
                  <h5 class="font-13 text-theme-color-blue m-0"> Mon-Fri 8:00-16:00</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-red border-bottom-theme-color-sky-2px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a>
                <ul class="dropdown">
                  <li><a href="#">Multi Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-mp-layout1.html">Layout1</a></li>
                      <li><a href="index-mp-layout2.html">Layout2</a></li>
                      <li><a href="index-mp-layout3.html">Layout3</a></li>
                      <li><a href="index-mp-layout4.html">Layout4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Single Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-sp-layout1.html">Layout1</a></li>
                      <li><a href="index-sp-layout2.html">Layout2</a></li>
                      <li><a href="index-sp-layout3.html">Layout3</a></li>
                      <li><a href="index-sp-layout4.html">Layout4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Boxed Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-boxed-mp-layout1.html">Boxed Multi Page Layout1</a></li>
                      <li><a href="index-boxed-mp-layout2.html">Boxed Multi Page Layout2</a></li>
                      <li><a href="index-boxed-mp-layout3.html">Boxed Multi Page Layout3</a></li>
                      <li><a href="index-boxed-mp-layout4.html">Boxed Multi Page Layout4</a></li>
                      <li><a href="index-boxed-sp-layout1.html">Boxed Single Page Layout1</a></li>
                      <li><a href="index-boxed-sp-layout2.html">Boxed Single Page Layout2</a></li>
                      <li><a href="index-boxed-sp-layout3.html">Boxed Single Page Layout3</a></li>
                      <li><a href="index-boxed-sp-layout4.html">Boxed Single Page Layout4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">RTL Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-rtl-mp-layout1.html">RTL Multi Page Layout1</a></li>
                      <li><a href="index-rtl-mp-layout2.html">RTL Multi Page Layout2</a></li>
                      <li><a href="index-rtl-mp-layout3.html">RTL Multi Page Layout3</a></li>
                      <li><a href="index-rtl-mp-layout4.html">RTL Multi Page Layout4</a></li>
                      <li><a href="index-rtl-sp-layout1.html">RTL Single Page Layout1</a></li>
                      <li><a href="index-rtl-sp-layout2.html">RTL Single Page Layout2</a></li>
                      <li><a href="index-rtl-sp-layout3.html">RTL Single Page Layout3</a></li>
                      <li><a href="index-rtl-sp-layout4.html">RTL Single Page Layout4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dark Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-dark-mp-layout1.html">Dark Multi Page Layout1</a></li>
                      <li><a href="index-dark-mp-layout2.html">Dark Multi Page Layout2</a></li>
                      <li><a href="index-dark-mp-layout3.html">Dark Multi Page Layout3</a></li>
                      <li><a href="index-dark-mp-layout4.html">Dark Multi Page Layout4</a></li>
                      <li><a href="index-dark-sp-layout1.html">Dark Single Page Layout1</a></li>
                      <li><a href="index-dark-sp-layout2.html">Dark Single Page Layout2</a></li>
                      <li><a href="index-dark-sp-layout3.html">Dark Single Page Layout3</a></li>
                      <li><a href="index-dark-sp-layout4.html">Dark Single Page Layout4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Magazine Home Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-magazine-home-layout1.html">Magazine Home layout1</a></li>
                      <li><a href="index-magazine-home-layout2.html">Magazine Home layout2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Hot Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-hot-split-slider-home.html">Split Slider Home Layout</a></li>
                      <li><a href="index-hot-vertical-slider-home.html">Vertical Slider Home Layout</a></li>
                      <li><a href="index-hot-fullscreen-home.html">Fullscreen Home Layout</a></li>
                      <li><a href="index-hot-parallax-home.html">Parallax Home Layout</a></li>
                      <li><a href="index-hot-personal-home.html">Personal Home Layout</a></li>
                    </ul>
                  </li>
                  <li><a href="index-shop-home.html">Shop Home</a></li>
                  <li><a href="#">Home Variations</a>
                    <ul class="dropdown">
                      <li><a href="#">Rev Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-revslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-revslider-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Maximage Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-maximageslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-maximageslider-style2.html">Layout2</a></li>
                          <li><a href="index-home-variation-maximageslider-style3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a></li>
                      <li><a href="index-home-variation-typed-text.html">Typed Text Layout</a></li>
                      <li><a href="index-home-variation-video-background.html">Youtube Background Video</a></li>
                      <li><a href="index-home-variation-html5-video.html">Html5 Background Video</a></li>
                      <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax Layout</a></li>
                      <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a></li>
                      <li><a href="#">Home Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-appointment-form-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-appointment-form-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Features</a>
                <ul class="dropdown">
                  <li><a href="features-preloader.html">Preloaders</a></li>
                  <li><a href="#">Header</a>
                    <ul class="dropdown">
                      <li><a href="features-header-style1.html">Header Style1</a></li>
                      <li><a href="features-header-style2.html">Header Style2</a></li>
                      <li><a href="features-header-style3.html">Header Style3</a></li>
                      <li><a href="features-header-style4.html">Header Style4</a></li>
                      <li><a href="features-header-style5.html">Header Style5</a></li>
                      <li><a href="features-header-style6.html">Header Style6</a></li>
                      <li><a href="features-header-style7.html">Header Style7</a></li>
                      <li><a href="features-header-vertical-nav.html">Vertical Header</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page Title</a>
                    <ul class="dropdown">
                      <li><a href="features-page-title-text-left.html">Text Left</a></li>
                      <li><a href="features-page-title-text-center.html">Text Center</a></li>
                      <li><a href="features-page-title-text-right.html">Text Right</a></li>
                      <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                      <li><a href="features-page-title-big-version.html">Big Version</a></li>
                      <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                      <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                      <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                      <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                      <li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Side Push Panel</a>
                    <ul class="dropdown">
                      <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                      <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                      <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                      <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Popup Promo Box</a>
                    <ul class="dropdown">
                      <li><a href="features-popup-promo-box.html">Default</a></li>
                      <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Footer</a>
                    <ul class="dropdown">
                      <li><a href="features-footer-style1.html#footer">Footer Dark One</a></li>
                      <li><a href="features-footer-style2.html#footer">Footer Dark Two</a></li>
                      <li><a href="features-footer-style3.html#footer">Footer Dark Three</a></li>
                      <li><a href="features-footer-style4.html#footer">Footer Dark Four</a></li>
                      <li><a href="features-footer-style5.html#footer">Footer Dark Five</a></li>
                      <li><a href="features-footer-style6.html#footer">Footer Dark Six</a></li>
                      <li><a href="features-footer-style7.html#footer">Footer Dark Seven</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="page-timetable.html">Time Table</a></li>
                  <li><a href="#">About</a>
                    <ul class="dropdown">
                      <li><a href="page-about-style1.html">About Style 1</a></li>
                      <li><a href="page-about-style2.html">About Style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="page-gallery.html">Gallery</a></li>
                  <li><a href="#">Pricing</a>
                    <ul class="dropdown">
                      <li><a href="page-pricing-style1.html">Pricing style1</a></li>
                      <li><a href="page-pricing-style2.html">Pricing style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Shop</a>
                    <ul class="dropdown">
                      <li><a href="shop-category.html">Category</a></li>
                      <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                      <li><a href="shop-product-details.html">Product Details</a></li>
                      <li><a href="shop-cart.html">Cart</a></li>
                      <li><a href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact</a>
                    <ul class="dropdown">
                      <li><a href="page-contact-style1.html">Contact style 1</a></li>
                      <li><a href="page-contact-style2.html">Contact style 2</a></li>
                      <li><a href="page-contact-style3.html">Contact style 3</a></li>
                      <li><a href="page-contact-style4.html">Contact style 4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Calender</a>
                    <ul class="dropdown">
                      <li><a href="page-calendar1.html">Calendar Style1</a></li>
                      <li><a href="page-calendar2.html">Calendar Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Events</a>
                    <ul class="dropdown">
                      <li><a href="page-events.html">Events</a></li>
                      <li><a href="page-event-details.html">Event Details</a></li>
                    </ul>
                  </li>
                  <li><a href="page-faqs.html">Faqs</a></li>
                  <li><a href="page-coming-soon.html">Coming Soon</a></li>
                  <li><a href="page-404.html">Page 404</a></li>
                  <li><a href="page-under-construction.html">Under Construction</a></li>
                </ul>
              </li>
              <li><a href="#home">Courses</a>
                <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-courses-learning-classes.html">Course Details</a></li>
                </ul>
              </li>
              <li><a href="#home">Teachers</a>
                <ul class="dropdown">
                  <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                  <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                  <li><a href="page-teachers-details.html">Teachers Details</a></li>
                </ul>
              </li>
              <li><a href="#">Blog</a>
                <ul class="dropdown">
                  <li><a href="#">Blog Classic</a>
                    <ul class="dropdown">
                      <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                      <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                      <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                      <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Grid</a>
                    <ul class="dropdown">
                      <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                      <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                      <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Single</a>
                    <ul class="dropdown">
                      <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                      <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                      <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>        
              <li><a href="#">Shortcodes</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
                        <li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
                        <li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
                        <li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
                        <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                        <li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
                        <li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
                        <li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
                        <li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
                        <li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
                        <li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
                        <li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
                        <li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
                        <li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
                        <li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
                        <li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
                        <li><a href="shortcode-flex-sliders.html"><i class="fa fa-sliders"></i> Flex Sliders</a></li>
                        <li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
                        <li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
                        <li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
                        <li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
                        <li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
                        <li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
                        <li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
                        <li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
                        <li><a href="shortcode-icon-strokegap.html"><i class="fa fa-anchor"></i> Icons Strokegap</a></li>
                        <li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
                        <li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
                        <li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
                        <li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
                        <li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
                        <li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
                        <li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
                        <li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
                        <li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
                        <li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
                        <li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
                        <li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                        <li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
                        <li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
                        <li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                        <li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
                        <li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                        <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                        <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                        <li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
                        <li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
                        <li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
                        <li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
                        <li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
                        <li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
                        <li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
                        <li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        <li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
                        <li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
                        <li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Book Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-sky text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="{{ asset('ajax-load/reservation-form.html')}}">Book Now</a>
                <!-- Modal: Book Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
</header>