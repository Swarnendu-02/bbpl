<?php include_once("includes/header.php"); ?>

<div class="container-fluid cocksathi-wrap  position-relative">
    <img src=" images/cokesathi-bk.png" class="cocksathi-bk">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="position: relative;">
            <div class="col-12 col-ld-6">
                <div class="col-12 main-heaing m-0">
                    <img src="images/cokesathi-logo.png" class="cocksathi-logo">

                    <div class="content">
                        <p>No more waiting.<br>
                            Our WhatsApp chat assistance for you, just ask you question and get reply with no time. </p>
                    </div>
                    <a href="#" class="box-btn mt-3"><img src="images/whatsapp-icon.png" style="width: 40px;margin: -10px 10px -10px -10px;">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 inquery-grid">
                <div>
                    <img src="images/inqury-mob.png" class="w-100">
                </div>
                <div>
                    <div class="col-12 big-text">
                        <h2>Register to get update about Orders or Inquire directly in your WhatsApp</h2>
                    </div>
                    <form class="contact-frm row">
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Store Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Store Code">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="GST Number">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Address">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Address (Optional)">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <select>
                                <option>Country</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <select>
                                <option>State</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <select>
                                <option>City</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <select>
                                <option>PIN</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="box-btn mt-0 mb-4" style="text-transform: uppercase;">Submit to REGISTER IN COKE SAATHI</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 pt-0 position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 main-heaing ">
                <h2 class="text-center">FAQ’s</h2>
            </div>
            <ul class="faq-wrap col-12 col-md-8 offset-md-2">
                <li>
                    <h6 class="faq-clk">What is Coke Saathi ?<i class="fas fa-chevron-down"></i></h6>
                    <div class="faqx">
                        <p>lorem</p>
                    </div>
                </li>
                <li>
                    <h6 class="faq-clk">How do I register for Coke Saathi ?<i class="fas fa-chevron-down"></i></h6>
                    <div class="faqx">
                        <p>lorem</p>
                    </div>
                </li>
                <li>
                    <h6 class="faq-clk">How do I place an order on Coke Saathi ?<i class="fas fa-chevron-down"></i></h6>
                    <div class="faqx">
                        <p>lorem</p>
                    </div>
                </li>
                <li>
                    <h6 class="faq-clk">How does the personalized order suggestion feature work ?<i class="fas fa-chevron-down"></i></h6>
                    <div class="faqx">
                        <p>lorem</p>
                    </div>
                </li>
                <li>
                    <h6 class="faq-clk">How does the ongoing schemes feature work ?<i class="fas fa-chevron-down"></i></h6>
                    <div class="faqx">
                        <p>lorem</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('.faq-clk').click(function() {
            if ($(this).hasClass("active")) {
                $(".faqx").slideUp();
                $(".faq-clk").removeClass("active");
            } else {
                $(".faqx").slideUp();
                $(".faq-clk").removeClass("active");
                $(this).parent().find(".faqx").slideToggle();
                $(this).parent().find(".faq-clk").toggleClass("active");
            }
        });
    });
</script>
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