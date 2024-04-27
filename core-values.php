<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/inner-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Our Core Values</h2>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12 big-text">
                <h2 class="text-center">As a Bengal Beverages family, we exist and excel for the benefit of our associates, consumers, customers, communities and owners.</h2>
                <h4 class="text-center mt-5">Our operating model, built on local relationships, is based on a foundation of family, service and community.</h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 about-content value-content">
                <div class="abt-content-grid-wrap">
                    <div>
                        <div class="col-12 main-heaing">
                            <h2>Quality</h2>
                        </div>
                        <div class="col-12 abt-info">
                            <div class="content">
                                <p>
                                    We are committed to the highest quality standards in the products we produce, the services we deliver, and in our market execution.
                                    Safety for all, by all and in every situation.
                                    We don’t compromise our standards, and we don’t take shortcuts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div><img src="images/grid (2).png"></div>
                </div>
                <div class="abt-content-grid-wrap">
                    <div>
                        <div class="col-12 main-heaing">
                            <h2>Excellence</h2>
                        </div>
                        <div class="col-12 abt-info">
                            <div class="content">
                                <p>
                                We will always strive for excellence and work to exceed expectations.
Our goal is to be the undisputed leader; second place is unacceptable.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div><img src="images/grid (3).png"></div>
                </div>
                <div class="abt-content-grid-wrap">
                    <div>
                        <div class="col-12 main-heaing">
                            <h2>Integrity</h2>
                        </div>
                        <div class="col-12 abt-info">
                            <div class="content">
                                <p>
                                Integrity is the foundation of all enduring relationships and every successful business.
We will always do the right thing, even when no one is watching.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div><img src="images/grid (1).png"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-6  position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 big-text">
                <h2 class="text-center">Our diverse team of associates, with their unique perspectives, ideas and experiences, provide an inclusive culture for all associates to have a rewarding career and reach their full potential.</h2>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme blogbanner core-value-bottom">
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Our consumers</h4>
                        <p>who rely on the highest quality products to meet their desire for beverages for life</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Our customers</h4>
                        <p>who value and depend on our partnership and unparalleled service.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Our communities</h4>
                        <p>where we live, work and serve with a great sense of civic responsibility and good will.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Our environment</h4>
                        <p>by being good stewards of our resources and caring for the wellbeing of our communities.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Our owners</h4>
                        <p>who have entrusted their resources to our care and invest in our company’s future.</p>
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
                items: 1,
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