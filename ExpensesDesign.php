<?php 
  session_start(); 

  //checks if there is not a session open, if true, it reedirects to homepage
  if(!isset($_SESSION['U_D'])) {
    header('Location: index.php');
  }

  include 'controllers/expensesController.php';
  include 'controllers/dashController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Bookkeeping</title>
    <!-- Bootstrap CSS library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- custom CSS file -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="expense_page" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <a class="navbar-brand">Add an Expense</a>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="dashboard.php">DASHBOARD</a></li>
                    <li class="nav-item"><a href="IncomeDesign.php">ADD CASH</a></li>
                    <li class="nav-item"><a href="ExpensesDesign.php">ADD EXPENSES</a></li>
                    <li class="nav-item"><a href="#">REPORTS</a></li>
                    <li class="nav-item"><a href="#">BRAINSTORMING</a></li>
                    <li class="nav-item"><a href="logout.php">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container text-center text-dark">
        <h1> <?php  echo $_SESSION['FName'];?> <?php echo $_SESSION['LName'];  ?></h1>
    </div>
    <br>


    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- We can have anything here -->
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Expense
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $expenseIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- We can have anything here -->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Bills/payments
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Food/Drinks
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Shopping
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Gifts
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Technology
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-6 mb-4">
            <div class="card border-left-success border-left-danger-balance shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Other
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php  echo $balanceIC; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form method="POST" data-ajax="false" action="ExpensesDesign.php">
                    <h3 class="text-center text-uppercase">Add Expense</h3><br>

                    <!-- display empty fields -->
                    <?php 
                        if(isset($_GET['valid'])){
                            $Message = $_GET['valid'];
                            $Message = "Transaction is Successfully Recorded";

                   ?>
                    <div class="alert alert-success text-center">
                        <?php echo $Message ?>
                    </div>
                    <?php  
                        }
                   ?>

                    <!-- Invalid characters -->
                    <?php 
                        if(isset($_GET['invalid'])){
                            $Message = $_GET['invalid'];
                            $Message = "Invalid Character";

                   ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $Message ?>
                    </div>
                    <?php  
                        }
                   ?>




                    <div class="form-group">
                        <label>Amount</label>
                        <input name="expenseAmount" required placeholder="Enter Expense Amount. Ex, 96.12"
                            class=" text-center form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" cols="55" placeholder="Write a Note"
                            class=" text-center form-control form-control-lg"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" required placeholder="Enter Transaction Date"
                            class="text-center form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select type="text" name="category" class="text-center form-control form-control-lg">
                            <option value="BILLS/PAYMENTS" name="bills">BILLS/PAYMENTS</option>
                            <option value="FOOD/DRINKS" name="food">FOOD/DRINKS</option>
                            <option value="SHOPPING" name="shopping">SHOPPING</option>
                            <option value="GIFTS" name="gift">GIFTS</option>
                            <option value="TECHNOLOGY" name="technology">TECHNOLOGY</option>
                            <option value="OTHER" name="other">OTHER</option>
                        </select><br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="add_expense">ADD</button><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">DataTables Example</h6>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="25%">Transaction ID</th>
                            <th width="25%">amount</th>
                            <th width="25%">date</th>
                            <th width="25%">comment</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Transaction ID</th>
                            <th>amount</th>
                            <th>date</th>
                            <th>comment</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS library -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <div class="centerDiv">
    </div>
</body>

</html>