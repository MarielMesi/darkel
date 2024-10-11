<?php
    include_once 'dbh.inc.php';
    $query = $conn->query("SELECT AVG(Close) AS AvgPrice , Year(Date) AS Year FROM binance WHERE Year(Date) >= '2000' AND Year(Date) <= '2022' GROUP BY YEAR(Date);");
    foreach ($query as $data)
    {
        $bnbavgprice[] = $data['AvgPrice'];
        $bnbyear[] = $data['Year'];
    }