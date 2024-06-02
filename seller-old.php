<?php
  $id = $_GET['id'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PinkAd - 100% Free Classified Solution</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
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
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="assets/css/plugins/jquery.multiselect.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/plugins/jquery.multiselect.js"></script>
</head>
<body>

    <!-- header area start -->
    <header>
        <div class="header-top sticky bg-white d-none d-lg-block" style="padding:5px 0px 5px 0px">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-md-3">
                        <!-- brand logo start -->
                        <div class="brand-logo text-center" id="pinkad-logo">
                           <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="logo" width="70%">
                            </a>
                        </div>
                        <!-- brand logo end -->
                    </div>
                 
                    <div class="col-md-6">
                        <!--<div class="header-top-right d-flex align-items-center justify-content-end">-->
                            <!-- header top search start -->
                        <!--    <div class="header-top-search">-->
                        <!--        <form class="top-search-box">-->
                        <!--            <input type="text" placeholder="What Are You Looking For ?" class="top-search-field">-->
                        <!--            <button class="top-search-btn"><i class="flaticon-search"></i></button>-->
                        <!--        </form>-->
                        <!--    </div>-->
                            <!-- header top search end -->
                        <!--</div>-->
                    </div>
                    <div class="col-md-3">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <a href="https://app.pinkad.pk/"><h5 style="color: #B8368A;">What Is PinkAd ?</h5></a>
                     
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <!-- <div class="profile-setting-box mr-2">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="profile-triger" >
                                        <img src="assets/images/icons/menu.webp" alt="profile picture">
                                    </a>
                                    <div class="profile-dropdown">
                                        <div class="profile-head">
                                            <h5 class="name"><a href="#">Madison Howard</a></h5>
                                            <a class="mail" href="#">mailnam@mail.com</a>
                                        </div>
                                        <div class="profile-body">
                                            <ul>
                                                <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                                <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                                <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                                <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="profile-setting-box mr-2">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="notification-triger">
                                            <img src="assets/images/icons/notification.jpg" alt="profile picture">
                                    </a>
                                    <div class="notification-dropdown">
                                        <div class="profile-head">
                                            <h5 class="name"><a href="#">Madison Howard</a></h5>
                                            <a class="mail" href="#">mailnam@mail.com</a>
                                        </div>
                                        <div class="profile-body">
                                            <ul>
                                                <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                                <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                                <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                                <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="profile-setting-box">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="messages-triger">
                                        <img src="assets/images/icons/chat.jpg" alt="profile picture">
                                    </a>
                                    <div class="messages-dropdown">
                                        <div class="profile-head">
                                            <h5 class="name"><a href="#">Madison Howard</a></h5>
                                            <a class="mail" href="#">mailnam@mail.com</a>
                                        </div>
                                        <div class="profile-body">
                                            <ul>
                                                <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                                <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                                <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                                <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
                    <a href="index.html">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <!-- <div class="mobile-menu">
                    <ul> -->
                        <!-- <li>
                            <button class="notification request-trigger"><i class="flaticon-users"></i>
                                <span>03</span>
                            </button>
                            <ul class="frnd-request-list">
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="assets/images/profile/profile-midle-1.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="assets/images/profile/profile-midle-2.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="assets/images/profile/profile-midle-3.jpg" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li>
                            <button class="notification"><i class="flaticon-notification"></i>
                                <span>03</span>
                            </button>
                        </li> -->
                        <!-- <li>
                            <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                                <span>04</span>
                            </button>
                            <div class="mobile-chat-box">
                                <div class="live-chat-title">
                                    <div class="profile-thumb">
                                        <a href="profile.html">
                                            <figure class="profile-thumb-small profile-active">
                                                <img src="assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Winter Sale</a></h6>
                                        <span class="active-pro">active now</span>
                                    </div>
                                    <div class="live-chat-settings ml-auto">
                                        <button class="chat-settings"><img src="assets/images/icons/settings.png" alt=""></button>
                                        <button class="close-btn"><img src="assets/images/icons/close.png" alt=""></button>
                                    </div>
                                </div>
                                <div class="message-list-inner">
                                    <ul class="message-list custom-scroll">
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-text-field mob-text-box">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="assets/images/icons/plane.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li>
                            <button class="search-trigger">
                                <i class="search-icon flaticon-search"></i>
                                <i class="close-icon flaticon-cross-out"></i>
                            </button>
                            <div class="mob-search-box">
                                <form class="mob-search-inner">
                                    <input type="text" placeholder="Search Here" class="mob-search-field">
                                    <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </li> -->
                    <!-- </ul>
                </div> -->
                <!-- <div class="mobile-header-profile">
                    <div class="profile-thumb profile-setting-box">
                        <a href="javascript:void(0)" class="profile-triger">
                            <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                            </figure>
                        </a>
                        <div class="profile-dropdown text-left">
                            <div class="profile-head">
                                <h5 class="name"><a href="#">Madison Howard</a></h5>
                                <a class="mail" href="#">mailnam@mail.com</a>
                            </div>
                            <div class="profile-body">
                                <ul>
                                    <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                    <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                    <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                    <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            <div class="profile-banner-large bg-img" id="seller-cover" >
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a id="seller-logo">
                                        
                                    </a>
                                    
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 offset-lg-1">
                            <div class="profile-menu-wrapper">
                                <div class="main-menu-inner header-top-navigation">
                                    <nav>
                                        <ul class="main-menu">
                                            <li class="active"><a href="#">Timeline</a></li>
                                            <li><a href="shop-offers.php?id=<?php echo $id ?>">All Offers</a></li>
                                            <li><a href="related-stores.php">Related Stores</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area profile-sidebar">
                            <div class="card widget-item" id="shop-info">
                                
                            </div>

                            <!--<div class="card widget-item" id="shop-offers">-->
                            <!--    <h4 class="widget-title">View All Offers</h4>-->
                            <!--    <div class="widget-body">-->
                            <!--        <div class="sweet-galley img-gallery">-->
                            <!--            <div class="row row-5">-->
                            <!--                <div class="col-4">-->
                            <!--                    <div class="gallery-tem">-->
                            <!--                        <figure class="post-thumb">-->
                            <!--                            <a class="gallery-selector" href="assets/images/gallery/gallery-1.jpg">-->
                            <!--                                <img src="assets/images/gallery/gallery-1.jpg" alt="sweet memory">-->
                            <!--                            </a>-->
                            <!--                        </figure>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
            
                            <!--<div class="card widget-item" id="related-shops">-->
                            <!--    <h4 class="widget-title">Shops you may like</h4>-->
                            <!--    <div class="widget-body">-->
                            <!--        <ul class="like-page-list-wrapper">-->
                            <!--            <li class="unorder-list">-->
                                            <!-- profile picture end -->
                            <!--                <div class="profile-thumb">-->
                            <!--                    <a href="#">-->
                            <!--                        <figure class="profile-thumb-small">-->
                            <!--                            <img src="assets/images/profile/profile-small-33.jpg" alt="profile picture">-->
                            <!--                        </figure>-->
                            <!--                    </a>-->
                            <!--                </div>-->
                                            <!-- profile picture end -->

                            <!--                <div class="unorder-list-info">-->
                            <!--                    <h3 class="list-title"><a href="#">Travel The World</a></h3>-->
                            <!--                    <p class="list-subtitle"><a href="#">adventure</a></p>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--            <li class="unorder-list">-->
                                            <!-- profile picture end -->
                            <!--                <div class="profile-thumb">-->
                            <!--                    <a href="#">-->
                            <!--                        <figure class="profile-thumb-small">-->
                            <!--                            <img src="assets/images/profile/profile-small-30.jpg" alt="profile picture">-->
                            <!--                        </figure>-->
                            <!--                    </a>-->
                            <!--                </div>-->
                                            <!-- profile picture end -->

                            <!--                <div class="unorder-list-info">-->
                            <!--                    <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>-->
                            <!--                    <p class="list-subtitle"><a href="#">food</a></p>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 scrollable-section" id="main-offers" style="overflow-y: auto;height: 1120px;">
                        
                    </div>

                    <div class="col-lg-3 order-3">
                        <aside class="widget-area">
                            <div class="card widget-item">
                                <h4 class="widget-title">Ads by PinkAd</h4>
                                <div class="widget-body" id="banner-ads">
                                    
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



    <!-- JS ============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
           $(document).ready(function() {
            var baseURL="https://pinkad.pk/portal/"; 
            var ImageBaseURL=" https://pinkad.pk/portal/public/storage/";

            // Shop Details
            var ShopDetailsAPI=baseURL+'api/shop-detail/<?php echo $id ?>';
            fetch(ShopDetailsAPI).then(response => {
                return response.json();
            }).then(ShopData => {
                console.log(ShopData);
                var ShopContent ='<h4 class="widget-title">'+ShopData.name+'<br>'+
                                  '</h4>'+
                                   '<div class="widget-body">'+
                                        '<div class="about-author">'+
                                           '<p>'+ShopData.description+'</p>'+
                                            '<ul class="author-into-list">'+
                                                '<li><a href="#"><i class="bi bi-phone"></i>'+ShopData.contact_number+'</a></li>'+
                                                '<li><a href="#"><i class="bi bi-envelop" style="font-size: 15px;"></i>'+ShopData.seller.web_url+'</a></li>'+
                                                '<li><a href="#"><i class="bi bi-location-pointer"></i>'+ShopData.address+'</a></li>'+
                                            '</ul>'+
                                        '</div>'+
                                   '</div>';
                $('#shop-info').append(ShopContent);
                
                var Logo='<img src='+ImageBaseURL+ShopData.seller.logo+' alt="Business Logo">';
                $('#seller-logo').append(Logo);
                // document.getElementById('seller-cover').style.backgroundImage="url("+ImageBaseURL+ShopData.seller.coverimage+")";
            }).catch(err => {

            });
            // shop Offers
            // var ShopOffersAPI=baseURL+'api/shop-detail/1';
            // fetch(ShopOffersAPI).then(response => {
            //     return response.json();
            // }).then(ShopData => {
            //     var ShopContent ='<h4 class="widget-title">'+ShopData.name+'<br>'+
            //                          '<span style="font-weight:300;font-size:15px">'+ ShopData.branch_name +'</span>'+
            //                       '</h4>'+
            //                        '<div class="widget-body">'+
            //                             '<div class="about-author">'+
            //                                '<p>'+ShopData.description+'</p>'+
            //                                 '<ul class="author-into-list">'+
            //                                     '<li><a href="#"><i class="bi bi-phone"></i>'+ShopData.contact_number+'</a></li>'+
            //                                     '<li><a href="#"><i class="bi bi-envelop" style="font-size: 15px;"></i>'+ShopData.seller.website+'</a></li>'+
            //                                     '<li><a href="#"><i class="bi bi-location-pointer"></i>'+ShopData.address+'</a></li>'+
            //                                 '</ul>'+
            //                             '</div>'+
            //                        '</div>';
            //     $('#shop-info').append(ShopContent);
            // }).catch(err => {

            // });

            // Related Shops

            // offers section
            var SellerOffersAPI = baseURL+'api/shop/offer/<?php echo $id ?>';
            fetch(SellerOffersAPI).then(response => {
                return response.json();
            }).then(data => {
                data.forEach(offer => {
                    var offerContent='<div class="card">'+
                        '<div class="post-title d-flex align-items-center">'+
                            '<div class="profile-thumb">'+
                                '<a href="/shop/'+offer.shop.id+'">'+
                                    '<figure class="profile-thumb-middle">'+
                                        '<img src='+ImageBaseURL+offer.shop.seller.logo+' alt="Business Logo">'+
                                    '</figure>'+
                                '</a>'+
                            '</div>'+
                    
                            '<div class="posted-author">'+
                                '<h6 class="author"><a href="/shop/'+offer.shop.id+'">'+offer.title+' </a></h6>'+
                                '<span class="post-time">20 mints ago</span>'+
                            '</div>'+

                            // '<div class="post-settings-bar">'+
                            //     '<span></span>'+
                            //     '<span></span>'+
                            //     '<span></span>'+
                            //     '<div class="post-settings arrow-shape">'+
                            //         '<ul>'+
                            //         ' <li><button>Copy Link</button></li>'+
                            //             '<li><button>Share Post</button></li>'+
                            //             '<li><button>Contact Store</button></li>'+
                            //         '</ul>'+
                            //     '</div>'+
                            // '</div>'+
                        '</div>'+
                        '<div class="post-content">'+
                            '<p class="post-desc">'+
                                offer.description+
                            '</p>'+
                            '<div class="post-thumb-gallery">'+
                                '<figure class="post-thumb">'+
                                    '<a href="">'+
                                        '<img src='+ImageBaseURL+offer.banner+' alt="post image">'+
                                    '</a>'+
                                '</figure>'+
                            '</div>'+
                            '<div class="post-meta">'+
                                
                                '<ul class="comment-share-meta">'+
                                    '<li>'+
                                        '<button class="post-comment">'+
                                            '<i class="fa-solid fa-chart-simple"></i>'+
                                            '<span>'+offer.reach+'</span>'+
                                    ' </button>'+
                                    '</li>'+
                                    '<li>'+
                                        '<button class="post-comment">'+
                                            '<i class="fa-solid fa-eye"></i>'+
                                            '<span>'+offer.impression+'</span>'+
                                    ' </button>'+
                                    '</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
                    $('#main-offers').append(offerContent);
                });
            }).catch(err => {

            });

        });
        
        var BannersAPI=baseURL+'api/list/banner';
        fetch(BannersAPI).then(response => {
            return response.json();
        }).then(BannerData => {
                BannerData.forEach(Banner => {
                    var BannerContent ='<div class="add-thumb mb-3">'+
                                        '<a href="'+Banner.redirect_url+'">'+
                                            '<img src='+ImageBaseURL+Banner.image+' alt="Ad banner">'+
                                        '</a>'+
                                    '</div>';
                    $('#banner-ads').append(BannerContent);
                });
            }).catch(err => {
            });
    </script>
</body>