<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Whisk and Roast</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pl-3" href="mailto:dannahjanelle.tiamson@tup.edu.ph">Support Team</a>
                </div>   
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/profile.php?id=61565706737046&mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/whiskandroast?igsh=MWIwaGVxdmFtazR0bg==">
                            <i class="fab fa-instagram"></i>
                       </a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Whisk</span>Roast</h1>                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="product.html" class="nav-item nav-link">Products</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <img src="./home/whiskandroastlogo-nobg.png" alt="WhiskadnRoast Logo" style="max-height: 4rem; max-width: 100%;">
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                        <a href="ratings.html" class="nav-item nav-link">Ratings</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start 
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
     Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5" id="orderForm">
                        <div class="row">
                            </div>
                            <h5 class="font-weight-bold mb-2">Order Summary</h5>
                            <!--SAMPLE-One product line in order-->
                            <div class="small-cont os-page">
                                <table>
                                    <tr>
                                        <th>
                                            Product
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Subtotal
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-info">                                           
                                            <span class="product"><img src="./products/americano.jpeg" alt="ProductImg"></span>
                                        <div>
                                            <h5 class="font-weight-bold mb-2">Americano</h5>
                                            <p class="mb-0">Price: ₱100.00</p>
                                            <a href="">Remove <!--remove product from order summary--> </a>                       
                                        </div>
                                        </div>
                                            
                                        </td>
                                        <td>
                                            <input type="number" value="1">
                                        </td>
                                        <td>
                                            ₱100.00
                                        </td>
                                    </tr>
                                </table>

                                <div class="total-price">
                                    <table>
                                        <tr>
                                            <td>
                                                Subtotal
                                            </td>
                                            <td>
                                                ₱100.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shipping
                                            </td>
                                            <td>
                                                ₱60.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Total
                                            </td>
                                            <td>
                                                ₱160.00
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            
                        <form method="post" action="orderForm.php" name="sentMessage" id="contactForm" novalidate="novalidate">
                             <div class="control-group">
                                <label class="font-weight-bold mb-3">Contact</label>
                                <input type="email" name="email" class="form-control p-4" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="number" name="pnum" class="form-control p-4" id="pnum" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-row">
                            <div class="col-sm-6 control-group">
                                    <input type="text" name="firstName" class="form-control p-4" id="firstName" placeholder="First Name" required="required" data-validation-required-message="Please enter your first name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="text" name="lastName" class="form-control p-4" id="lastName" placeholder="Last Name" required="required" data-validation-required-message="Please enter your last name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" name="deliveryAdd" class="form-control p-4" id="deliveryAdd" placeholder="Address" required="required" data-validation-required-message="Please enter your address" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" name="city" class="form-control p-4" id="city" placeholder="City" required="required" data-validation-required-message="Please enter your city" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <textarea name="notes" class="form-control p-4" rows="2" id="notes" placeholder="Notes"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" value="placeOrder" name="placeOrder" type="submit" id="placeOrderButton" onclick="document.location='order_confirm.html'">Place Order</button> 
                                <!--Add onclick to submit cust order, edit type from button to submit-->
                            </div>
                            <div class="control-group">
                              <div>
                                <button class="btn btn-primary-cancel btn-block py-3 px-5" type="button" id="CancelButton" onclick="document.location='product.html'">Cancel</button>
                            </div>  
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary">Whisk <span class="text-secondary">and</span> Roast</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/profile.php?id=61565706737046" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.instagram.com/whiskandroast?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">Ilaya, Alabang, Muntinlupa City</p>
                            <p class="mb-0">09389864783</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Our online store is open 24/7!</p>
                            <p class="mb-0">Shop anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a>Whisk and Roast</a>. All Rights Reserved.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>