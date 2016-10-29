<?php
/**
 * All of the pages on this site should be listed here, the page header and footer should be configuired with pageRequirements object and requested by each page.
 * 
 */
  class PagesController {

    public function home() {

      //Require the class for storing CSS and Script requirements:
      require_once($_SERVER['DOCUMENT_ROOT'] . '../PHPIncludes/pageLinkScriptsCSS.php');

      //Make an object of the pageLinkScriptsCSS class for storing the CSS requirements for the header:
      $pageRequirements = new pageLinkScriptsCSS();

      $pageRequirements->add("css", ['CSSFIleName.css', 'Animate.css']);

      $pageRequirements->add("title", 'Page title');

      $pageRequirements->add("js", ['assets/JS/js.js']);



      callStructural('header','std',$pageRequirements);
      
      require_once('views/pages/home.php');

      //Render the page footer:
      callStructural("footer", 'std', $pageRequirements); 


    }

    public function error() {

      //Add the css file:
      $cssFiles = [ 'error.css'];

      require_once('views/StdHeader.php');
      ////
      require_once('views/pages/error.php');

      //render the error footer
      $footerType = "error";

    }
  }
?>
