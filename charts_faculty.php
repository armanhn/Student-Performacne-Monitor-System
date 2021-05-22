<?php
	include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Charts</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<style>
    .potato{
        border-radius: 10px;
        padding:20px;
    background:	#f5f5f5 ;

    }
    </style>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">SPM DASHVIEW</a>

            <form>
                <button class="btn" style="border: none;
                background: peachpuff;
                margin: 10px;
                outline: none;
                color:black;
                font-size: 16px;" 
                
                formaction="facultydash.html" >HOME</button>
              </form>
            <!-- LOGOUT BUTTN-->
            <form>
                <button class="btn" style="border: none;
                background: rgb(167, 107, 55);
                background-position: right;
                margin: 5px;; 
                outline: none;
                color:black;
                font-size: 16px;" 
                formaction="LOGIN.HTML" >LOGOUT</button>
              </form>


            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0"></ul>
        </nav>
        
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                PLEASE CHOOSE STUDENT ID FOR CHART VIEW
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                STUDENT WISE CHART
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table> 
                                
                                <form action = "student_wise_chart.php" method = "post">
		<th>Enter Stundent ID</th>
		<td><input type = "text" name = "id" ></td>
		<br>
		<td><input type = "submit" name = "submit" ></td>
		<br>

                       </table>
                                </div>
                            </div>
                           
                                              
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                
                                    
                        </div>
                    </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
