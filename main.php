<?php
/*
Plugin Name: Titan DOMPDF
Description: A plugin that generates PDF documents using DOMPDF.
Version: 1.0.0
Author: Titan Byte
*/



use Dompdf\Dompdf;

if (isset($_POST['submit'])) {
  
  require_once 'dompdf/autoload.inc.php'; 

  $html = 'hello testing';
  
  $dompdf = new Dompdf();
  $dompdf->loadHtml($html);
  
  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'landscape');
  
  // Render the HTML as PDF
  $dompdf->render();
  
  // Output the generated PDF to Browser
  $dompdf->stream();
  echo 'Your message has been sent.';
}




add_shortcode('my_fpdf_shortcode', 'customformfordom');
function customformfordom($atts)
{
?>

  <form method="post">
    <input type="submit" name="submit" value="Submit">
  </form>


<?php
}
?>