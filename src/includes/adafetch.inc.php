<?php
    include_once 'dbh.inc.php';
    $query = $conn->query("SELECT AVG(Close) AS AvgPrice , Year(Date) AS Year FROM cardano WHERE Year(Date) >= '2000' AND Year(Date) <= '2022' GROUP BY YEAR(Date);");
    foreach ($query as $data)
    {
        $adaavgprice[] = $data['AvgPrice'];
        $adayear[] = $data['Year'];
    }