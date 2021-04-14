<?php 
    require('connection.php');
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM Foods WHERE Foods.id = $del";
        $run = mysqli_query($con, $q);
    }
?>
  </head>
  <body>
    <div id="wrapper">


        <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> All Foods <small>Edit or Delete Food</small></h2>
                    
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Food Name</center></th>
                                    <th><center>Location</center></th>
                                    <th><center>Time</center></th>
                                    <th><center>Edit</center></th>
                                    <th><center>Delete</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM Rooms ORDER BY Foods.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['id']; ?></center></td>
                                        <td><center><?php echo $row['Name']; ?></center></td>
                                        <td><center><?php echo $row['Location']; ?> sq</center></td>
                                        <td class="text-primary"><center><?php echo $row['Time']; ?> /-</center></td>
                                        <td><center><a href="edit-Food.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a></center></td>
                                        <td><center><a href="all-Foods.php?del=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a></center></td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

