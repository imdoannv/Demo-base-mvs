<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17315";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost/we17315_php2/bai6_base_mvc/";

function delete_er_sc(){
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
}