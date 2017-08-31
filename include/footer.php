
<footer role="content-info">
  <div class="container">
    <section class="foo"></section>
    <div class="row">

     <div class="col-md-4">
      <img src="img/logo.png"  class="img-responsive"><br>
      <p style="text-align:justify;font-family:corbel">
              This is a demo took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.It has survived not only five centuries.It has survived not only five centuries.</p>
     </div>

    <div class="col-md-2 category">
       <h2 class="highlight-text" style="color:#acd150">About</h2>
           <a href="#"><li>About the company</li></a>
           <a href="#"><li>Terms of use</li></a>
           <a href="#"><li>Advertise</li></a>         
    </div>


    <div class="col-md-4 category">
       <h2 class="highlight-text" style="color:#acd150">Join Community</h2>
           <a href="#"><li> Teach </li></a>
           <a href="#"><li>Translate</li></a>
           <a href="#"><li>Forum</li></a>
           <a href="#"><li>Community Meetups</li></a>
    </div>

    <div class="col-md-2 category">
       <h2 class="highlight-text" style="color:#acd150">Help</h2>
           <a href="#"><li>FAQ</li></a>
           <a href="#"><li>Help Center</li></a>
    </div>
  </div>
  <hr>
  <p style="text-align:center;font-family:corbel;">Copyright © 2009 - 2017, Company Name. All Rights Reserved</p>
</div>

<script>
  new WOW().init();             


  $("#scroller").simplyScroll({
    'speed': 1
  });

  $(function(){

    $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'facebook',slideshow:5000, autoplay_slideshow:true
  });



  });

  $(document).ready(function() {

    $("#owl-demo").owlCarousel({

          autoPlay: 3000, //Set AutoPlay to 3 seconds

          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]

        });

  });


</script>
</footer>

</body>
</html>