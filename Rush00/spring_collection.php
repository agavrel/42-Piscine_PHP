<?php include "auth.php"; ?>

<!DOCTYPE html>
<html>

<?php include 'incl/header.php'; ?>

<body>
<div class="fadein" align="center">
  <img class="mySlides" src="https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/spring1.jpg" style="width:500px">
  <img class="mySlides" src="https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/spring2.jpg" style="width:500px">
  <img class="mySlides" src="https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/spring3.jpg" style="width:500px">
</div>
<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
</script>
</body>

</html>
