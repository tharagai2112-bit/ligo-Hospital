<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | ligo </title>
    <link rel="icon" href="/assets/images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ligo Hospital" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <?php include 'includecss.php'; ?>

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
<style>
    .speciality-section img:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
</style>

<style>
    .specialties-section {
        background-color: #e6fbff;
        /* light blue bg */
        padding: 60px 0;
    }

    .specialty-card {
        border-radius: 16px;
        background-color: #ffffff;
        padding: 24px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        height: 100%;
    }

    .specialty-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
    }

    .specialty-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        /* background-color: #e6fbff; */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #00a6b8;
        margin-right: 16px;
    }

    .specialty-name {
        margin: 0;
        font-weight: 600;
        font-size: 1.05rem;
        color: #00495a;
    }

    .specialties-btn {
        background-color: #00a6b8;
        color: #ffffff;
        border-radius: 999px;
        padding: 10px 28px;
        border: none;
        font-weight: 500;
    }

    .specialties-btn:hover {
        background-color: #008896;
        color: #ffffff;
    }
    .icon-gradient-index {
        font-size: 32px;
        background: linear-gradient(135deg, #00b4db 0%, #0083b0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: transform 0.3s ease;
    }
    .specialty-card:hover .icon-gradient-index {
        transform: scale(1.1);
    }
</style>

<body>


    <div id="wrapper">
        <?php include 'header.php'; ?>

        <!-- content begin -->
        <main>
            <div id="top"></div>

           <section class="text-light jarallax relative">
    <img src="/assets/images/background/6.webp" class="jarallax-img" alt="">

    <div class="container relative z-2">
        <div class="row g-4">
            <div class="spacer-double"></div>

            <!-- LEFT: TEXT -->
            <div class="col-lg-6">
                <!-- Make this dynamic via JS -->
                <h1 class="split js-hero-title">
                    Your Digestive Health Deserves Trusted Gastro Expertise
                </h1>

                <div class="spacer-single"></div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-3 wow fadeInRight" data-wow-delay="1.6s">
                        <a class="btn-main fx-slide bg-white button-text-color" href="#">
                            <span>Book Now</span>
                        </a>
                    </div>
                </div>

                <div class="spacer-double sm-hide"></div>
                <div class="spacer-double sm-hide"></div>
                <div class="spacer-double sm-hide"></div>
            </div>

            <!-- RIGHT: IMAGE -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-end position-absolute">
                    <img class="position-relative banner-image fw-600 fs-14 lh-1-5 wow fadeInRight js-hero-image"
                         src="/assets/images/banner/ligo-Dr-Bala-Murugan.png"
                         alt="Expert medical team">
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM STATS – unchanged -->
    <div class="abs bottom-0 w-100 z-2 sm-hide">
        <div class="col-lg-12">
            <div class="bg-blur p-40 m-4 rounded-1">
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6 text-center p-2">
                        <div class="de_count wow fadeInRight" data-wow-delay=".0s">
                            <h3 class="fs-40 mb-0"><span>65250</span>+</h3>
                            Medical Cases Handled
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center p-2">
                        <div class="de_count wow fadeInRight" data-wow-delay=".2s">
                            <h3 class="fs-40 mb-0"><span>23160</span>+</h3>
                            Recovered Patients
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center p-2">
                        <div class="de_count wow fadeInRight" data-wow-delay=".4s">
                            <h3 class="fs-40 mb-0"><span>150</span>+</h3>
                            Certified Specialists
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center p-2">
                        <div class="de_count wow fadeInRight" data-wow-delay=".6s">
                            <h3 class="fs-40 mb-0"><span>20</span>+</h3>
                            Years of Expertise
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gradient-edge-bottom h-100 color"></div>
    <div class="sw-overlay op-3"></div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Define your 3 slides here
    const heroSlides = [
        {
            title: "Your Digestive Health Deserves Trusted Gastro Expertise",
            image: "/assets/images/banner/ligo-Dr-Bala-Murugan.png",
            alt: "Expert medical care and trusted specialists"
        },
        {
            title: "Trusted Women’s Health Specialists For Confident Care",
            image: "/assets/images/banner/ligo-Dr-Haveena-Thangamani.png",
            alt: "Family-focused multi-speciality care"
        },
        // {
        //     title: "Your Health. Our Priority. Always Expert Care.",
        //     image: "/assets/images/team/banndoc3.png",
        //     alt: "Advanced diagnostics and personalised treatment"
        // }
    ];

    const titleEl = document.querySelector('.js-hero-title');
    const imageEl = document.querySelector('.js-hero-image');

    if (!titleEl || !imageEl) return;

    let currentIndex = 0;

    function setHeroSlide(index) {
        const slide = heroSlides[index];
        // Simple fade effect (optional)
        titleEl.style.opacity = 0;
        imageEl.style.opacity = 0;

        setTimeout(function () {
            titleEl.textContent = slide.title;
            imageEl.src = slide.image;
            imageEl.alt = slide.alt || slide.title;

            titleEl.style.opacity = 1;
            imageEl.style.opacity = 1;
        }, 300);
    }

    // Initial load
    setHeroSlide(currentIndex);

    // Auto-rotate every 6 seconds
    setInterval(function () {
        currentIndex = (currentIndex + 1) % heroSlides.length;
        setHeroSlide(currentIndex);
    }, 6000);
});
</script>

