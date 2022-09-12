<?php
require_once 'ValidationBuilder.php';

function validateForm(): array
{
    $validator = new ValidationBuilder();
    $validator
        ->cityName($_POST['region1'], $_POST['city1'], $_POST['region2'], $_POST['city2'])
        ->notNullPost($_POST['post1'], $_POST['post2'])
        ->notNullSize($_POST['size'])
        ->notNullWeigh($_POST['weigh'])
        ->maxSize($_POST['size'])
        ->maxWeigh($_POST['weigh']);

    return array($validator->errors, $validator->input);
}

function renderTemplate($path, $errors, $input): void
{
    include($path);
}