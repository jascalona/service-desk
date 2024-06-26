<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/framework/Bootstrap.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/table.css">
    <title>Users</title>


    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--BOOTSTRAP-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--Libreria JS APACHE ECharts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <!--Libreria JS APACHE ECharts-->


</head>
<body>


            <header>
                <div class="logo">
                    <a href="./dashboard.html">Service D</a>
                </div>

                <div  style="display: flex; justify-content: end; padding-right: 50px;" class="user">
                    <div class="btn-group" role="group">
                        <button
                        " type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            name
                        </button>
                        <ul class="dropdown-menu">
                            <li><a style="font-size: 18px; background: none;" class="dropdown-item" href="">Cerrar Sesion</a></li>

                        </ul>
                    </div>
                </div>
                </div>
                </header>

            
            <nav>
                <ul class="nav-links">
                    <li><i style="color: #17BCDA;" class='bx bxs-dashboard'></i><a href="./dashboard.html">Dashboard</a></li>
                    <li><i style="color: #2F35AF;" class='bx bxs-user' ></i><a href="./user.php">Users</a></li>
                    <li><i style="color: #1EE08E;" class='bx bxs-message-detail'></i><a href="">Messages</a></li>
                    <li><i style="color: #f60551;" class='bx bxs-notification'></i><a href="./tikes.html">Tikes</a></li>
                    <li><i style="color: #FAEF11;" class='bx bx-pulse'></i><a href="">Activity</a></li>                    
                    <li><i style="color: #A205F6;" class='bx bxs-group'></i><a href="">Directory</a></li>        
                </ul>
            </nav>



            <div class="raiz">
                <ul>
                    <li><a href="">User</a><i class='bx bx-chevron-right'></i></li>
                    <li><a href="">User</a></li>
                </ul>
            </div>


        <div class="container-table-user">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">SURNAME</th>
                            <th scope="col">USER</th>
                            <th scope="col">EMAIL</th>    
                        </tr>
                    </thead>


                    <tbody>

                    <?php
                    include "./Controller/conexion.php";
                    $sql = $conexion->query("  SELECT *FROM t_users ");
                    while($datos = $sql->fetch_object()) { ?>
                    
                        <tr>
                              <td><?= $datos->ID?></td>
                              <td><?= $datos->NAME?></td>
                              <td><?= $datos->SURNAME?></td>
                              <td><?= $datos->USER?></td>
                              <td><?= $datos->EMAIL?></td>
                        </tr>
                        
                        <?php
                        }
                        ?>
                       
                    </tbody>
                    </table>

        </div>



    
</body>
</html>