</div>
<?php wp_footer();?>
</body>
</html>
<script>
$(document).ready(function(){
  // Showing Dropdown for Menu
    $(".post").click(function(){
      if($("p").is(":visible")){
        $(".menu_dropdown",this).fadeOut()
      } else{
        $(".menu_dropdown",this).fadeIn()
      }
    });
    $(".menu_dropdown").click(function(){
        $(this).fadeOut()
    });
    
});
</script>
