<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cardiology & Heart Care Services | Ligo Hospital</title>
    <meta name="description" content="Expert cardiology services including heart screening, interventional procedures, hypertension management, and 24/7 cardiac emergency care at Ligo Hospital.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include 'includecss.php'; ?>

    <style>
        /* ========================================
           CARDIOLOGY PAGE - RESPONSIVE STYLES
           Mobile-First Design for All Devices
           ======================================== */
        
        /* ===== BASE STYLES ===== */
        .cardiology-page {
            overflow-x: hidden;
        }

        /* ===== DESKTOP/TABLET - DEFAULT LAYOUT ===== */
        @media (min-width: 768px) {
            .service-text { 
                margin-left: 80px; 
            }
            .abs { 
                display: inline-flex; 
            }
            .cardiology-sidebar {
                order: 1;
            }
            .cardiology-main-content {
                order: 2;
            }
        }

        /* ===== MOBILE RESPONSIVE STYLES ===== */
        @media (max-width: 767.98px) {
            /* ----- LAYOUT & CONTAINER ----- */
            .container {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            
            .container .row { 
                --bs-gutter-x: 1rem; 
                margin-left: 0;
                margin-right: 0;
                display: flex;
                flex-wrap: wrap;
            }

            /* Reorder: Main content first, sidebar last */
            .cardiology-sidebar {
                order: 2;
                margin-top: 2rem;
            }
            
            .cardiology-main-content {
                order: 1;
            }

            /* ----- SUBHEADER ----- */
            #subheader {
                padding: 2rem 0 !important;
            }

            #subheader h1 {
                font-size: 1.75rem !important;
                line-height: 1.3;
                margin-bottom: 0.5rem;
            }

            #subheader .crumb {
                font-size: 0.875rem;
            }

            /* ----- SIDEBAR NAVIGATION ----- */
            .cardiology-sidebar .me-lg-3 {
                margin-right: 0 !important;
            }

            .cardiology-sidebar a {
                padding: 0.875rem 1rem !important;
                margin-bottom: 0.75rem !important;
                font-size: 0.95rem;
            }

            .cardiology-sidebar h5 {
                font-size: 1rem !important;
                line-height: 1.4;
            }

            .cardiology-sidebar .icofont-long-arrow-right {
                right: 10px !important;
                font-size: 1.25rem !important;
            }

            /* ----- MAIN CONTENT AREA ----- */
            .cardiology-main-content h2 {
                font-size: 1.5rem !important;
                line-height: 1.3;
                margin-bottom: 1rem;
            }

            .cardiology-main-content p {
                font-size: 0.95rem;
                line-height: 1.6;
                margin-bottom: 1rem;
            }

            /* ----- IMAGE SECTION ----- */
            .cardiology-main-content img.img-fluid {
                max-width: 100% !important;
                height: auto !important;
                border-radius: 0.5rem;
            }

            .cardiology-main-content .bg-color.text-light {
                padding: 1rem !important;
                margin-top: 1rem !important;
            }

            /* ----- SERVICE CARDS WITH ICONS ----- */
            .service-card-mobile {
                margin-bottom: 1.25rem;
                padding: 1rem;
                background: #f8f9fa;
                border-radius: 0.75rem;
                transition: all 0.3s ease;
            }

            .service-card-mobile:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            }

            /* Icon styling for mobile */
            .abs { 
                position: relative !important; 
                top: auto !important; 
                left: auto !important; 
                display: inline-flex !important; 
                vertical-align: top;
                margin-right: 0.75rem;
                flex-shrink: 0;
            }
            
            .abs.p-4 { 
                padding: 0.75rem !important; 
                width: 48px;
                height: 48px;
                align-items: center;
                justify-content: center;
            }

            .abs.fs-40 {
                font-size: 1.5rem !important;
            }

            /* Service text alignment */
            .service-text { 
                margin-left: 0 !important; 
                padding-left: 0 !important;
                flex: 1;
            }

            .service-text h4 {
                font-size: 1.1rem !important;
                margin-bottom: 0.5rem;
                line-height: 1.3;
            }

            .service-text p {
                font-size: 0.875rem;
                line-height: 1.5;
                margin-bottom: 0;
                color: #666;
            }

            /* Make service cards flex containers */
            .service-card-mobile .relative {
                display: flex;
                align-items: flex-start;
            }

            /* ----- SPACING UTILITIES ----- */
            .spacer-double {
                height: 2rem !important;
            }

            .g-4 {
                --bs-gutter-y: 1rem;
            }

            /* Ensure full width on mobile for service cards */
            .col-lg-6 {
                width: 100% !important;
                max-width: 100%;
            }

            /* ----- TOUCH TARGETS ----- */
            a, button {
                min-height: 44px;
                display: inline-flex;
                align-items: center;
            }

            /* ----- RESPONSIVE TYPOGRAPHY ----- */
            h2.split {
                font-size: 1.5rem !important;
            }

            h4 {
                font-size: 1.1rem !important;
            }

            h5 {
                font-size: 1rem !important;
            }
        }

        /* ===== EXTRA SMALL DEVICES (< 375px) ===== */
        @media (max-width: 374.98px) {
            .container {
                padding-left: 0.75rem !important;
                padding-right: 0.75rem !important;
            }

            #subheader h1 {
                font-size: 1.5rem !important;
            }

            .service-text h4 {
                font-size: 1rem !important;
            }

            .abs.p-4 {
                width: 40px;
                height: 40px;
                padding: 0.5rem !important;
            }

            .abs.fs-40 {
                font-size: 1.25rem !important;
            }
        }

        /* ===== TABLETS IN PORTRAIT (768px - 991px) ===== */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .service-text { 
                margin-left: 70px; 
            }

            #subheader h1 {
                font-size: 2rem;
            }

            .cardiology-main-content h2 {
                font-size: 1.75rem;
            }
        }

        /* ===== LARGE SCREENS (> 1200px) ===== */
        @media (min-width: 1200px) {
            .container {
                max-width: 1200px;
            }
        }
    </style>

