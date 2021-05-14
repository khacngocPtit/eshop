<?php
define("MY_PAGE", "E Shop");

define("DB_HOST", "localhost");
define("DB_NAME", "quan_ly_san_pham");
define("DB_USER", "root");
define("DB_PW", "");

define("DEBUG", true);

if(DEBUG) {
    ini_set("display_errors", 1);
}
else {
    ini_set("display_errors", 0);
}
