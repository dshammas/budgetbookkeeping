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
        <style>
            .centerDiv {
                position: absolute;
                top:130px;
                left: 150px;
                width:900px;

            }
            .rightDiv {
                position: absolute;
                top:100px;
                right: 80px;
                width:300px;
                text-align: center;

            }
            aside > h4 {
                margin: 0;
            }
            aside
            { border: 1px outset black;
              background-color: white; float: right;
              width: 300px; margin: 5px;
              padding: 20px; }
            label{
                position: relative;
                left: 50px;
                border: 1px outset black;
                padding: 10px;
                width:100px;
            }

        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="index.html">LOGO</a>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="index.html">DASHBOARD</a></li>
                        <li class="nav-item"><a href="about.html">ADD CASH</a></li>
                        <li class="nav-item"><a href="project.html">ADD EXPENSES</a></li>
                        <li class="nav-item"><a href="login.php">REPORTS</a></li>
                        <li class="nav-item"><a href="contact.html">BRAINSTORMING</a></li>
                        <li class="nav-item"><a href="contact.html">SIGN OUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center">
            <img class="rounded mx-auto d-block img-thumbnail" src="img/newyork.jpg" alt="">
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
            <center><h4><b>Add Expenses</b></h4></center>
            <br>
            <br>

            <label>Amount</label><input type="text" id="first" size="10" autofocus style="border: 1px outset black;position:absolute;
                                        background-color: white; right: 220px; width: 300px; margin: 5px;padding:10px;top:70px;"><br><br>

            <label>Comment</label><input type="text" id="first" size="15" autofocus style="border: 1px outset black;position:absolute;
                                         background-color: white; right: 220px; width: 300px; margin: 5px;padding:10px;top:140px;"><br><br>

            <label>date</label><input type="text" id="first" size="15" autofocus style="border: 1px outset black;position:absolute;
                                      background-color: white; right: 220px; width: 300px; margin: 5px;padding:10px;top:210px;"><br><br>

            <label>Category</label><input type="text" id="first" size="15" autofocus style="border: 1px outset black;position:absolute;
                                          background-color: white; right: 220px; width: 300px; margin: 5px;padding:10px;top:270px;"><br><br>

            <label>Done</label><input type="text" id="first" size="15" autofocus style="border: 1px outset black;position:absolute;
                                      background-color: white; right: 300px; width: 150px; margin: 5px;padding:10px;top:340px;"><br><br>


        </div>
        <div class="rightDiv">
            <aside> <h4>Total expenses</h4> $ </aside>
            <aside> <h4>Bills and Payments</h4> $ </aside>
            <aside> <h4>Food and Drinks</h4> $ </aside>
            <aside> <h4>Shopping</h4> $ </aside>
            <aside> <h4></h4> $ </aside>
        </div>
    </body>
</html>
