<?php
require_once 'functions.php';

list($errors, $input) = validateForm();
renderTemplate("result.php", $errors, $input);