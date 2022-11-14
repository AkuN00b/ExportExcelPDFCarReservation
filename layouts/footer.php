<!-- section footer start -->
    <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Address</h2>
                  <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/bulit-icon.png"><span class="fb_text"><a href="#">Home</span></a></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/bulit-icon.png"><span class="fb_text"><a href="#">About</span></a></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/bulit-icon.png"><span class="fb_text"><a href="#">Taxi</span></a></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/bulit-icon.png"><span class="fb_text"><a href="#">Booking</span></a></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/bulit-icon.png"><span class="fb_text"><a href="#">Contact Us</span></a></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Follow Us</h2>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>            
                <div class="image-icon"><img src="../../PRG5_20221_UTSP_0320210027/assets/images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
    </div>
  </div>

    <!-- Javascript files-->
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/jquery.min.js"></script>
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/popper.min.js"></script>
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/jquery-3.0.0.min.js"></script>
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/custom.js"></script>
    <!-- javascript --> 
    <script src="../../PRG5_20221_UTSP_0320210027/assets/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
       
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>   

<script type="text/javascript">
    function search(page) {
      var query = $('.dataTables_filter input').val();
      if (!(query.includes('  '))) {
        console.log(query);
        var data = {
          "search" : query,
          "page" : page
        };

        $.post("pdf.php", data);
        window.location.href = "../pdf.php?search=" + query + "&page=" + page;
      } else {
        alert('Pencarian tidak boleh mengandung double spasi');
      }        
    }

    function excel(page) {
      var query = $('.dataTables_filter input').val();
      if (!(query.includes('  '))) {
        console.log(query);
        var data = {
          "search" : query,
          "page" : page
        };

        $.post("excel.php", data);
        window.location.href = "../excel.php?search=" + query + "&page=" + page;
      } else {
        alert('Pencarian tidak boleh mengandung double spasi');
      }        
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example2').DataTable();
});

</script>
</body>
</html>