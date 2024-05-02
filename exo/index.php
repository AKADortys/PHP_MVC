<?php
include('connect.php');
include('model.php');
if(empty($_GET['LangageID'])) {
    $id= 1;

} else {
    $id = $_GET['LangageID'];

}
$data = AfficheLangage($cnx, $id);

include('view.php');