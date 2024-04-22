<?php
//hapus session
session_start();
session_destroy();

//araahkan kehalaman login
header('location:index.html');