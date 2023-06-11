<?php

require "functions.php";

if (urlIs("/")) {
    require "controllers/index.php";
} else if (urlIs("/about")) {
    require "controllers/about.php";
} else if (urlIs("/contact")) {
    require "controllers/contact.php";
}