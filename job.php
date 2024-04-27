<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/inner-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Apply Job</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12">
                <div>
                    <div class="col-12 big-text">
                        <h2>Job Title</h2>
                    </div>
                    <div class="content">
                        <p>job Description</p>
                    </div>
                    <form class="contact-frm row">
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="number" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="file" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="box-btn mt-0 " style="text-transform: uppercase;">Subit</button>
                        </div>
                    </form>
                </div>

            </div>
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