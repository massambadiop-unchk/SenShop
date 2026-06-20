<?php
if(isset($_GET["delete"])){
    if(deleteMessage($_GET["delete"])){
        header("Location: ?site=adminClient");
        exit;
    }
}
$messages = getAllMessages();
require_once("views/adminClient.php");
