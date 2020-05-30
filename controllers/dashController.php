<?php

/*
@author Maurice Fuentes
@version 5/22/2020

This file will take care of pulling the information from
the database and displaying it into the dashboard
*/

//session_start();

$user_email = $_SESSION["Email"];
$user_id = $_SESSION["U_D"];


//create a connection To the DB
require_once 'config/db.php';

$query = "SELECT SUM(income) FROM csi3370_income_trans WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

if ($result->num_rows != 0) {
    while ($rows = $result->fetch_assoc()) {
        $income = $rows['SUM(income)'];
        $incomeIC = number_format($income, 2,'.', ',');
    }
}

$query = "SELECT SUM(expense) FROM csi3370_expenses_trans WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);

if ($result->num_rows != 0) {
    while ($rows = $result->fetch_assoc()) {
        $expenses = $rows['SUM(expense)'];
        $expenseIC = number_format($expenses, 2,'.', ',');
    }
}

$balance = $income - $expenses;
$balanceIC = number_format($balance, 2,'.', ',');


    
    // this block of code is for pulling the total number of transactions in the dashboard page
    $query_expense = "SELECT COUNT(expense) FROM csi3370_expenses_trans WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query_expense);
    if ($result->num_rows != 0) {
        while ($rows = $result->fetch_assoc()) {
            $expense_transaction = $rows['COUNT(expense)'];
        }
    }
    $query_income = "SELECT COUNT(income) FROM csi3370_income_trans WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query_income);
    if ($result->num_rows != 0) {
        while ($rows = $result->fetch_assoc()) {
            $income_transaction = $rows['COUNT(income)'];
        }
    }
    $total_number_of_transaction = $expense_transaction + $income_transaction;


?>