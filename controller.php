<?php
require_once 'functions.php';
//include 'classes.php';

//triangle's last edge
$maxim = new classes;
$sum = $maxim->hypo($_POST['Fedge'], $_POST['Sedge']);
echo '<h2>'.'Edge of Triangle'.'</h2>';
echo 'Third length is '.intval($sum); //intval() interger value

//count ones in binary
$bin = new classes;
$count = $bin->countOnes($_POST['binumber']);
echo '<h2>'.'Binary'.'</h2>';              
echo 'Number of Ones: '.$count.'. '.'Binary representation of '.($_POST['binumber']).' '.'is'.' '.decbin($_POST['binumber']);
//decbin() - decimal>binary

//find the 2 path
echo '<h2>'.'Parts of Path'.'</h2>';
$path =new classes;
$path->partPath('Result is :'.' '.$_POST['part1'], $_POST['part2']);

//sastry number
echo '<h2>'.'Sastry Number'.'</h2>';
$sastry = new classes;
$equal = $sastry->sastryNum($_POST['sastry1']);
echo 'Output is: '.$equal;
