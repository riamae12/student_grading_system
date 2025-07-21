<?php

use palata\Gs\Models\StudentModel;
require 'vendor/autoload.php';

$student = new StudentModel;

$listOfStudents = $student->read();

print_r($listOfStudent);
