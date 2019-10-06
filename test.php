<?php
    /*$pass="test";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    if(password_verify('test', $hash))
    {
        echo("YAss");
        echo($hash);
    }
    else{
        echo("NO");
    }*/
    ?>
    <html>
    <head>

        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
        <body>
    <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    
                  <div class="card-body">
                  
                    <h5 class="card-title text-center">Search Inventory</h5>
                    
                        
                    
                    
                    <table class="table table-striped">
                    
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            
                        </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
     </div>
     
        </body>


     <script>
 $(document).ready(function()
                     {

        $("#item").on('change',function()
                         {
                          
            var keyword = $(this).val();

            makeAjaxRequest(keyword);
        });
    });
    function makeAjaxRequest(value)
    {
        
            $.ajax(
            {
                url:'fetch.php',
                type:'POST',
                data:"item="+value,
                
                beforeSend:function()
                {
                    $("#result").html('Working...');
                    
                },
                success:function(data)
                {
                    $("#result").html(data);
                },
            });
    }
</script>
    </html>
     <!--
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#"><h4>Stock Manager</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminHome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      
    </ul>
            
            
            
        </nav>

-->