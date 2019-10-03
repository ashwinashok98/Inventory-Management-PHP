<?php

    session_start();
    include("connect.php");
    
    // Redirect if not logged in
    if (!isset($_SESSION['loggedin'])) 
    {
        header('Location: index.html');
        exit();
    }

    if (!isset($_POST['item'])) 
    {
        header('Location: home.php');
        exit();
    }
    else
    {
        $item=$_POST['item'];
        if ($stmt = $con->prepare('select * from inventory where productId=?')) 
        {
            // Bind parameters (s = string, i = int, b = blob, etc)
            $stmt->bind_param('i', $item);
            $stmt->execute();
            // Store the result 
            $stmt->store_result();
            $stmt->bind_result($productName, $productId,$quantity,$color);
            $stmt->fetch();
            if($stmt->num_rows > 0)
            {
                $productName=strtoupper($productName);
                $productId= strtoupper($productId);
                $quantity= strtoupper($quantity);
                $color=strtoupper($color);
                
                
               
                
                echo'<div class="container">;
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                            <h3 class="card-title text-center"><b>STOCK</b></h3>
                            <img id="stock-img" src="chair1.png" >';
                            
                            echo'<table class="table table-striped">
                        
                            <tbody>
                          
                                <tr>
                                <th scope="row">Name</th>
                                <td>'.$productName.'</td>
                                </tr>
                                <tr>
                                <th scope="row">ID</th>
                                <td>'.$productId.'</td>
                                </tr>
                                <tr>
                                <th scope="row">Quantity</th>
                                <td>'.$quantity.'</td>
                                </tr>
                                <tr>
                                <th scope="row">Color</th>
                                <td>'.$color.'</td>
                                </tr>
                                
                            </tbody>
                            </table>';
                                
              
                echo'           </div>
                              </div>
                            </div>
                        </div>
                    </div>';
            }
            else
            {
                echo'<div class="container">;
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                                 <h4 class="card-title text-center">No Results Found</h4>';
                                

              
                echo'               </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            
           

           


        }
    }


?>