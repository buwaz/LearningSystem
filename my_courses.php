

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
session_start();
include './DB.php';
?>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style4.css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://dfcb.github.io/extra-strength-responsive-grids/css/grid.css'>
<link rel='stylesheet prefetch' href='http://thisisstar.com/images/100UI/002/css/paymentfont.css'>


</head>
<body>

<nav class="navbar navbar-inverse" style="background: #ffc107; padding: 25px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"style="font-size: 30px; color: white">ABC Institute</a>
        </div>
        <ul class="nav navbar-nav" style="float: right">
            <li class="active"><a href="#" style="font-size: 30px;color: white">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 30px;color: white">
                    Admin <span class="caret"></span></button>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="Add_Courses.php">Add Courses</a><br>
                    <a class="dropdown-item" href="Add_Course_Module.html">Add Course Modules </a>


                </div>
            </li>
            <li><a href="Courses.php" style="font-size: 30px;color: white">Courses</a></li>

        </ul>
    </div>
</nav>

<div class="container" style=" margin-top: 100px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">



        </div>
        <div class="col-sm-8">

            <h1>My Enrolled Courses</h1>
            <br>

          
        </div>

 <div class="panel panel-warning">
                        <div class="panel-heading ">Subject List</div>
                        <div class="panel-body">
                            <table id="example" class="display table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Module No</th>
                                <th>Module Type</th>
                                <th>Module Name</th>
                                <th>Enrollment Key</th>
                                <th>Year</th>
                                <th>Lecture ID</th>
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = " SELECT * FROM course ";
                            $resultx = getData($sql);
                            if ($resultx != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultx)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['module_no'] ?></td>
                                        <td><?= $row['m_type'] ?></td>
                                        <td><?= $row['m_name'] ?></td>
                                        <td><?= $row['enroll_key'] ?></td>
                                        <td><?= $row['year'] ?></td>
                                        <td><?= $row['lecture_id'] ?></td>
                                       
                                        <td></td>
                                        <td><a class="btn btn-success btn-sm" href="./unenroll.php">Course Details</a>
                                        <a onclick="return (function(){
    if(confirm('Want to remove?')){return true;}else{return false;}
})();" class="btn btn-danger btn-sm" href="unenroll.php?name=<?= $value['name'] ?>&created_date=<?= $value['created_date'] ?>&flag=DELETE&id=<?= $value['id'] ?>">Un Enroll Me</a></td>                         
                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                        </div>
                    </div>
                    


    </div>

</div>




 <script src='../js/jquery-2.2.3.min.js'></script>

        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
 
        <script src="../js/bootstrap.min.js"></script>


        <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        
        
        



</body>
</html>