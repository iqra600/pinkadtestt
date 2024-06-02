<?php
  $id = $_GET['category_id'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PinkAd - 100% Free Classified Solution</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
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
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- Slick Theme CSS (optional) -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- jQuery (required for Slick Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Carousel JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <link rel="stylesheet" href="vanillaSelectBox.css">
    <style>
        .vsb-menu .multi{
            max-width: 100% !important;
        }
    </style>
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
                               <a href="offers.html" class="button-a"><!--<i class="material-icons">travel_explore</i>-->Offers</a>
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
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
        <!-- Desktop Header -->
        <div class="d-none d-lg-block">
            <div class="header-top-right d-flex align-items-right justify-content-end">
                <a href="sellers.html" class="button-a">Sellers</a> 
                <div class="button-space"></div> <!-- Space between buttons -->
                <a href="offers.html" class="button-a">Offers</a>
                <div class="button-space"></div> <!-- Space between buttons -->
                <div class="dropdown">
                <button class="button-a dropdown-toggle-custom" type="button" id="categoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Categories
                               </button>
                               <div class="dropdown-menu" aria-labelledby="categoryDropdown" id="categoryList">
                                           </div>
                </div>
            </div>
        </div>
    
        <!-- Mobile Header -->
        <div class="mobile-header-wrapper sticky d-block d-lg-none">
            <div class="mobile-header position-relative">
                <div class="mobile-logo">
                    <a href="https://app.pinkad.pk/">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="header-top-right d-flex align-items-right justify-content-end">
                        <div class="button-container-middle">
                            <a href="sellers.html" class="button-a">Sellers</a> 
                            <div class="button-space"></div> <!-- Space between buttons -->
                            <a href="offers.html" class="button-a">Offers</a>
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
            </div>
        </div>
    </header>
    
    <!-- header area end -->

    <main>
        
        <div class="main-wrapper pt-80">
            <div class="container">
            
                <div class="card widget-item mb-3 p-0 d-none d-lg-block position-relative">
                    <img src="assets/images/banner/website-banner-1.jpg" alt="website banner" width="1200" height="180">
                   
                    <!-- Container for the banner image -->
                    <div class="button-container">
                        <a href="https://apps.apple.com/pk/app/pinkad/id6464376188" class="button-1">
                            <div class="button-content">
                                <i class="fab fa-apple" style="font-size: 45px; margin-right: 5px;"></i>
                                <div class="button-text">
                                    <span class="platform-text">Available on<br><b> App Store </b></span>
                                </div>
                            </div>
                        </a>
                        <div class="button-space"></div> <!-- Space between buttons -->
                        <a href="https://play.google.com/store/apps/details?id=com.app.pink_ad" class="button-2">
                            <div class="button-content">
                                <i class="fab fa-google-play" style="font-size: 35px; margin-right: 5px;"></i>
                                <div class="button-text">
                                    <span class="platform-text">Available on<br> <b>Play Store</b></span>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                
                                         </div>
                                         <div class="card widget-item mb-3 p-0 d-block d-lg-none" >
                                            <img id="banner-image" src="assets/images/banner/website-banner-1.jpg" alt="website banner" style="margin-top: 10px; width: 100%; height: auto;">
                                            <div class="button-container-mobile">
                            <a href="https://apps.apple.com/pk/app/pinkad/id6464376188" class="button-1-mobile">
                                <div class="button-content-mobile">
                                    <i class="fab fa-apple" style="font-size: 17px; margin-right: 5px;"></i>
                                    <div class="button-text-mobile">
                                        <span class="platform-text-mobile">Available on<br><b> App Store </b></span>
                                    </div>
                                </div>
                            </a>
                            <div class="button-space"></div> <!-- Space between buttons -->
                            <a href="https://play.google.com/store/apps/details?id=com.app.pink_ad" class="button-2-mobile">
                                <div class="button-content-mobile">
                                    <i class="fab fa-google-play" style="font-size: 15px; margin-right: 5px; "></i>
                                    <div class="button-text-mobile">
                                        <span class="platform-text-mobile">Available on<br> <b> Play Store</b></span>
                                    </div>
                                </div>
                            </a>
                           
                        </div>
                        </div> 
                    

                <div class="row">
                    <div class="col-lg-3 order-3 order-lg-1 d-none d-lg-block">
                        <aside class="widget-area">
                            <div class="card widget-item">
                                <h4 class="widget-title">Stationery & Craft</h4>
                                <div class="widget-body" id="offer-container5">
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Home & Office Furniture</h4>
                                <div class="widget-body" id="offer-container4">
                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="modal fade" id="textbox" aria-labelledby="textbox">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Offers For You</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="filterform">  
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row ml-2">
                                                    <!--<div class="demo-zone mb-3" id="select-cat">-->
                                                    <!--    <label> Category</label>-->
                                                    <!--    <div id="catsMulti" multiple size="5"></div>-->
                                                    <!--</div> -->
                                                 
                                                    <div class="demo-zone mb-3" id="select-city">
                                                        <label> Your City</label>
                                                        <div id="cityMulti" multiple size="4" class="" onchange="citySelected()"></div>
                                                    </div>
    
                                                    <div class="demo-zone mb-3" id="select-area">
                                                        <label> Your Area</label>
                                                        <div id="areamulti" multiple size="4" class=""></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                            <button type="submit" class="post-share-btn">Filter</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                        <!-- share box end -->
                        <div class="scrollable-section d-none d-lg-block" id="main-offers" style="overflow-y: auto;height: 1500px;">
                        </div>
                        

                    </div>
                    <div class="scrollable-section d-lg-none" id="main-offers2" style="overflow-y: auto;height: 1500px;">
                </div>

                    <div class="col-lg-3 order-3 d-none d-lg-block">
                        <aside class="widget-area">
                            <div class="card widget-item">
                                <h4 class="widget-title">Foods </h4>
                                <div class="widget-body" id="offer-container3">
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title"> Others</h4>
                                <div class="widget-body" id="offer-container6">
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

      <!-- footer area start -->
      <!-- <footer class="d-none d-lg-block">
        <div class="footer-area reveal-footer">
            <div class="footer-wrapper">
                <div class="card card-small active-profile-wrapper">
                    <div class="row" >
                        <div class="col-4 pl-5">
                            <img src="assets/images/logo/logo.png" width="40%">
                        </div>
                        <div class="col-4 text-center">
                            hello
                        </div>

                        <div class="col-4 text-center">
                            hello
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- footer area end -->
    <!-- footer area start -->

    <!-- JS -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
    <script src="vanillaSelectBox.js?v1.0.3"></script>

    <!-- Multi Select Plugin -->
    <script>
        /* Categories dropdown */
// Fetch categories from the API
// Fetch categories from the API
fetch('https://pinkad.pk/portal/api/categories')
    .then(response => response.json())
    .then(data => {
        const categoryListDesktop = document.getElementById('categoryList');
        const categoryListMobile = document.getElementById('mobileCategoryList');

        // Iterate over categories and create dropdown items
        data.forEach(category => {
            const listItem = document.createElement('a');
            listItem.classList.add('dropdown-item');
            listItem.href = '/offer.php?category_id=' + category['id']; // Add category URL if available
            listItem.textContent = category.name;

            // Clone the list item for mobile dropdown
            const listItemMobile = listItem.cloneNode(true);

            categoryListDesktop.appendChild(listItem);
            categoryListMobile.appendChild(listItemMobile);
        });
    })
    .catch(error => console.error('Error fetching categories:', error));


    //data fetching


        var baseURL="https://pinkad.pk/portal/";
        var ImageBaseURL=" https://pinkad.pk/portal/public/storage/";
         
        var filterform = document.getElementById("filterform");
        filterform.addEventListener("submit", submitForm);

        function submitForm(e) {
         e.preventDefault();
         var filterform = document.getElementById("filterform");
         var formData = new FormData(filterform); 
         
         fetch("https://pinkad.pk/portal/api/offer-filter?", {
            method: "GET",
            body: formData,
         })
            .then((response) => {
              if (!response.ok) {
                throw new Error("network returns error");
              }
              return response.json();
            })
            .then((resp) => {
              let respdiv = document.createElement("pre");
              respdiv.innerHTML = JSON.stringify(resp, null, 2);
              myform.replaceWith(respdiv);
              console.log("resp from server ", resp);
            })
            .catch((error) => {
              // Handle error
              console.log("error ", error);
            });
        }
        
        function citySelected(){
            var CityData=document.getElementById("cityMulti");
            var CityID = CityData.value;
            // var CityName = CityData.options[CityData.selectedIndex].text;
            console.log(CityID);
        }
  
        $(document).ready(function() {
    // offers section
    var baseURL = "https://pinkad.pk/portal/";
    var ImageBaseURL = "https://pinkad.pk/portal/public/storage/";
    var categoryId = <?php echo $id; ?>; // Get the category ID from PHP
    var offerAPI = baseURL + 'api/offer-filter?category_id=' + categoryId;
    fetch(offerAPI)
    .then(response => {
        return response.json();
    })
    .then(data => {
        var offerContainer = $('#main-offers');
        var row;
        data.forEach((offer, index) => {
            if (index % 2 === 0) {
                // Start a new row for every second offer
                row = $('<div class="row mb-4"></div>');
                offerContainer.append(row);
            }

            // Generate HTML for each offer card
            var offerContent = `<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-small">
                        <div class="post-thumb-gallery">
                            <figure class="post-thumb">
                                <img src="${ImageBaseURL}${offer.banner}" alt="post image" style="object-fit: contain;">
                            </figure>
                            <div class="post-title d-flex align-items-center">
                                <div class="profile-thumb">
                                    <a href="${baseURL}seller/${offer.shop.id}">
                                        <figure class="profile-thumb-middle">
                                            <img src="${ImageBaseURL}${offer.shop.seller.logo}" alt="Business Logo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="posted-author">
                                    <h6 class="author"><a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">${offer.shop.name}</a></h6>
                                </div>
                            </div>
                            <div class="post-content">
                            <span class="title">${offer.title.substring(0, 50)}</span>
                                <p class="post-desc">${offer.description.substring(0, 40)}</p>
                                <a href="https://wa.me/${offer.shop.seller.whatsapp}" target="_blank" class="chat-with-seller">
                                <i class="fab fa-whatsapp" alt="Chat with seller" style="color: green; margin-bottom: 1px;"></i> Chat with Seller
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>`;

            // Append the offer card to the current row
            row.append(offerContent);
        });
    })
    .catch(err => {
        console.error(err);
    });

    //for mobile view
    var baseURL = "https://pinkad.pk/portal/";
    var ImageBaseURL = "https://pinkad.pk/portal/public/storage/";
    var categoryId = <?php echo $id; ?>; // Get the category ID from PHP
    var offerAPI = baseURL + 'api/offer-filter?category_id=' + categoryId;
    fetch(offerAPI)
    .then(response => {
        return response.json();
    })
    .then(data => {
        var offerContainer = $('#main-offers2');
        var row;
        data.forEach((offer, index) => {
            if (index % 2 === 0) {
                // Start a new row for every second offer
                row = $('<div class="row mb-4"></div>');
                offerContainer.append(row);
            }

            // Generate HTML for each offer card
            var offerContent= `<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card-small">
                        <div class="post-thumb-gallery">
                            <figure class="post-thumb">
                                <img src="${ImageBaseURL}${offer.banner}" alt="post image">
                            </figure>
                            <div class="post-title d-flex align-items-center">
                                <div class="profile-thumb">
                                    <a href="${baseURL}seller/${offer.shop.id}">
                                        <figure class="profile-thumb-middle">
                                            <img src="${ImageBaseURL}${offer.shop.seller.logo}" alt="Business Logo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="posted-author">
                                    <h6 class="author"><a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">${offer.shop.name}</a></h6>
                                </div>
                            </div>
                            <div class="post-content">
                                <span class="title">${offer.title.substring(0, 50)}</span>
                                <p class="post-desc">${offer.description.substring(0, 40)}</p>
                                <a href="https://wa.me/${offer.shop.seller.whatsapp}" target="_blank" class="chat-with-seller">
    <i class="fab fa-whatsapp" alt="Chat with seller" style="color:green;"></i> Chat with Seller 
</a>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>`;


            // Append the offer card to the current row
            row.append(offerContent);
        });
    })
    .catch(err => {
        console.error(err);
    });
            
    var sliderAPI = baseURL + 'api/list/banner';

// Fetch images from the API
fetch(sliderAPI)
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(banners => {
        console.log('Received banners:', banners); // Log the received banners

        // Map banners to slide elements
        var slides = banners.map(banner => {
            return '<div><a href="' + banner.redirect_url + '"><img src="' + ImageBaseURL + banner.image + '" alt="Banner Image"></a></div>';
        });

        // Append slides to the slider container
        $('.slider').append(slides);

        // Initialize Slick Carousel with fetched banners
        $('.slider').slick({
            slidesToShow: 2, // Display 2 images at a time
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768, // For tablets and small desktops
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 414, // For smaller mobile devices
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    })
    .catch(error => {
        // Handle error
        console.error('Error fetching banners:', error);
    });

     //Mens Fashion & Clothing
     var OffersAPI = baseURL + 'api/offer-filter?category_id=13';
fetch(OffersAPI)
    .then(response => {
        return response.json();
    })
    .then(offersData => {
        offersData = shuffleArray(offersData);
        var offerCounter = 0;
        var rowContent = '<div class="row">';
        offersData.forEach(offer => {
            if (offerCounter < 6) {
                if (offerCounter % 2 === 0 && offerCounter !== 0) {
                    rowContent += '</div><div class="row">';
                }
                var offerContent = `<div class="col-md-6">
                    <div class="add-thumb mb-3">
                        <a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">
                            <img src="${ImageBaseURL}${offer.banner}" alt="Ad Banner" style="width:70px; height:70px;">
                        </a>
                    </div>
                </div>`;
                rowContent += offerContent;
                offerCounter++;
            }
        });
        rowContent += '</div>';
        $('#offer-container5').append(rowContent);

        // Create a div for the "See More" link and align it to the right
        var seeMoreDiv = $('<div class="text-right mt-3"></div>');
        var seeMoreLink = '<a href="/offer.php?category_id=13">See More>></a>';
        seeMoreDiv.append(seeMoreLink);
        $('#offer-container5').append(seeMoreDiv);
    })
    .catch(err => {
        console.error('Error fetching offers:', err);
    });





            //Kids Collection
            var OffersAPI = baseURL + 'api/offer-filter?category_id=17';
fetch(OffersAPI).then(response => {
    return response.json();
}).then(offersData => {
    offersData = shuffleArray(offersData);

    var offerCounter = 0;
    var rowContent = '<div class="row">';
    offersData.forEach(offer => {
        if (offerCounter < 6) {
            if (offerCounter % 2 === 0 && offerCounter !== 0) {
                rowContent += '</div><div class="row">';
            }
            var offerContent =  `<div class="col-md-6">
                <div class="add-thumb mb-3">
                    <a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">
                        <img src="${ImageBaseURL}${offer.banner}" alt="Ad Banner" style="width:70px; height:70px;">
                </a>
                </div>
              </div>`
            rowContent += offerContent;
            offerCounter++;
        }
    });
    rowContent += '</div>';
    $('#offer-container4').append(rowContent);
    var seeMoreDiv = $('<div class="text-right mt-3"></div>');
        var seeMoreLink = '<a href="/offer.php?category_id=17">See More>></a>';
        seeMoreDiv.append(seeMoreLink);
        $('#offer-container4').append(seeMoreDiv);
}).catch(err => {
    console.error('Error fetching offers:', err);
});

            //Women Fashion & Clothing
            var OffersAPI = baseURL + 'api/offer-filter?category_id=11';
fetch(OffersAPI).then(response => {
    return response.json();
}).then(offersData => {
    offersData = shuffleArray(offersData);

    var offerCounter = 0;
    var rowContent = '<div class="row">';
    offersData.forEach(offer => {
        if (offerCounter < 6) {
            if (offerCounter % 2 === 0 && offerCounter !== 0) {
                rowContent += '</div><div class="row">';
            }
            var offerContent =  `<div class="col-md-6">
                <div class="add-thumb mb-3">
                    <a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">
                        <img src="${ImageBaseURL}${offer.banner}" alt="Ad Banner" style="width:70px; height:70px;">
                </a>
                </div>
              </div>`
            rowContent += offerContent;
            offerCounter++;
        }
    });
    rowContent += '</div>';
    $('#offer-container3').append(rowContent);
    var seeMoreDiv = $('<div class="text-right mt-3"></div>');
        var seeMoreLink = '<a href="/offer.php?category_id=11">See More>></a>';
        seeMoreDiv.append(seeMoreLink);
        $('#offer-container3').append(seeMoreDiv);
}).catch(err => {
    console.error('Error fetching offers:', err);
});

//Skin and Hair Care
var OffersAPI = baseURL + 'api/offer-filter?category_id=25';
fetch(OffersAPI).then(response => {
    return response.json();
}).then(offersData => {
    offersData = shuffleArray(offersData);

    var offerCounter = 0;
    var rowContent = '<div class="row">';
    offersData.forEach(offer => {
        if (offerCounter < 6) {
            if (offerCounter % 2 === 0 && offerCounter !== 0) {
                rowContent += '</div><div class="row">';
            }
            var offerContent =  `<div class="col-md-6">
                <div class="add-thumb mb-3">
                    <a href="/seller.php?seller_id=${offer.shop.seller_id}&shop_id=${offer.shop.id}">
                        <img src="${ImageBaseURL}${offer.banner}" alt="Ad Banner" style="width:70px; height:70px;">
                </a>
                </div>
              </div>`
            rowContent += offerContent;
            offerCounter++;
        }
    });
    rowContent += '</div>';
    $('#offer-container6').append(rowContent);
    var seeMoreDiv = $('<div class="text-right mt-3"></div>');
        var seeMoreLink = '<a href="/offer.php?category_id=25">See More>></a>';
        seeMoreDiv.append(seeMoreLink);
        $('#offer-container6').append(seeMoreDiv);
}).catch(err => {
    console.error('Error fetching offers:', err);
});

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}
            // category dropdown in offers popup
            // let categories= [];
            // var j=0;
            // var CategoriesAPI=baseURL+'api/category';
            // fetch(CategoriesAPI).then(response => {
            //   return response.json();
            // }).then(CategoryData => {
            //     CategoryData.forEach(Category => {
            //         categories[j]=Category.name;
            //         j++;
            //     });

            //     let select2 = document.getElementById("catsMulti");
            //     for (var k = 0;k <categories.length;k++) {
            //         var option = document.createElement("option");
            //         option.value = categories[k];
            //         option.text = categories[k];    
            //         select2.appendChild(option);
            //     }
            //     let selectBox = null;
            //     let selectBox2 = null;
            //     let selectBox3 = null;
            //     function setEnable(id, isEnabled) {
            //         if (id == "catsMulti" && selectBox2 != null) {
            //             if (isEnabled) {
            //                 selectBox2.enable();
            //             } else {
            //                 selectBox2.disable();
            //             }
            //         }
            //     }
        
            //     function init(id) {
            //         if (id == "catsMulti") {
            //             selectBox2 = new vanillaSelectBox("#catsMulti", {"disableSelectAll": true, "maxHeight": 200,"itemsSeparator":", ", "search": true ,"translations": { "all": "All", "items": "items","selectAll":"Check All","clearAll":"Clear All"}});
            //             let zone = document.getElementById("select-cat");
            //         }
            //     }
            //     function setValues(id, value) {
            //         if (id == "catsMulti" && selectBox2 != null) {
            //             selectBox2.setValue(value);
            //         }
            //     }
            //     function getValues(id) {
            //         let result = [];
            //         let collection = document.querySelectorAll("#" + id + " option");
            //         collection.forEach(function (x) {
            //             if (x.selected) {
            //                 result.push(x.value);
            //             }
            //         });
            //         return result;
            //     }
            //     init("catsMulti");
            // }).catch(err => {

            // }); 

            // cities dropdown in offer popup
            let cities= [];
            var l=0;
            var CitiesAPI=baseURL+'api/cities-list';
            fetch(CitiesAPI).then(response => {
               return response.json();
            }).then(CityData => {
                CityData.forEach(City => {
                    cities[l]=City.name;
                    l++;
                });

                let selectCity = document.getElementById("cityMulti");
                for (var m = 0;m < cities.length;m++) {
                    var Citiesoption = document.createElement("option");
                    Citiesoption.value = cities[m];
                    Citiesoption.text = cities[m];    
                    selectCity.appendChild(Citiesoption);
                }
                let citiesSelectBox = null;
                let citiesSelectBox2 = null;
                let citiesSelectBox3 = null;
                function setEnable(id, isEnabled) {
                    if (id == "cityMulti" && citiesSelectBox2 != null) {
                        if (isEnabled) {
                            citiesSelectBox2.enable();
                        } else {
                            citiesSelectBox2.disable();
                        }
                    }
                }

                function init(id) {
                    if (id == "cityMulti") {
                        citiesSelectBox2 = new vanillaSelectBox("#cityMulti", {"disableSelectAll": true, "maxHeight": 200,"itemsSeparator":", ", "search": true ,"translations": { "all": "All", "items": "items","selectAll":"Check All","clearAll":"Clear All"}});
                        let zone = document.getElementById("select-city");
                    }
                }
                function setValues(id, value) {
                    if (id == "cityMulti" && citiesSelectBox2 != null) {
                        areasSelectBox2.setValue(value);
                    }
                }
                function getValues(id) {
                    let result = [];
                    let collection = document.querySelectorAll("#" + id + " option");
                    collection.forEach(function (x) {
                        if (x.selected) {
                            result.push(x.value);
                        }
                    });
                    return result;
                }
                init("cityMulti");
            }).catch(err => {

            }); 

            // areas dropdown in offer popup
            let areas= [];
            var n=0;
            var AreasAPI=baseURL+'api/cities-list';
            fetch(AreasAPI).then(response => {
               return response.json();
            }).then(AreaData => {
                AreaData.forEach(Area => {
                    areas[n]=Area.name;
                    n++;
                });

                let selectArea = document.getElementById("areamulti");
                for (var o = 0;o < cities.length;o++) {
                    var Areasoption = document.createElement("option");
                    Areasoption.value = cities[o];
                    Areasoption.text = cities[o];    
                    selectArea.appendChild(Areasoption);
                }
                let areasSelectBox = null;
                let areasSelectBox2 = null;
                let areasSelectBox3 = null;
                function setEnable(id, isEnabled) {
                    if (id == "areamulti" && areasSelectBox2 != null) {
                        if (isEnabled) {
                            areasSelectBox2.enable();
                        } else {
                            areasSelectBox2.disable();
                        }
                    }
                }

                function init(id) {
                    if (id == "areamulti") {
                        areasSelectBox2 = new vanillaSelectBox("#areamulti", {"disableSelectAll": true, "maxHeight": 200, "itemsSeparator":", ", "search": true ,"translations": { "all": "All", "items": "items","selectAll":"Check All","clearAll":"Clear All"}});
                        let zone = document.getElementById("select-city");
                    }
                }
                function setValues(id, value) {
                    if (id == "areamulti" && citiesSelectBox2 != null) {
                        areasSelectBox2.setValue(value);
                    }
                }
                function getValues(id) {
                    let result = [];
                    let collection = document.querySelectorAll("#" + id + " option");
                    collection.forEach(function (x) {
                        if (x.selected) {
                            result.push(x.value);
                        }
                    });
                    return result;
                }
                init("areamulti");
            }).catch(err => {

            }); 
        });
       
    
        
    </script>
</body>

