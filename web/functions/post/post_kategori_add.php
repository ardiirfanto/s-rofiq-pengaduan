<?php

include "../../../config/sql.php";
$sql = new Sql();

$cat = $_POST['cat'];
try {

    $q = $sql->query(
        "INSERT INTO category_post(category_post) VALUES('$cat')"
    );

    if ($q) {
        echo 1;
    } else {
        echo 0;
    }
} catch (Exception $e) {
    echo $e;
}
