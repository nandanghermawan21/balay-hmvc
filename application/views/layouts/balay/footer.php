<?php foreach (Pagefactory::Instance()->getAllContent() as $content) { ?>
    <?php /** @var $content Content */ ?>
    <?php get_instance()->load->view($content->getView(), array("data" => $content)); ?>
<?php } ?>
<div id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2>Contact Us!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <p class="colorlib-lead">L’AVENUE OFFICE TOWER 16th Floor
                    Jl. Raya Pasar Minggu Kav. 16B
                    Pancoran, Jakarta Selatan
                    Indonesia</p>
                <p><a href="contact.html" class="btn btn-primary btn-learn">Contact me!</a></p>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<!-- jQuery -->
<script src="<?php load_asset("balay/js/jquery.min.js") ?>"></script>
<!-- jQuery Easing -->
<script src="<?php load_asset("balay/js/jquery.easing.1.3.js") ?>"></script>
<!-- Bootstrap -->
<script src="<?php load_asset("balay/js/bootstrap.min.js") ?>"></script>
<!-- Waypoints -->
<script src="<?php load_asset("balay/js/jquery.waypoints.min.js") ?>"></script>
<!-- Flexslider -->
<script src="<?php load_asset("balay/js/jquery.flexslider-min.js") ?>"></script>
<!-- Sticky Kit -->
<script src="<?php load_asset("balay/js/sticky-kit.min.js") ?>"></script>
<!-- Owl carousel -->
<script src="<?php load_asset("balay/js/owl.carousel.min.js") ?>"></script>
<!-- Counters -->
<script src="<?php load_asset("balay/js/jquery.countTo.js") ?>"></script>


<!-- MAIN JS -->
<script src="<?php load_asset("balay/js/main.js") ?>"></script>

<script src="<?php load_asset("balay/js/custom.js") ?>"></script>