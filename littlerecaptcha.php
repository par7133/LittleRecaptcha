<?php

/**
 * Copyright (c) 2021, 2028 NuMode
 * Supplied by a MIT license.
 * 
 * littlerecaptcha.php
 * 
 * Little recaptcha sample code.
 *
 * @author Daniele Bonini <25mb@gaox.io>
 * @copyrights (c) 2021, 2028 NuMode
 * @license https://opensource.org/licenses/MIT
 */

// require "../Private/core/init.inc";


// VARIABLES AND FUNCTION DECLARATION


// PARAMETERS VALIDATION AND NORMALIZATION

//requestMethod
$requestMethod = (string)filter_input(INPUT_SERVER, "REQUEST_METHOD");
//if ($requestMethod != "GET") {
//  Err::trigger_error1(ERR::ERR_REQMETHOD, "The page has been initiated by an invalid REQUEST_METHOD: " . $requestMethod, __FILE__, __LINE__);  
//}

//print
//$print = substr((bool)filter_input1(INPUT_GET, "print", FILTER_SANITIZE_BOOLEAN), 0 , 1);

$cgFlag = (int)filter_input(INPUT_POST, "cgf");
if ($cgFlag === (98989898989 - (int)(date("YmdH") . left(date("i"), 1)))) {
  $cgFlagCheck = true; 
} else {
  $cgFlagCheck = false;
} 

$cg1 = (int)filter_input(INPUT_POST, "cg1");
$cg2 = (int)filter_input(INPUT_POST, "cg2");
$cgr = (int)filter_input(INPUT_POST, "cgr");
if ($cg1 === 0 || $cg2 === 0 || $cgr === 0) {
  $cgCheck = false; 
} else {
  if (($cg1 + $cg2) === $cgr) {
    $cgCheck = true;
  } else {
    $cgCheck = false;
  }
} 

// DEBUG
// echo "cg1=" . $cg1. "<br>";
// echo "cg2=" . $cg2. "<br>";
// echo "cgr=" . $cgr. "<br>";
// echo "cgFlag=" . $cgFlag. "<br>";
// if ($cgFlagCheck) {
//   echo "cgFlagCheck=" . "true" . "<br>";
// } else {
//   echo "cgFlagCheck=" . "false" . "<br>";
// }  
// if ($cgCheck) {
//   echo "cgCheck=" . "true" . "<br>";
// } else {
//   echo "cgCheck=" . "false" . "<br>";
// }  

?>

<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
  <meta charset="UTF-8"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  
<!--
Copyright (c) 2016, 2026, NuMode
Supplied by a MIT License.

This file is part of XXX. -->
  
  <title>Little ReCaptcha</title>
	
  <meta name="description" content="Little ReCaptcha by NuMode"/>
  <meta name="keywords" content="Little,ReCaptcha,NuMode"/>
  <meta name="robots" content="index,follow"/>
  <meta name="author" content="NuMode"/> 

  <script src="/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <link href="/css/style.css" type="text/css" rel="stylesheet">

</head>

<body style="background-color: #000000; color: #FFFFFF">

  <div class="body-area">

  <div class="content-area">
    
    <div class="box" align="center">

      <br><br>

<?php if (!$cgFlagCheck || !$cgCheck) { ?>

    <form id="frmcg" name="frmcg" action=".?csrf=<?PHP echo($_GET['csrf']);?>" method="post" target="_self">
      <div stype="font-family: arial,verdana, sans serif;">
          &nbsp;&nbsp;&nbsp;<span style="font-size:13px">5 Mode Recaptcha:</span><br>
          &nbsp;&nbsp;&nbsp;<input id="cg1" name="cg1" type="number" maxlength="1" style="width:36px">&nbsp;&plus;&nbsp;<input id="cg2" name="cg2" type="number" maxlength="1" style="width:36px">&nbsp;&equals;&nbsp;<input id="cg2" name="cgr" type="number" maxlength="1" style="width:36px"></br></br>
          &nbsp;&nbsp;&nbsp;<input type="submit" value="Go" stype="font-size: 12px;">    
      </div>  
      <input id="cgf" name="cgf" type="hidden" value="<?php echo(98989898989 - (int)(date("YmdH") . left(date("i"),1)));?>">
    </form> 
      
<?php } else { ?>

     
Hello World!


<br><br>

<div id="footerCont">&nbsp;</div>
<div id="footer">&nbsp;&nbsp;<a href="https://numode.eu/dd.html" target="_top">Disclaimer</a>.&nbsp;&nbsp;A <a href="http://numode.eu/EN" class="aaa" target="_top">NuMode</a> project and <a href="http://demo.numode.eu" target="_top" class="aaa">WYSIWYG</a> system. - MIT&nbsp;&nbsp;</div>

<br><br><br>


<?php } ?>


   </div>
  
  </div>  
  
  </div>

</body>
</html>
