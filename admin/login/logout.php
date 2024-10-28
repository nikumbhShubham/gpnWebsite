<?php

//logout.php
session_start();


//Destroy entire session data.
session_unset();
unset($_SESSION["dept_id"]);
unset($_SESSION["uname"]);

session_destroy();

//redirect page to index.php
header('location:../../index.php');
