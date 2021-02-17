<title>Online Crime Reporting System | Home</title>
<?php include('framework/header.php'); ?>
<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  $navbar = include('framework/navbar/unavbar.php');
}
else {
  $navbar = include('framework/navbar/mainnavbar.php');
}


?>

<div id="google_translate_element" style="float:right;marigin-top:1%;margin-right:1px;"></div>
<p style="color:white;text-align:right;margin-right:1px;margin-top:1%;">Yan Ede re/Horo Asusu Gi/Zabi Harshen ku &nbsp</p>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="contentArea">
    <table border="0" cellspacing="1" cellpadding="1" class="tableb">
      <tr>
        <td colspan="2"> <img src="images/img_rr_03.jpg" alt="Slide Show" width="720" height="300"><hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
             deserunt mollit anim id est laborum.</P></td>
      </tr>
    </table>
</div>
<?php include('framework/footer.php'); ?>
