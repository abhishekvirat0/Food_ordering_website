<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codenpixel.com/demo/foodpicky/map_results.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 18:36:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food Delivery service</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
      <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <!--header starts-->
        <header class="top-header navbar-fixed-top">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index-2.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index-2.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="food_results.php">Food results</a> <a class="dropdown-item" href="map_results.php">Map results</a></div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.php">Search results</a> <a class="dropdown-item" href="profile.php">Profile page</a></div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="pricing.php">Pricing</a> <a class="dropdown-item" href="contact.php">Contact</a> <a class="dropdown-item" href="submition.php">Submit restaurant</a> <a class="dropdown-item" href="registration.php">Registration</a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="checkout.php">Checkout</a> </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- PAGE CONTETNT -->
        <section class="gl-page-content-section">
            <div class="container-fluid">
                <div class="row">
                    <!-- SEARCH MAP -->
                    <div class="map-wrapper map-split">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.483047754404!2d73.85232835032105!3d18.461766375727187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eab8170e9151%3A0xbc33ef87975e8f2e!2sBharti+vidyapeeth+katraj!5e0!3m2!1sen!2sin!4v1523796121841" width="600" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div id="map"></div>
                    </div>
                    <!-- SEARCH MAP END -->
                    <!-- SEARCH -->
                    <div id="map-result-section" class="map-result-wrapper">
                        <div class="widget clearfix">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                                        Search filter
                                    </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body">
                                <form class="row">
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputKeyword" placeholder="Keyword"> </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputText2" placeholder="Enter Location"> </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="exampleSelect1">
                                                <option>Category</option>
                                                <option>Fast food</option>
                                                <option>Pizza</option>
                                                <option>Pasta</option>
                                                <option>Fish meal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-3"> <a href="food_results.php" class="btn theme-btn  btn-block">Submit</a> </div>
                                </form>
                            </div>
                        </div>
                        <!-- end:Pricing widget -->
                        <div class="widget clearfix">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                                        Price range
                                    </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body">
                                <div class="range-slider m-b-10"> <span id="ex2CurrentSliderValLabel"> Filter by price:<span id="ex2SliderVal"><strong>135</strong></span>&#x20b9</span>
                                    <br>
                                    <input id="ex2" type="text" data-slider-min="100" data-slider-max="1000" data-slider-step="1" data-slider-value="135" /> </div>
                            </div>
                        </div>
                        <!-- end:Pricing widget -->
                        <div class="search-result-wrapper">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food1.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 15,99</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo1.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food1.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 15,99</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo1.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <!--  popular food item starts -->
                                <div class="col-xs-12 col-sm-6 col-md-6 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">&#x20b9 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="images/logo2.png" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item ends -->
                                <div class="col-xs-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a>
                                            </li>
                                            <li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a> </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEARCH END-->
                </div>
            </div>
        </section>
        <!-- PAGE CONTETNT END -->
    </div>
    <!-- end:page wrapper -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
 <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkr1-EOpHZnAwxp-VvmjCgIE6mKrrmSoY&callback=initMap"></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.js"></script>
    <script src="js/markerclusterer.js"></script>
      
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/data.json"></script>
    
    <script type="text/javascript">
        function InfoBox(opts) {
            google.maps.OverlayView.call(this);
            this.latlng_ = opts.latlng;
            this.map_ = opts.map;
            this.content = opts.content;
            this.offsetVertical_ = -400;
            this.offsetHorizontal_ = -130;
            this.height_ = 375;
            this.width_ = 260;
            this.div_ = $('.wwone__map-infobox');
            //var me = this;
            //this.boundsChangedListener_ =  google.maps.event.addListener(this.map_, "bounds_changed", function() {
            //return me.panMap.apply(me);
            //});
            // Once the properties of this OverlayView are initialized, set its map so
            // that we can display it. This will trigger calls to panes_changed and
            // draw.
            this.setMap(this.map_);
        }
        /* InfoBox extends GOverlay class from the Google Maps API
         */
        InfoBox.prototype = new google.maps.OverlayView();
        /* Creates the DIV representing this InfoBox
         */
        InfoBox.prototype.remove = function () {
            var panes = this.getPanes();
            if (typeof panes !== 'undefined') {
                $(panes.floatPane).contents().css({
                    'display': 'none'
                });
                if (this.div_) {
                    this.div_.css({
                        'display': 'none'
                    });
                }
            }
        }
        InfoBox.prototype.show = function () {
            this.div_.css({
                'display': 'block'
            });
        };
        /* Redraw the Bar based on the current projection and zoom level
         */
        InfoBox.prototype.draw = function () {
            var timer;
            // Creates the element if it doesn't exist already.
            if (this.initialised !== true) {
                this.createElement();
            }
            if (!this.div_) {
                return;
            }
            // Calculate the DIV coordinates of two opposite corners of our bounds to
            // get the size and position of our Bar
            var pixPosition = this.getProjection().fromLatLngToDivPixel(this.latlng_);
            if (!pixPosition) {
                return;
            }
            // Set height to content and reset the offset of box
            //var newHeight = this.div_.height();
            // this.offsetVertical_ = 0 - ( this.div_.outerHeight() + 60 );
            var getHeight = $.proxy(function () {
                var tempHeight = this.div_.outerHeight();
                if (tempHeight > 0) {
                    this.offsetVertical_ = 0 - (tempHeight + 60);
                }
                this.div_.css({
                    'height': 'auto'
                    , 'left': (pixPosition.x + this.offsetHorizontal_) + 'px'
                    , 'top': (pixPosition.y + this.offsetVertical_) + 'px'
                });
            }, this);
            if (this.div_.find('.wwone__map-infobox__thumb').length > 0 && typeof this.div_.find('.wwone__map-infobox__thumb').attr('ng-src') !== 'undefined') {
                //Has image lets wait for it to load (with a timeout just in case)
                $timeout.cancel(timer);
                timer = $timeout(function () {
                    getHeight();
                }, 1000);
                this.div_.find('.wwone__map-infobox__thumb').bind('load', $.proxy(function () {
                    $timeout.cancel(timer);
                    getHeight();
                }, this));
            }
            else {
                //No Image just get height
                getHeight();
            }
        };
        /* Creates the DIV representing this InfoBox in the floatPane. If the panes
         * object, retrieved by calling getPanes, is null, remove the element from the
         * DOM. If the div exists, but its parent is not the floatPane, move the div
         * to the new pane.
         * Called from within draw. Alternatively, this can be called specifically on
         * a panes_changed event.
         */
        InfoBox.prototype.createElement = function () {
            var panes = this.getPanes();
            // This does not handle changing panes.  You can set the map to be null and
            // then reset the map to move the div.
            this.div_ = $('<div id="wwone__map-infobox" class="wwone__map-infobox" />').css({
                'position': 'absolute'
                , 'height': 'auto'
                , 'display': 'none'
            });
            //contentDiv
            var contentDiv = $('<div id="info-box-content" />');
            // closeLink
            var closeLink = $('<a class="wwone__map-infobox__close"><span>X</span></a>');
            this.div_.append(closeLink).append(contentDiv);
            $(panes.floatPane).append(this.div_);
            google.maps.event.addDomListener(closeLink[0], 'click', $.proxy(function (evt) {
                evt.cancelBubble = true;
                if (evt.stopPropagation) {
                    evt.stopPropagation();
                }
                this.remove(); //could be just hide
                return false;
            }, this));
            this.initialised = true;
        };
        /* Pan the map to fit the InfoBox.
         */
        InfoBox.prototype.panMap = function () {
            // if we go beyond map, pan map
            var map = this.map_;
            var bounds = map.getBounds();
            if (!bounds) {
                return;
            }
            // The position of the infowindow
            var position = this.latlng_;
            // The dimension of the infowindow
            var iwWidth = this.width_;
            var iwHeight = this.height_;
            // The offset position of the infowindow
            var iwOffsetX = this.offsetHorizontal_;
            var iwOffsetY = this.offsetVertical_;
            // Padding on the infowindow
            var padX = 40;
            var padY = 40;
            // The degrees per pixel
            var mapDiv = map.getDiv();
            var mapWidth = mapDiv.offsetWidth;
            var mapHeight = mapDiv.offsetHeight;
            var boundsSpan = bounds.toSpan();
            var longSpan = boundsSpan.lng();
            var latSpan = boundsSpan.lat();
            var degPixelX = longSpan / mapWidth;
            var degPixelY = latSpan / mapHeight;
            // The bounds of the map
            var mapWestLng = bounds.getSouthWest().lng();
            var mapEastLng = bounds.getNorthEast().lng();
            var mapNorthLat = bounds.getNorthEast().lat();
            var mapSouthLat = bounds.getSouthWest().lat();
            // The bounds of the infowindow
            var iwWestLng = position.lng() + (iwOffsetX - padX) * degPixelX;
            var iwEastLng = position.lng() + (iwOffsetX + iwWidth + padX) * degPixelX;
            var iwNorthLat = position.lat() - (iwOffsetY - padY) * degPixelY;
            var iwSouthLat = position.lat() - (iwOffsetY + iwHeight + padY) * degPixelY;
            // calculate center shift
            var shiftLng = (iwWestLng < mapWestLng ? mapWestLng - iwWestLng : 0) + (iwEastLng > mapEastLng ? mapEastLng - iwEastLng : 0);
            var shiftLat = (iwNorthLat > mapNorthLat ? mapNorthLat - iwNorthLat : 0) + (iwSouthLat < mapSouthLat ? mapSouthLat - iwSouthLat : 0);
            // The center of the map
            var center = map.getCenter();
            // The new map center
            var centerX = center.lng() - shiftLng;
            var centerY = center.lat() - shiftLat;
            // center the map to the new shifted center
            //map.setCenter(new google.maps.LatLng(centerY, centerX));
            //Pan looks nicer??
            map.panTo(new google.maps.LatLng(centerY, centerX));
            // Remove the listener after panning is complete.
            google.maps.event.removeListener(this.boundsChangedListener_);
            this.boundsChangedListener_ = null;
        };
        InfoBox.prototype.open = function (content, marker) {
            this.latlng_ = marker.getPosition();
            this.setContent(content);
            this.draw();
            this.show();
            this.panMap();
        };
        InfoBox.prototype.setContent = function (content) {
            this.div_.find('#info-box-content').empty().append(content);
        };
        InfoBox.prototype.getContent = function () {
            return this.div_;
        };
        var infoBox;
        var openMarkerWindow = function () {
            //Build info box
            var localTemplate = '<img class="wwone__map-infobox__thumb" src="{{photo_file_url}}" /><div class="wwone__map-infobox__badge">{{rating}}</div><div class="wwone__map-infobox__inner"><div class="wwone__map-infobox__inner__location">{{photo_id}}</div><div class="wwone__map-infobox__inner__heading">{{photo_title}}</div><div class="wwone__map-infobox__inner__info"><div class="wwone__map-infobox__inner__info__type"><strong>Type:</strong>{{type}}</div><div class="wwone__map-infobox__inner__info__location"><strong>Working:</strong> {{open-close}}</div><div class="wwone__map-infobox__inner__info__date"><strong>Delivery:</strong> {{delivery}}</div></div><a class="wwone__map-infobox__inner__btn btn" href="{{owner_url}}" target="_blank">Find out more</a></div>';
            console.log(this);
            for (var itm in this.data) {
                console.log(itm);
                localTemplate = localTemplate.replace('{{' + itm + '}}', this.data[itm]);
            }
            //OPen
            infoBox.open(localTemplate, this);
            infoWindowShown = true;
        };

        function initialize() {
            var bounds = new google.maps.LatLngBounds();
            var center = new google.maps.LatLng(18.520430, 73.856744);
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8
                , center: center
                , mapTypeControl: true
                , mapTypeId: google.maps.MapTypeId.ROADMAP
                , streetViewControl: false
                , styles: [{
                    "featureType": "administrative"
                    , "elementType": "labels.text.fill"
                    , "stylers": [{
                        "color": "#444444"
                }]
            }, {
                    "featureType": "landscape"
                    , "elementType": "all"
                    , "stylers": [{
                        "color": "#f7f4ee"
                }]
            }, {
                    "featureType": "poi"
                    , "elementType": "all"
                    , "stylers": [{
                        "visibility": "off"
                }]
            }, {
                    "featureType": "road"
                    , "elementType": "all"
                    , "stylers": [{
                        "saturation": -50
                }, {
                        "lightness": 25
                }]
            }, {
                    "featureType": "road"
                    , "elementType": "labels.text"
                    , "stylers": [{
                        "weight": "0.52"
                }, {
                        "color": "#262323"
                }, {
                        "visibility": "on"
                }, {
                        "gamma": "4.53"
                }]
            }, {
                    "featureType": "road"
                    , "elementType": "labels.text.fill"
                    , "stylers": [{
                        "saturation": "99"
                }]
            }, {
                    "featureType": "road.highway"
                    , "elementType": "all"
                    , "stylers": [{
                        "visibility": "simplified"
                }]
            }, {
                    "featureType": "road.arterial"
                    , "elementType": "labels.icon"
                    , "stylers": [{
                        "visibility": "off"
                }]
            }, {
                    "featureType": "transit"
                    , "elementType": "all"
                    , "stylers": [{
                        "visibility": "off"
                }]
            }, {
                    "featureType": "water"
                    , "elementType": "all"
                    , "stylers": [{
                        "color": "#3f89e4"
                }, {
                        "visibility": "on"
                }]
            }]
            });
            infoBox = new InfoBox({
                latlng: center
                , map: map
                , content: ''
            });
            var markers = [];
            for (var i = 0; i < 100; i++) {
                var dataPhoto = data.photos[i];
                var latLng = new google.maps.LatLng(dataPhoto.latitude, dataPhoto.longitude);
                var marker = new google.maps.Marker({
                    position: latLng
                    , map: map
                    , icon: 'images/Maps-Pin-Place-icon.png'
                    , data: dataPhoto
                });
                //extend the bounds to include each marker's position
                bounds.extend(marker.position);
                markers.push(marker);
                marker.addListener('click', openMarkerWindow);
            }
            var clusterImgPath = 'images/cluster.png';
            var mcOptions = {
                styles: [{
                    textColor: '#cf043c'
                    , textSize: 16
                    , url: clusterImgPath + '-1.png'
                    , height: 47
                    , width: 47
            }, {
                    textColor: '#cf043c'
                    , textSize: 16
                    , url: clusterImgPath + '-2.png'
                    , height: 58
                    , width: 58
            }, {
                    textColor: '#cf043c'
                    , textSize: 16
                    , url: clusterImgPath + '-3.png'
                    , height: 70
                    , width: 70
            }]
            }
            var markerCluster = new MarkerClusterer(map, markers, mcOptions);
            map.fitBounds(bounds);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>