<style>
    .js-hero-title,
    .js-hero-image {
        transition: opacity 0.3s ease;
    }
</style>



            <section style="background-size: cover; background-repeat: no-repeat;">
                <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row g-4 align-items-center"
                        style="background-size: cover; background-repeat: no-repeat;">
                        <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="rounded-1 w-90 overflow-hidden wow zoomIn animated animated"
                                    style="background-size: cover; background-repeat: no-repeat; visibility: visible;">
                                    <img src="/assets/images/misc/l1.png" class="w-100 wow scaleIn animated animated"
                                        alt="" style="visibility: visible;">
                                </div>
                                <div class="rounded-1 w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn animated animated"
                                    data-wow-delay=".2s"
                                    style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.2s;">
                                    <img src="/assets/images/misc/s1.png" class="w-100 wow scaleIn animated animated"
                                        data-wow-delay=".2s" alt="" style="visibility: visible; animation-delay: 0.2s;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="ps-lg-3" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="subtitle id-color wow fadeInUp animated animated" data-wow-delay=".2s"
                                    style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0.2s;">
                                    Our Mission and vision</div>
                                <h2>Caring for Health, Enhancing Your Well-Being</h2>
                                <p class="mb-0 wow fadeInUp animated animated" data-wow-delay=".6s"
                                    style="visibility: visible; animation-delay: 0.6s;">
                                    We are a trusted multi-speciality healthcare provider dedicated to keeping your
                                    health strong and protected. With years of expertise in clinical care, advanced
                                    treatments and modern diagnostics, we blend compassion with innovation to safeguard
                                    your well-being. From routine health checkups to specialized medical services, our
                                    mission is simple — better care that helps you live life’s moments with greater
                                    comfort and confidence every day.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="spacer-double" style="background-size: cover; background-repeat: no-repeat;"></div>


                </div>
            </section>


            <section class="relative jarallax text-light">
                <div class="gradient-edge-bottom color h-100"></div>
                <img src="/assets/images/background/2.png" class="jarallax-img" alt="Eye Clinic Process">
                <div class="sw-overlay op-4"></div>
                <div class="container relative z-2">
                    <div class="row g-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp">Our Process</div>
                            <h2 class="split" data-wow-delay=".2s">Clear Steps to Better Care</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-3 de-step de-step-arrow wow fadeInUp" data-wow-delay="0s">
                            <div class="de-step-icon bg-white id-color">
                                <i class="fas fa-calendar-check fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Book Appointment</h4>
                            <p>Book your appointment online or by phone with our friendly staff.</p>
                        </div>

                        <div class="col-6 col-md-3 de-step de-step-arrow wow fadeInUp" data-wow-delay="0.2s">
                            <div class="de-step-icon bg-white id-color">
                                <i class="fas fa-eye fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Medical Evaluation</h4>
                            <p>Receive a detailed health check with modern diagnostic systems.</p>
                        </div>

                        <div class="col-6 col-md-3 de-step de-step-arrow wow fadeInUp" data-wow-delay="0.4s">
                            <div class="de-step-icon bg-white id-color">
                                <i class="fas fa-glasses fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Personalized Solutions</h4>
                            <p>Get personalized recommendations for tests, medicine or treatment.</p>
                        </div>

                        <div class="col-6 col-md-3 de-step wow fadeInUp" data-wow-delay="0.6s">
                            <div class="de-step-icon bg-white id-color">
                                <i class="fas fa-heartbeat fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Ongoing Care</h4>
                            <p>Enjoy improved health and ongoing care with regular follow-ups.</p>
                        </div>
                    </div>


                </div>
            </section>

            <section class="specialties-section">
                <div class="container">
                    <!-- Heading -->
                    <div class="text-center mb-5">
                        <h2 class="fw-bold mb-2">Explore Our Specialties</h2>
                        <p class="mb-0 text-muted">
                            We provide a wide range of medical services to meet the needs of every patient.
                        </p>
                    </div>

                    <!-- Cards -->
                    <div class="row g-4 mb-4">
                        <!-- Card 1: Cardiology -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="cardiology.php" class="text-decoration-none">
                                <div class="specialty-card d-flex align-items-center">
                                    <div class="specialty-icon">
                                        <i class="fa-solid fa-heart-pulse icon-gradient-index"></i>
                                    </div>
                                    <h3 class="specialty-name">Cardiology</h3>
                                </div>
                            </a>
                        </div>

                        <!-- Card 2: Gastroenterology -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-vials icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Gastroenterology</h3>
                            </div>
                        </div>

                        <!-- Card 3: Obstetrics -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-venus icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Obstetrics</h3>
                            </div>
                        </div>

                        <!-- Card 4: Fertility -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-baby icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Fertility</h3>
                            </div>
                        </div>

                        <!-- Card 5: Orthopedic -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-bone icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Orthopedic</h3>
                            </div>
                        </div>

                        <!-- Card 6: Paediatrics -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-children icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Paediatrics</h3>
                            </div>
                        </div>

                        <!-- Card 7: Neurosurgery -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-brain icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Neurosurgery</h3>
                            </div>
                        </div>

                        <!-- Card 8: Emergency Care -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="specialty-card d-flex align-items-center">
                                <div class="specialty-icon">
                                    <i class="fa-solid fa-truck-medical icon-gradient-index"></i>
                                </div>
                                <h3 class="specialty-name">Emergency Care</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="text-center">
                        <button class="specialties-btn">
                           View All Specialties
                        </button>
                    </div>
                </div>
            </section>

            <!-- <section class="pt-5 pb-5 speciality-section">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <span class="subtitle text-center">Departments</span>
                        <h2 class="split pb-5 text-center">
                                Specialities
                            </h2>
                        <div class="col-lg-3">
                            <img class="img-fluid w-75 rounded-circle" src="/assets/images/speciality/heart.png" alt="img">
                            <p class="h5 pt-3 text-black">Liver Surgery</p>
                        </div>
                         <div class="col-lg-3">
                             <img class="img-fluid w-75 rounded-circle" src="/assets/images/speciality/large-intestine.png" alt="img">
                             <p class="h5 pt-3 text-black">Laparoscopic Surgery</p>
                        </div>
                         <div class="col-lg-3">
                             <img class="img-fluid w-75 rounded-circle" src="/assets/images/speciality/pharmacy.png" alt="img">
                             <p class="h5 pt-3 text-black">Oncologists</p>
                        </div>
                         <div class="col-lg-3">
                             <img class="img-fluid w-75 rounded-circle" src="/assets/images/speciality/stomach.png" alt="img">
                             <p class="h5 pt-3 text-black">Coloproctologist</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="bg-color-op-2 relative">
                <div class="gradient-edge-top color op-8 h-100"></div>
                <div class="container relative z-2">
                    <div class="row mb-3 g-4 align-items-center justify-content-between">
                        <div class="col-lg-6 text-light">
                            <div class="uptitle wow fadeInUp">Testimonials</div>
                            <h2 class="split">What Our Patients Are Saying</h2>
                            <p>From routine health checks to advanced treatments, our hospital is dedicated to helping
                                patients achieve strong, lasting wellness with compassionate care.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="de-custom-nav d-flex flex-end" data-target="#testimonial-carousel">
                                    <div class="d-prev circle"></div>
                                    <div class="d-next circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-12">
                            <div class="row">
                                <div id="testimonial-carousel" class="owl-carousel owl-theme owl-2-dots wow fadeInUp">
                                    <div class="item">
                                        <div class="bg-white relative rounded-1 p-40">
                                            <i class="fs-32 icofont-quote-left absolute start-40px id-color"></i>
                                            <div class="ps-5">
                                                <p>"I brought my son for a health check and the staff made him feel so
                                                    relaxed. The doctor was gentle, caring and gave us a clear plan to
                                                    support his health needs at school."</p>
                                                <div class="de-rating-ext mb-2">
                                                    <span class="d-stars">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="ms-2 text-white">5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4 align-items-center">
                                            <img class="w-50px circle me-3" alt="" src="images/testimonial/1.webp">
                                            <div class="mt-2">
                                                <div class="text-dark fw-bold lh-1">Siddiq</div>
                                                <small>15 March 2025</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="bg-white relative rounded-1 p-40">
                                            <i class="fs-32 icofont-quote-left absolute start-40px id-color"></i>
                                            <div class="ps-5">
                                                <p>"The doctor was very patient and explained my reports in detail. I
                                                    finally received the right treatment and my recovery has completely
                                                    improved my daily life."</p>
                                                <div class="de-rating-ext mb-2">
                                                    <span class="d-stars">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="ms-2 text-white">5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4 align-items-center">
                                            <img class="w-50px circle me-3" alt="" src="images/testimonial/2.webp">
                                            <div class="mt-2">
                                                <div class="text-dark fw-bold lh-1">Bharani</div>
                                                <small>2 February 2025</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="bg-white relative rounded-1 p-40">
                                            <i class="fs-32 icofont-quote-left absolute start-40px id-color"></i>
                                            <div class="ps-5">
                                                <p>"The staff were kind and explained my condition clearly and fully so
                                                    I finally got the right care and my recovery has greatly improved
                                                    the quality of my life."</p>
                                                <div class="de-rating-ext mb-2">
                                                    <span class="d-stars">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="ms-2 text-white">5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4 align-items-center">
                                            <img class="w-50px circle me-3" alt="" src="images/testimonial/3.webp">
                                            <div class="mt-2">
                                                <div class="text-dark fw-bold lh-1">Mathi</div>
                                                <small>20 January 2025</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <div class="bg-white relative rounded-1 p-40">
                                            <i class="fs-32 icofont-quote-left absolute start-40px id-color"></i>
                                            <div class="ps-5">
                                                <p>"The diagnostic equipment was modern and very accurate. The doctors explained everything clearly and gave me confidence in my eye health and ongoing treatment plan."</p>
                                                <div class="de-rating-ext mb-2">
                                                    <span class="d-stars">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="ms-2 text-white">5.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4 align-items-center">
                                            <img class="w-50px circle me-3" alt="" src="images/testimonial/4.webp">
                                            <div class="mt-2">
                                                <div class="text-dark fw-bold lh-1">test</div>
                                                <small>8 December 2024</small>
                                            </div>
                                        </div>
                                    </div> -->
                                </div><!-- end carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="subtitle id-color">FAQ</div>
                            <h2 class="split">
                                Everything You Should Know About Eye Care
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="de-tab">
                                <ul class="d-tab-nav mb-4">
                                    <li class="active-tab">Appointments & Bookings</li>
                                    <li>Treatments & Procedures</li>
                                </ul>
                                <ul class="d-tab-content">
                                    <li>
                                        <div class="accordion">
                                            <div class="accordion-section">
                                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                                    How do I book an appointment?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-a1">
                                                    You can book online through our website or call our reception desk.
                                                    Same-day emergency appointments may be available.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                                    Do I need a referral to see an optometrist?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-a2">
                                                    No referral is needed for routine eye exams. For specialized care, a
                                                    referral from your doctor may be required.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                                    How often should I have my eyes checked?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-a3">
                                                    Adults should schedule an eye exam every 1–2 years, while children
                                                    and seniors may require more frequent visits.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                                    How long does an eye exam take?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-a4">
                                                    A comprehensive eye exam usually takes 30–45 minutes, depending on
                                                    the tests performed.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-a5">
                                                    What should I bring to my appointment?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-a5">
                                                    Please bring your ID, insurance card, current glasses or contact
                                                    lenses, and a list of any medications you are taking.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="accordion">
                                            <div class="accordion-section">
                                                <div class="accordion-section-title" data-tab="#accordion-b1">
                                                    Do you provide laser eye surgery?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-b1">
                                                    Yes, we offer LASIK consultations and work with trusted surgeons for
                                                    corrective eye surgery options.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-b2">
                                                    What treatments are available for dry eyes?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-b2">
                                                    We provide artificial tears, prescription medications, and advanced
                                                    therapies such as punctal plugs.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-b3">
                                                    Can I get prescription glasses on the same day?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-b3">
                                                    In many cases, yes. We have an in-house optical lab that allows for
                                                    same-day or next-day glasses service.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-b4">
                                                    Do you treat eye diseases like glaucoma or cataracts?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-b4">
                                                    Yes, our clinic diagnoses and manages glaucoma, cataracts, macular
                                                    degeneration, and other eye conditions.
                                                </div>
                                                <div class="accordion-section-title" data-tab="#accordion-b5">
                                                    Are contact lenses safe for children?
                                                </div>
                                                <div class="accordion-section-content" id="accordion-b5">
                                                    Yes, with proper care and hygiene, contact lenses are safe for
                                                    children as young as 10–12 years old.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative">
                <div class="container relative z-2">
                    <div class="row g-4 mb-2 justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="subtitle s2 wow fadeInUp mb-2">Insights</div>
                            <h2 class="split" data-wow-delay=".2s">Recent Blogs</h2>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="#" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/1.png" class="w-100 hover-scale-1-2"
                                                alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>

                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20"
                                                    alt="">
                                            </div>
                                            <h4>Comprehensive Eye Exams</h4>
                                            <p class="mb-0">Full vision check, refraction, and early detection of eye
                                                diseases.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="#" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/2.png" class="w-100 hover-scale-1-2"
                                                alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>

                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20"
                                                    alt="">
                                            </div>
                                            <h4>Glasses & Contact Lenses</h4>
                                            <p class="mb-0">Prescription glasses, contact lens fitting, and digital eye
                                                strain solutions.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="#" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/3.png" class="w-100 hover-scale-1-2"
                                                alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>

                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20"
                                                    alt="">
                                            </div>
                                            <h4>Pediatric Eye Care</h4>
                                            <p class="mb-0">Myopia control, lazy eye treatment, and strabismus
                                                correction for children.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="service-single.php" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/4.webp" class="w-100 hover-scale-1-2" alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>
                                    
                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20" alt="">
                                            </div>
                                            <h4>Cataract Surgery</h4>
                                            <p class="mb-0">Standard removal, premium intraocular lens, and laser-assisted surgery.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="service-single.php" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/5.webp" class="w-100 hover-scale-1-2" alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>
                                    
                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20" alt="">
                                            </div>
                                            <h4>Refractive Surgery</h4>
                                            <p class="mb-0">LASIK, PRK, and SMILE for permanent correction of vision problems.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <div class="hover">
                                <div class="relative overflow-hidden rounded-1">
                                    <a href="service-single.php" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1">
                                            <img src="/assets/images/services/6.webp" class="w-100 hover-scale-1-2" alt="">
                                            <div class="gradient-edge-bottom color h-90 op-8"></div>
                                        </div>
                                    
                                        <div class="p-4 relative bg-white rounded-1 mx-4 mt-min-100 z-2">
                                            <div class="abs top-0 end-0 mt-min-30 me-4 circle bg-color w-60px h-60px">
                                                <img src="/assets/images/misc/up-right-arrow.webp" class="w-60px p-20" alt="">
                                            </div>
                                            <h4>Glaucoma Care</h4>
                                            <p class="mb-0">Screening, monitoring eye pressure, laser therapy, and surgery.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </section>


            <section class="bg-color relative text-light pt-50 pb-50">
                <div class="container relative z-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-9">
                            <h3 class="mb-0 fs-32 split">Better Health Starts Here. Schedule Your Checkup Today</h3>
                        </div>
                        <div class="col-lg-3 text-lg-end">
                            <a class="btn-main btn-line fx-slide" href="#"><span>Book Your Visit</span></a>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        <!-- content close -->


    </div>




    <?php include 'footer.php'; ?>
    <?php include 'includejs.php'; ?>
</body>

</html>