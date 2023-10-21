<?php
      session_start();
      include_once('../model/conexaoPDO.php');

      if (!isset($_SESSION['login']))
      {
            header('location: errorPage.php');
            exit();
      }



?>