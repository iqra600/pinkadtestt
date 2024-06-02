<?php
  $id = $_GET['seller_id'];
  $id2 = $_GET['shop_id'];
?>

    <head>
        <meta charset="utf-8">
        <title>PinkAd - 100% Free Classified Solution</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    
        <!-- CSS -->
    	<!-- ============================================ -->
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="assets/css/vendor/bicon.min.css">
        <!-- Flat Icon CSS -->
        <link rel="stylesheet" href="assets/css/vendor/flaticon.css">
        <!-- audio & video player CSS -->
        <link rel="stylesheet" href="assets/css/plugins/plyr.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
        <!-- nice-select CSS -->
        <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
        <!-- perfect scrollbar css -->
        <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
        <!-- light gallery css -->
        <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/assets1/css/style.css" rel="stylesheet">
    </head>

    <body>
    <!-- header area start -->  
    <header>
        <div class="header-top sticky bg-white d-none d-lg-block" style="padding:5px 0px 5px 0px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <!-- brand logo start -->
                        <div class="brand-logo text-center">
                            <a href="https://app.pinkad.pk/">
                                <img src="assets/images/logo/logo.png" alt="logo" width="70%">
                            </a>
                        </div>
                        <!-- brand logo end -->
                    </div>
                 
                    <div class="col-md-6">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <!-- header top search start -->
                            <!--<div class="header-top-search">-->
                            <!--    <form class="top-search-box">-->
                            <!--        <input type="text" placeholder="What Are You Looking For ?" class="top-search-field">-->
                            <!--        <button class="top-search-btn"><i class="flaticon-search"></i></button>-->
                            <!--    </form>-->
                            <!--</div>-->
                            <!-- header top search end -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <div class="button-container-middle">
                                <a href="sellers.html" class="button-a"><!--<i class="material-icons">store_mall_directory</i> -->Sellers</a> 
                               <div class="button-space"></div> <!-- Space between buttons -->
                               <a href="index.html" class="button-a"><!--<i class="material-icons">travel_explore</i>-->Home</a>
                               <div class="button-space"></div> <!-- Space between buttons -->
                               <button class="button-a dropdown-toggle-custom" type="button" id="categoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </button>
                            <div class="dropdown-menu" aria-labelledby="categoryDropdown" id="categoryList">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
        <div class="mobile-header-wrapper sticky d-block d-lg-none">
            <div class="mobile-header position-relative ">
                <div class="mobile-logo">
                    <a href="https://app.pinkad.pk/">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="header-top-right d-flex align-items-center justify-content-end">
                       <div class="button-container-middle">
                            <a href="sellers.html" class="button-a">Sellers</a> 
                            <div class="button-space"></div> <!-- Space between buttons -->
                            <a href="index.html" class="button-a">Home</a>
                            <div class="button-space"></div> <!-- Space between buttons -->
                            <button class="button-a dropdown-toggle-custom" type="button" id="mobileCategoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </button>
                            <div class="dropdown-menu" aria-labelledby="mobileCategoryDropdown" id="mobileCategoryList">
                                <!-- Category dropdown items will be added dynamically here -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <br>
    <br>
  <div class="wrapper">
            <div class="card widget-item mb-3 p-0 d-none d-lg-block">
                <img src="assets/images/banner/banner-4.png" alt="website banner" width="1200" height="180">
            </div>
                
            <div class="card widget-item mb-3 p-0 d-block d-lg-none">
                <img src="assets/images/banner/banner-4.png" alt="website banner">
            </div>
            <div class="sidebar" id="sidebar">
            </div>
            <div class="content">
              
                <!-- Carousel Start -->
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="cover_image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel End -->
            
                <!-- Blog List Start -->
                <div class="container bg-white pt-5" >
                    <div class="row blog-item px-3 pb-5" id="offer-section">
                    </div>
                </div>
                <!-- Blog List End -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/assets1/lib/easing/easing.min.js"></script>
        <script src="/assets1/lib/waypoints/waypoints.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="/assets1/mail/jqBootstrapValidation.min.js"></script>
        <script src="/assets1/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="/assets1/js/main.js"></script>
        <script>
            $(document).ready(function() {
                var baseURL="https://pinkad.pk/portal/"; 
                var ImageBaseURL=" https://pinkad.pk/portal/public/storage/";
                
                // Shop Details
                var ShopDetailsAPI=baseURL+'api/shop-detail/<?php echo $id2 ?>';
                fetch(ShopDetailsAPI).then(response => {
                    return response.json();
                }).then(ShopDetailsAPI => {
                    var ShopContent ='<div class="sidebar-text d-flex flex-column justify-content-center text-center">'+
                        '<img class="mx-auto d-block w-75 bg-primary img-fluid mb-4 p-3" src="'+ImageBaseURL+ShopDetailsAPI['seller']['logo']+'" alt="Image">'+
                        '<h1 class="font-weight-bold">'+ShopDetailsAPI['seller']['business_name']+'</h1>'+
                        '<p class="mb-4">'+ShopDetailsAPI['description']+'</p>'+
                        '<div class="d-flex justify-content-center mb-5">'+
                            '<a class="btn btn-outline-primary mr-2" href="'+ShopDetailsAPI['seller']['faecbook_page']+'"><i class="fab fa-facebook-f"></i></a>'+
                            '<a class="btn btn-outline-primary mr-2" href="'+ShopDetailsAPI['seller']['insta_page']+'"><i class="fab fa-instagram"></i></a>'+
                        '</div>'+
                        '<a href="https://wa.me/'+ShopDetailsAPI['seller']['whatsapp']+'" class="btn btn-lg btn-block btn-success mt-auto"><i class="fab fa-whatsapp"> Whatsapp</a>'+
                    '</div>'+
                    '<div class="sidebar-icon d-flex flex-column justify-content-center text-right">'+
                        '<i class="fas fa-2x fa-angle-double-right text-primary"></i>'+
                    '</div>';
                    $('#sidebar').append(ShopContent);
                    
                    var coverImage='<img class="w-100" src="'+ImageBaseURL+ShopDetailsAPI['seller']['coverimage']+'">';
                    $('#cover_image').append(coverImage);
                    
                    }).catch(err => {
                });
                
                var SellerOfferAPI=baseURL+'api/get_posts_by_seller?seller_id=<?php echo $id?>';
                fetch(SellerOfferAPI).then(response => {
                    return response.json();
                }).then(SellerOffers => {
                    SellerOffers.seller_posts.forEach(offer => {
                        console.log(offer);
                        var OfferContent ='<div class="col-md-5">'+
                                                '<img class="img-fluid mb-4 mb-md-0" src="'+ImageBaseURL+offer['banner']+'" alt="Image">'+
                                          '</div>'+
                                          '<div class="col-md-7 mb-5">'+
                                                '<h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">'+offer['title']+'</h3>'+
                                                '<div class="d-flex mb-3">'+
                                                    '<small class="mr-2">'+offer['description']+'</small>'+
                                                '</div>'+
                                            '</div>';
                            $('#offer-section').append(OfferContent);
                    });
                    }).catch(err => {
                });
            });
        </script>
    </body>
