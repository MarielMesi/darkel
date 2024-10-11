<?php
    include_once 'dbh.inc.php';
    $query = $conn->query("SELECT AVG(Close) AS AvgPrice , Year(Date) AS Year FROM ethereum WHERE Year(Date) >= '2000' AND Year(Date) <= '2022' GROUP BY YEAR(Date);");
    foreach ($query as $data)
    {
        $ethavgprice[] = $data['AvgPrice'];
        $ethyear[] = $data['Year'];
    }