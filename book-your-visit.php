<!DOCTYPE html>
<html lang="en">

<head>
    <title>Optilux - Eye Clinic Optometrist and Optical Store HTML Template</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Optilux - Eye Clinic Optometrist and Optical Store HTML Template" name="description" >
    <meta content="" name="keywords">
    <meta content="" name="author">
   <?php include 'includecss.php'; ?>

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

       <?php include 'header.php'; ?>

        <!-- content begin -->
        <main>

            <div id="top"></div>

            <section id="subheader" class="bg-color-op-1">
                <div class="container relative z-2">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-12">
                            <h1 class="split">Book Your Visit</h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Book Your Visit</li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container relative z-2">
                    <div class="row g-4 gx-5 justify-content-between">

                        <div class="col-lg-6">
                            <div class="relative">
                                <div id="success_message_col" class='success p-40 h-100'>
                                    <h3>Thank you for booking your appointment</h3>
                                    <p>We have received your request and will be processing it shortly. Click button below if you want to make another order.</p>
                                    <a class="btn-main" href="book-your-visit.php">Re-submit</a>
                                </div>

                                <form name="bookingForm" id="booking_form" method="post" action="booking.php">
                                    
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <p>Book your appointment today for expert dental care tailored to your needs. Healthy, beautiful smiles start with a simple step, schedule now!</p>
                                            <div class="relative">
                                                <select name="service" id="service" class="form-control">
                                                    <option disabled selected value>Select Service</option>
                                                    <option value="Comprehensive Eye Exams">Comprehensive Eye Exams</option>
                                                    <option value="Glasses & Contact Lenses">Glasses & Contact Lenses</option>
                                                    <option value="Pediatric Eye Care">Pediatric Eye Care</option>
                                                    <option value="Cataract Surgery">Cataract Surgery</option>
                                                    <option value="Refractive Surgery">Refractive Surgery</option>
                                                    <option value="Glaucoma Care">Glaucoma Care</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="date" name="pickup_date" id="pickup_date" class="form-control">
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="relative">
                                                <select name="time" id="time" class="form-control">
                                                    <option disabled selected value>Select Time</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" required>
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-lg-12">
                                            <div id='submit'>
                                                <input type='submit' id='send_message' value='Send Appointment' class="btn-main">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="error_message" class='error'>
                                        Sorry there was an error sending your form.
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="h-100 rounded-1 relative" data-bgimage="url(images/misc/s4.webp) center">
                                <div class="bg-color text-light abs start-10 bottom-10 p-4 rounded-1 overflow-hidden z-2" data-wow-delay=".5s">
                                    <div class="d-flex justify-content-center">
                                        <i class="fs-60 text-white icon_clock"></i>
                                        <div class="ms-3">
                                            <h4 class="mb-0">Opening Hours</h4>
                                            Mon to Sat 08:00 - 20:00
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