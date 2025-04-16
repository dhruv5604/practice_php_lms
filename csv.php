<?php

$con = mysqli_connect("localhost","root","root@user","demo");

$csvfile = fopen("products.csv","r");

fgetcsv($csvfile);

while (($row = fgetcsv($csvfile)) !== false) {
    $product_name = $row[0];
    $price = $row[1];
    $stock = $row[2];

    $stmt = $con->prepare("insert into csv_products(product_name,price,stock) values(?,?,?)");
    $stmt->bind_param("sii", $product_name, $price, $stock);
    $stmt->execute();
}

fclose($csvfile);