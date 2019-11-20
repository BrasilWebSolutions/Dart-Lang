<?php if(!class_exists('Rain\Tpl')){exit;}?><footer>
        <div class="large-8 columns">
            <h4>Our Offices</h4>
            <p>Lorem ipsum dolor sit amet, adipiscing elit. Aenean lorem in gravida cursus.</p>

            <div class="row">
                <div class="large-4 medium-4 columns">
                    <div class="address-footer">
                        <i class="icon-checkin"></i>
                        <p><strong>Endereço</strong><br/>
                            Rua da Consolação, 3367<br/>
                            São Paulo, SP<br/>
                        </p>
                    </div>
                </div>

                <div class="large-4 medium-4 columns">
                    <div class="address-footer">
                        <i class="icon-envelope"></i>
                        <p><strong>Email</strong><br/>
                            admin@standardflutter.com<br/>
                            suporte@kstandardflutter.com
                        </p>
                    </div>
                </div>

                <div class="large-4 medium-4 columns">
                    <div class="address-footer mo-tablet hide-border">
                        <i class="icon-phonealt"></i>
                        <p><strong>Telefone</strong><br/>
                            +XX 22 966 3796Y<br/>
                            +XX 11 966 3797Y
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="large-4 medium-12 columns mo-tablet ltop">
            <span id="top" class="scroll"><i class="icon-chevron-up"></i></span>
            <h4>Work with Us</h4>
            <p>Donec pellentesque est magna, laoreet gravida dui ullamcorper sed.</p>
            <a href="mailto:contato@standardflutter.com" class="button small bluex">contato@standardflutter.com <i class="icon-news"></i></a>
        </div>
    </div>

    <div id="copyright">
        <div class="row">
            <div class="large-12 columns text-center">
                Created with <i class="icon-heart"></i> by Standard Flutter. &copy; 2019 all rights reserved
            </div>
        </div>
    </div>
</footer>
</div>

<!-- javascript here -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.smartmenus/jquery.smartmenus.min.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/icheck.js"></script>
<script src="../assets/js/jquery.fancybox.js"></script>
<script src="../assets/js/jquery.fancybox-media.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/masonry.min.js"></script>
<script src="../assets/js/jquery.player.js"></script>
<script src="../assets/js/instafeed.min.js"></script>
<script src="../assets/js/maleo.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($){
        var userFeed = new Instafeed({
            limit: 1,
            resolution: 'low_resolution',
            get: 'user',
            userId: 25025320,
            accessToken: '45089263.467ede5.143ccc97e16548bd9d0b42498314657e',
            template: '<a href="{{link}}"><img src="{{image}}" /></a>'
        });
        userFeed.run();

        $("#blog-slide").owlCarousel({
            autoPlay : 7000,
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "backSlide"
        });

        $("#icon-slide").owlCarousel({
            autoPlay : 5000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide").owlCarousel({
            autoPlay : 6000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide2").owlCarousel({
            autoPlay : 8000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide3").owlCarousel({
            autoPlay : 10000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide4").owlCarousel({
            autoPlay : 14000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide5").owlCarousel({
            autoPlay : 16000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#img-slide6").owlCarousel({
            autoPlay : 12000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#text-slide").owlCarousel({
            autoPlay : 12000,
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $("#text-slide2").owlCarousel({
            autoPlay : 16000,
            navigation : false,
            pagination : false,
            slideSpeed : 300,
            singleItem:true,
            transitionStyle : "fadeUp"
        });

        $('.blog-masonry').masonry({});

        $('.masonry').masonry({
            itemSelector : '.block-size',
            columnWidth: 1,
        });

    });
</script>

</body>
</html>