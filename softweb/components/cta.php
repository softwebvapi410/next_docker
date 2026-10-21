<section class="contact-two contact-two--home-4 contact section-space" id="contact">
    <div class="container">
        <div class="contact-two__image">
            <img src="assets/images/contact/contact-4-1.png" alt="contact" class="contact-two__image__one">
            <span class="contact-two__call">
                <i class="icon-phone-ringing"></i>
            </span>
            <img src="assets/images/shapes/contact-shape-4-1.png" alt="shape" class="contact-two__image__sahpe">
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-10">
                <div class="contact-two__content contact__content">
                    <div class="sec-title sec-title--two @@extrClassName wow fadeInUp" data-wow-duration="1500ms">
                        <div class="sec-title__top">
                            <div class="sec-title__box">
                                <div class="sec-title__box__inner"></div>
                            </div>
                            <h6 class="sec-title__tagline">Connect With Us</h6>
                        </div>
                        <h3 class="sec-title__title">
                            Ready to Grow Your <br> Business Digitally?
                        </h3>
                    </div>
                    <div class="contact-two__description wow fadeInUp" data-wow-duration="1500ms">
                        <p class="contact-two__text">
                            Partner with Vapi's most established digital agency. From powerful websites to
                            high-impact marketing, we deliver end-to-end solutions that fuel your business growth.
                        </p>
                    </div>
                    <div class="contact__tab-box tabs-box">
                        <div class="tabs-content">
                            <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="contact001"
                                style="display: block;">
                                <div class="contact__tab-content">
                                    <form class="contact__form contact-form-validated" id="contactForm">
                                        <div class="contact__form__group">
                                            <div class="contact__form__control contact__form__control--full">
                                                <input type="text" name="name" placeholder="Your Name *" required>
                                            </div>
                                            <div class="contact__form__control contact__form__control--full">
                                                <input type="email" name="email" placeholder="Your Email *" required>
                                            </div>
                                            <div class="contact__form__control">
                                                <input type="tel" name="phone" placeholder="Phone *" required>
                                            </div>
                                            <div class="contact__form__control">
                                                <select class="selectpicker" name="service"
                                                    aria-label="Default select example" required>
                                                    <option value="" selected disabled>Services *</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="Digital Marketing">Digital Marketing</option>
                                                    <option value="Branding & Design">Branding & Design</option>
                                                    <option value="Printing Media">Printing Media</option>
                                                    <option value="Event Management">Event Management</option>
                                                    <option value="Technical Services">Technical Services</option>
                                                </select>
                                            </div>
                                            <div class="contact__form__control contact__form__control--full">
                                                <textarea name="message" placeholder="Your Message *"
                                                    required></textarea>
                                            </div>
                                            <div class="contact__form__control cap">
                                                <img src="captcha.php" id="captcha_image" alt="Captcha">
                                                <button type="button" onclick="refreshCaptcha()">↻</button>
                                            </div>
                                            <script>
                                            function refreshCaptcha() {
                                                var img = document.getElementById('captcha_image');
                                                img.style.opacity = "0.5";
                                                setTimeout(function() {
                                                    img.src = "captcha.php?rand=" + new Date().getTime();
                                                    img.style.opacity = "1";
                                                }, 200);
                                            }
                                            </script>
                                            <div class="contact__form__control">
                                                <input type="text" name="captcha" placeholder="Enter Captcha *"
                                                    required>
                                            </div>
                                            <div class="contact__form__control contact__form__control--full">
                                                <button type="submit" class="insuba-btn insuba-btn--base">
                                                    <span>Send Request</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/shapes/contact-shape-4-2.png" alt="shape" class="contact-two__shape-one">
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'mail.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            if (response.trim() === 'Message Sent Successfully') {
                window.location.href = 'thank-you.php';
                $('#contactForm')[0].reset();
            } else {
                alert(response);
            }
        },
        error: function() {
            alert('Something went wrong. Please try again.');
        }
    });
});
</script>