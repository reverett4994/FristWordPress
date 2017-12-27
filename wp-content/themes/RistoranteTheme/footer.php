</div>
<?php wp_footer();?>
</body>
</html>
<script>
$(document).ready(function(){
  // Showing Dropdown for Menu
    $(".post").click(function(){
      if($("p",this).is(":visible")){
        $(".menu_dropdown",this).fadeOut()

      } else{
        $(".menu_dropdown",this).fadeIn()
      }
    });
    $(".menu_dropdown").click(function(){
        $(this).fadeOut()
    });

    $( ".post" ).hover(
      function() {
        $(this).css("background-color", "rgb(188, 38, 38)");
      }, function() {
        $(this).css("background-color", "rgb(188, 38, 38,.3)");
      }
    );

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});
</script>
