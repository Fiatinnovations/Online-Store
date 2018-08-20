<footer class="footer-section footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <ul class="footer-menu">
                    <li> <a href="login.html">Your account</a>  </li>
                    <li> <a href="#">Contact us</a>  </li>
                    <li> <a href="#">Terms of service</a>  </li>
                </ul>

                <ul class="footer-social">
                    <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i>  </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i>   </a> </li>
                    <li> <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i>  </a> </li>
                    <li> <a href="#"> <i class="fa fa-pinterest-p" aria-hidden="true"></i>  </a> </li>
                </ul>

                <p>&copy;2018. <a href="fiatinnovations.com">Fiatinnovations</a> | All Rights Reserved</p>

            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('assets2/front/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('assets2/front/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets2/front/js/custom.js')}}"></script>
<script src="{{URL::asset('assets2/front/js/owl.carousel.min.j')}}s"></script>
<script type="text/javascript" src="{{URL::asset('assets2/front/js/Drift.min.j')}}s"></script>
<script type="text/javascript">
    var productPane = document.querySelector('.product-cover');
    var paneContainer = document.querySelector('.product-cover-wrap');

    new Drift(productPane, {
        paneContainer: paneContainer,
        inlinePane: false
    });

    $('#thumbnails li img').on('click', function () {
        $('#main-image')
            .attr('src', $(this).attr('src') +'?w=400')
            .attr('data-zoom', $(this).attr('src') +'?w=1200');
    });
</script>
</body>

</html>