<?php

class PageHelpers
{
  public static function homePage()
  {
    header("Location: ".BASEURL."verHome");
    die();
  }
  public static function allNoticias()
  {
    header("Location: ".BASEURL."verAllNoticias");
    die();
  }
  public static function allCategorias()
  {
    header("Location: ".BASEURL."verAllCategorias");
    die();
  }

  public static function loginPage()
  {
    header("Location: ".BASEURL."");
    die();
  }

  public static function logoutPage()
  {
    header("Location: ".BASEURL."/logout");
    die();
  }

}


 ?>
