<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/contact-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Contact us</h2>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid py-6 position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 contact-grid">
                <div>
                    <div class="col-12 main-heaing ">
                        <h2>Want to get in touch?</h2>
                    </div>
                    <div class="content mb-3">
                        <p>
                            If you’re a current Customer or would like to become a Customer, please contact our Customer Sales Solutions Centre at (91) 33 2600 2500.
                            <br><br>
                            If you have a question about a Coke product, please contact Coca-Cola via this form or call 1-800-438-2653.
                        </p>
                        <p><b>Locate us</b></p>
                        <p>
                            <b>BENGAL BEVERAGES PVT. LTD.</b><br>
                            (Authorised Bottler of the Coca - Cola Company)<br>
                            Durgapur Expressway, P.O: Dankuni Coal Complex, Dankuni, Dist: Hooghly, West Bengal, India, PIN - 712310
                            <br><br>
                            Phone: (91) 33 2600 2500<br>
                            Fax: 033-2659 3714<br>
                            Email: dankuni@bengalbeverages.com
                        </p>
                        <iframe class="mb-2" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d470970.2527014989!2d88.12576879264218!3d22.748486055495853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d22.839295999999997!2d88.6079488!4m5!1s0x39f8847c53629e01%3A0x359f800740368315!2sbengal%20beverages!3m2!1d22.7149249!2d88.2833004!5e0!3m2!1sen!2sin!4v1705431677213!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>
                            <b>GLOBAL ACQUA PVT. LTD.</b><br>
                            (Kinley & Georgia Tea & Coffee)<br>
                            Vill.: Pakuria, NH-6, P.O. : Lakhanpur, P.S. Domjur, Dist. Howrah,<br>
                            West Bengal, India, PIN -711323
                            <br><br>
                            Phone: (91) 33 2600 2500<br>
                            Email: global@bengalbeverages.com
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d470970.2527014989!2d88.12576879264218!3d22.748486055495853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d22.839295999999997!2d88.6079488!4m5!1s0x39f8847c53629e01%3A0x359f800740368315!2sbengal%20beverages!3m2!1d22.7149249!2d88.2833004!5e0!3m2!1sen!2sin!4v1705431677213!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div>
                    <div class="col-12 main-heaing ">
                        <h2>E-Mail Us</h2>
                    </div>
                    <div class="content mb-3">
                        <p>
                            For questions about Bengal Beverages Bottling, please drop us a line.
                        </p>
                    </div>
                    <form class="contact-frm row">
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Email Id">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Mobile">
                        </div>
                        <div class="form-group col-12">
                            <select>
                                <option>Select Subject</option>
                                <option>General Inquiry</option>
                                <option>Interview Request</option>
                                <option>Partnership Request</option>
                                <option>Donation Request</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-12">

                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="box-btn mt-0 mb-4" style="text-transform: uppercase;">Submit to send message</button>
                        </div>
                    </form>
                    <div class="col-12 main-heaing ">
                        <h2>SGA Complaint</h2>
                    </div>
                    <div class="content mb-2">
                        <p>
                            For submit your SGA complaint, use our IVR system or connect to our support directly in below numbers.
                        </p>
                    </div>
                    <div class="sga-grid">
                        <a><img src="images/sga (2).png"></a>
                        <a><img src="images/sga (1).png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>

</body>
<script>
    $('.homebanner').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('.blogbanner').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

</html>