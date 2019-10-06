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
            <form action="admin.php" method='post'>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Admin</button>
            </form>
            <a class="navbar-brand" href="/">
                <div >
                        <h2>STOCK MANAGER</h2>
                </div>
            </a>
            
            
            
            <form action="logout.php" method='post'>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Logout</button>
            </form>
           
            
            
        </nav>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Search Inventory</h5>
                        <form id="check">
                            <div class="form-group">
                            <label for="inp">Enter Item</label>
                            <input type="text" class="form-control" id="item" name="item" placeholder="Enter Item Code" required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Check</button>
                            
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
    $('#check').submit(function(){

        /*// show that something is loading
        $('#result').html("<b>Loading response...</b>");*/

        // Call ajax for pass data to other place
        $.ajax({
            type: 'POST',
            url: 'fetch.php',
            data: $(this).serialize() // getting filed value in serialize form
        })
        .done(function(data){ // if getting done then call.

            // show the response
            $('#result').html(data);

        })
        .fail(function() { // if fail then getting message

            // just in case posting failed
            alert( "Posting failed." );

        }); 

        // to prevent refreshing the whole page page
        return false;

        });
    });
</script> 