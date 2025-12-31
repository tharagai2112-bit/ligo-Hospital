<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | ligo </title>
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
                            <h1 class="split">Contact Us</h1>
                            <ul class="crumb wow fadeInUp">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">

                  <div class="row g-4">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="assets/images/misc/s1.webp" alt="">

                    </div>

                    <div class="col-lg-6">
                        <div class="relative">
                                <form name="contactForm" id="contact_form" method="post" action="#">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="field-set">
                                            <input type="text" name="name" id="name" class="form-control mb-4" placeholder="Your Name" required>
                                        </div>
                                        <div class="field-set">
                                            <input type="text" name="email" id="email" class="form-control mb-4" placeholder="Your Email" required>
                                        </div>
                                        <div class="field-set">
                                            <input type="text" name="phone" id="phone" class="form-control mb-4" placeholder="Your Phone" required>
                                        </div>
                                        <div class="field-set">
                                            <textarea name="message" id="message" class="form-control mb-4 h-100px" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id='submit'>
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main w-100">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>
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