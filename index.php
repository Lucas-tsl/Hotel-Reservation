<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LT Hotel - HOME</title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>
    
</head>

<body class="bg-light">

    <?php require('inc/header.php');?>
    
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png"  class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png"  class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png"  class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png"  class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png"  class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Check avaibility form -->
    <div class="container avaibility-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Avaibility</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Child</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
        <div class="row">

            <!-- First -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$2000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Rooom heater
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div> 
            </div>

            <!-- Second -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$2000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Rooom heater
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div> 
            </div>

            <!-- Third -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$2000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Rooom heater
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>     
    </div>


    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Facilities </h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="Wifi-icon">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="Wifi-icon">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="Wifi-icon">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="Wifi-icon">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="Wifi-icon">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Testimonials </h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px" alt="star">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Tempore itaque quas, temporibus eum inventore vel distinctio
                        doloremque in totam corporis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>    
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px" alt="star">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Tempore itaque quas, temporibus eum inventore vel distinctio
                        doloremque in totam corporis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>    
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px" alt="star">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Tempore itaque quas, temporibus eum inventore vel distinctio
                        doloremque in totam corporis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>    
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>            
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe height="350px" class="w-100 rounded"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2746.7794428371612!2d-1.7629802237993644!3d46.4926795642327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4804680f37895185%3A0x136bb9ea7ae6df57!2sRue%20Lucas%2C%2085100%20Les%20Sables-d&#39;Olonne!5e0!3m2!1sfr!2sfr!4v1707170492492!5m2!1sfr!2sfr"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4" >
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel:0665162128" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        06 65 16 21 28
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i>
                            Instagram
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-whatsapp"></i>
                            Whatsapp
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-tiktok"></i>
                            Tik Tok
                        </span>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?>

    <!-- Scripts -->
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Carousel -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true, 
            autoplay: {
                display: 3500, 
                diseableInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1, 
                },
                640: {
                    slidesPerView: 1, 
                },
                768: {
                    slidesPerView: 2, 
                },
                1024: {
                    slidesPerView: 3, 
                },
            }
        });
    </script>

</body>

</html>