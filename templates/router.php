<?php

if (urlIs("/")) {
    require "controllers/index.php";
} else if (urlIs("/about")) {
    require "controllers/about.php";
}