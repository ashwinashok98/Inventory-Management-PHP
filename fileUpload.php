<?php

session_start();
// Redirect if not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

	<body>
        <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><h4>Stock Manager</h4></a>
            <form>
                
            </form>
            <form action="logout.php" method='post'>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Logout</button>
            </form>
        </nav>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Upload File</h5>
                    <form method="post" id="export_excel">            
                        <label class="btn btn-lg btn-primary btn-block text-uppercase">
                             Select Excel
                             <input type="file" name="excel_file" id="excel_file" style="display: none;">
                        </label>
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
     </div>
     
                    
       <div id="result"></div>
                        
                    
    </body>
</html>
<script>
  $(document).ready(function(){  
      $('#excel_file').change(function(){  
           $('#export_excel').submit();  
      }); 

      $('#export_excel').on('submit', function(event){ 
           
           event.preventDefault();  
           $.ajax({  
                url:"uploadExcel.php",  
                method:"POST",  
                data:new FormData(this),  
                contentType:false,  
                processData:false,  
                success:function(data){  
                     $('#result').html(data);  
                     $('#excel_file').val('');  
                }  
           });  
      });  
 });
 </script>