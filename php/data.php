<?php

const DB_PROWIDER = 'pgsql';
const DB_HOST = 'localhost';
const DB_BASANAME = 'cloudstore';
const DB_USERNAME = 'postgres';
const DB_PASSWORD = '';

function db_connect() {
        $pdo = new PDO(DB_PROWIDER.':host='.DB_HOST.';dbname='.DB_BASANAME,
        DB_USERNAME,
        DB_PASSWORD
    );
    return $pdo;
}

function query($sql, $params=[]) {
    $pdo = db_connect();
    $que = $pdo->prepare($sql);
    if(!empty($params)) {
        foreach ($params as $key => $value) {
            $que->bindValue(':'.$key, $value);
        }
    }
    $que->execute();
    return $que;
}

function select($sql, $params=[]) {
    $que = query($sql, $params);
    $que->setFetchMode(PDO::FETCH_ASSOC);
    return $que->FetchAll();
}
function update($sql, $params=[]) {
    $que = query($sql, $params);
    return $que;
}
function delete($sql, $params=[]) {
    $que = query($sql, $params);
    return $que;
}

