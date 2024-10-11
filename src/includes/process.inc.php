<?php
//CREATE TABLE solana ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;
//CREATE TABLE cardano ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;
//CREATE TABLE binance ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;
//CREATE TABLE bitcoin ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;
//CREATE TABLE ethereum ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;
//CREATE TABLE xrp ( `SNo` INT(11) NOT NULL , `Name` VARCHAR(56) NOT NULL , `Symbol` VARCHAR(56) NOT NULL , `Date` DATETIME NOT NULL , `High` BIGINT NOT NULL , `Low` BIGINT NOT NULL , `Open` BIGINT NOT NULL , `Close` BIGINT NOT NULL , `Volume` BIGINT NOT NULL , `Marketcap` BIGINT NOT NULL ) ENGINE = InnoDB;

require_once 'dbh.inc.php';

$xml = simplexml_load_file('Bitcoin.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO bitcoin(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}
$xml = simplexml_load_file('Binance.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO binance(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}
$xml = simplexml_load_file('Cardano.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO cardano(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}
$xml = simplexml_load_file('Solana.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO solana(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}
$xml = simplexml_load_file('XRP.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO xrp(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}
$xml = simplexml_load_file('Ethereum.xml') or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $SNo = $row->SNo;
    $Name = $row->Name;
    $Symbol = $row->Symbol;
    $Date = $row->Date;
    $High = $row->High;
    $Low = $row->Low;
    $Open = $row->Open;
    $Close = $row->Close;
    $Volume = $row->Volume;
    $Marketcap = $row->Marketcap;

    $sql = "INSERT INTO ethereum(SNo, Name, Symbol, Date, High, Low, Open, Close, Volume, Marketcap) VALUES ('" . $SNo . "','" . $Name . "','" . $Symbol . "','" . $Date . "','" . $High . "','" . $Low . "','" . $Open . "','" . $Close . "','" . $Volume . "','" . $Marketcap . "')";
    
    $result = mysqli_query($conn, $sql);
}