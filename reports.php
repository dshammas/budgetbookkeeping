<?php 
  session_start(); 

  //checks if there is not a session open, if true, it reedirects to homepage
  if(!isset($_SESSION['U_D'])) {
    header('Location: index.php');
  }

  include 'controllers/reportsController.php';
  require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Bookkeeping</title>
    <!-- Bootstrap CSS library -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- custom CSS file -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="expense_page" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome, <?php  echo $_SESSION['FName'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">DASHBOARD <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="IncomeDesign.php">ADD CASH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ExpensesDesign.php">ADD EXPENSES</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="reports.php">REPORTS</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="brainstorming.php">BRAINSTORMING</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">SIGN OUT</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container mt-md-5 text-center text-dark">
        <h1> Search for transactions</h1>
    </div>

    <form action="reports.php" data-ajax="false" method="POST">
        <input name="search" type="search" autofocus>
        <input type="submit" name="button" value="search">
    </form>
    </br>
    <button onclick="window.print();return false;">Print</button>

    <?php 

        if(isset($_POST['button'])){
            $search=$_POST['search'];

            //$query=mysqli_query( $conn, "select * from csi3370_expenses_trans where (type_of_expense like '%$search%) OR (expense_trans_id like '%$search%) OR (expense like '%$search%) OR (comment like '%$search%) OR (tiemstamp like '%$search%)'");
            $query=mysqli_query( $conn, "select * from csi3370_expenses_trans where type_of_expense like '%$search%'");

            if (mysqli_num_rows($query) > 0) {
                echo "<h3>Expenses Results</h3>";
                echo "<table><tr><th>Expense ID</th><th>Amount</th><th>Type of Expense</th><th>Comment</th><th>Date</th></tr>";
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr><td>".$row['expense_trans_id']."</td><td>".$row['expense']."</td><td>".$row['type_of_expense']."</td><td>".$row['comment']."</td><td>".$row['timestamp']."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "<h3>Expenses Results</h3>";
                echo "No results Found<br><br>";
            }
        }

    ?>

    <?php 

        if(isset($_POST['button'])){ 
            $search=$_POST['search'];

            $query1=mysqli_query( $conn, "select * from csi3370_income_trans where comment like '%$search%'");

            if (mysqli_num_rows($query1) > 0) {
                echo "<h3>Income Results</h3>";
                echo "<table><tr><th>Income ID</th><th>Amount</th><th>Comment</th><th>Date</th></tr>";
                while ($row = mysqli_fetch_array($query1)) {
                    echo "<tr><td>".$row['income_trans_id']."</td><td>".$row['income']."</td><td>".$row['comment']."</td><td>".$row['timestamp']."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "<h3>Income Results</h3>";
                echo "No results Found<br><br>";
        }
    }

?>

    <!-- Bootstrap JS library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <div class="centerDiv">
    </div>
</body>

</html>