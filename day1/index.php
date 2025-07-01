<?php
require_once "core/Router.php";

$url = isset($_GET['url']) ? $_GET['url'] : '';
Router::route($url);