</head>

<body class="cardiology-page">
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close --> 

        <?php include 'header.php'; ?>

        <!-- content begin -->
        <main>

            <div id="top"></div>

            <!-- Subheader Section -->
            <section id="subheader" class="bg-color-op-1">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split">Cardiology & Heart Care</h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php#services">Specialities</a></li>
                                <li class="active">Cardiology</li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content Section -->
            <section>
                <div class="container">
                    <div class="row g-4 gx-5">
                        
                        <!-- Sidebar Navigation -->
                        <div class="col-12 col-lg-3 cardiology-sidebar">
                            <div class="me-lg-3">
                                <a href="#heart-screening" class="bg-color text-light d-block p-3 px-4 rounded-10px mb-3 relative d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-calendar-check fs-20"></i>
                                    <h5 class="mb-0">Heart Screening</h5>
                                    <i class="icofont-long-arrow-right absolute abs-middle fs-24 end-20px"></i>
                                </a>
                                <a href="#interventional" class="bg-light d-block p-3 px-4 rounded-10px mb-3 d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-heart-circle-bolt id-color fs-20"></i>
                                    <h5 class="mb-0">Interventional Cardiology</h5>
                                </a>
                                <a href="#hypertension" class="bg-light d-block p-3 px-4 rounded-10px mb-3 d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-gauge-high id-color fs-20"></i>
                                    <h5 class="mb-0">Hypertension Clinic</h5>
                                </a>
                                <a href="#cardiac-rehab" class="bg-light d-block p-3 px-4 rounded-10px mb-3 d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-child-reaching id-color fs-20"></i>
                                    <h5 class="mb-0">Cardiac Rehabilitation</h5>
                                </a>
                                <a href="#diagnostics" class="bg-light d-block p-3 px-4 rounded-10px mb-3 d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-microscope id-color fs-20"></i>
                                    <h5 class="mb-0">ECG & Stress Testing</h5>
                                </a>
                                <a href="#emergency" class="bg-light d-block p-3 px-4 rounded-10px mb-3 d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-truck-medical id-color fs-20"></i>
                                    <h5 class="mb-0">24/7 Cardiac Emergency</h5>
                                </a>
                            </div>
                        </div>

                        <!-- Main Content Area -->
                        <div class="col-12 col-lg-9 cardiology-main-content">
                            
                            <!-- Hero Section -->
                            <div class="row g-4 gx-5 align-items-center">
                                
                                <div class="col-12 col-lg-6">
                                    <h2 class="split">Advanced Heart Care for a Healthier Life</h2>
                                    <p class="wow fadeInRight" data-wow-delay=".5s">
                                        Our Cardiology department provides comprehensive care for all heart-related conditions, from prevention and diagnosis to advanced treatment and rehabilitation. Equipped with state-of-the-art diagnostic tools and a team of expert cardiologists, we specialize in managing heart disease, hypertension, and rhythm disorders. Your heart health is our priority, and we are committed to delivering life-saving care with precision and compassion.
                                    </p>                                 
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="relative">
                                        <img src="assets/images/services/1.png" class="img-fluid rounded-1 wow fadeInUp" alt="Cardiology Center" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="bg-color text-light p-4 rounded-1 mt-3">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-lg-12">
                                                <p class="no-bottom"><i class="icofont-heart-beat me-2"></i>Leading heart health specialists dedicated to your cardiovascular wellness.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="spacer-double"></div>
                            
                            <!-- Services Section -->
                            <h2 id="services">Comprehensive Cardiac Services</h2>

                            <div class="row g-4">
                                
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay=".0s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-heart-circle-bolt rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="interventional">Interventional Cardiology</h4>
                                            <p>Highly skilled procedures including angioplasty, stenting, and catheterization for effective heart care. Our interventional cardiologists use minimally invasive techniques to treat coronary artery disease and restore blood flow to the heart.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Card 2 -->
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay=".2s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-microscope rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="diagnostics">Non-Invasive Diagnostics</h4>
                                            <p>Advanced imaging technologies including Echocardiography, TMT (Treadmill Test), Holter monitoring, and cardiac CT scans for accurate diagnosis of heart conditions. Early detection saves lives.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Card 3 -->
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay=".4s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-calendar-check rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="heart-screening">Preventive Heart Checkups</h4>
                                            <p>Specialized screening programs designed to detect cardiac risks early and manage lifestyle factors. Comprehensive packages include lipid profile, ECG, stress tests, and personalized risk assessment.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Card 4 -->
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay=".6s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-truck-medical rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="emergency">24/7 Cardiac Emergency</h4>
                                            <p>Dedicated emergency team with round-the-clock ICU support for rapid response to heart attacks, arrhythmias, and other cardiac emergencies. Every second counts in cardiac care.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Card 5 -->
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay=".8s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-gauge-high rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="hypertension">Hypertension Management</h4>
                                            <p>Specialized clinic for blood pressure control and prevention of hypertension-related complications. Our team provides medication management, lifestyle counseling, and regular monitoring.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Card 6 -->
                                <div class="col-12 col-lg-6 wow fadeInUp service-card-mobile" data-wow-delay="1.0s">
                                    <div class="relative">
                                        <i class="abs fs-20 p-4 bg-color fa-solid fa-child-reaching rounded-1 text-light"></i>
                                        <div class="service-text">
                                            <h4 id="cardiac-rehab">Cardiac Rehabilitation</h4>
                                            <p>Comprehensive post-treatment recovery programs including supervised exercise, nutritional counseling, stress management, and education to help you return to a healthy, active lifestyle.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- content close -->
        
        <?php include 'footer.php'; ?>
    </div>

   
    <?php include 'includejs.php'; ?>

</body>

</html>
