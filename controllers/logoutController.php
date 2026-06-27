<?php
unset($_SESSION["user"]);
session_destroy();
return header("Location: index.php");
// Controller Deconnexion Admin - Mane Sall - L3 IDA UNCHK Groupe 67 2025
