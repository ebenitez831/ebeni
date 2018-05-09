<!DOCTYPE html>
<html>
    <head>
        <title> Top 20 games </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
                background-image: url("image/background2.jpg");
            }
            
        </style>
        
        <style type="text/css">
            @import url("css/styles.css");
        </style>
   
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <div justify-content-end>
              <li class="nav-item">
                <a style = "text-align: right" class="nav-link" href="adminLogin.php">Admin Login</a>
              </li>
              </div>
              
            </ul>
          </div>
        </nav>

        
        
        <div class="jumbotron">
          <h1> The top 20 highest rated games </h1>
        </div>
        
      <div>  
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</div>
    
    <div>
      <div>
        <form action = "searchPage.php" method ="get">
            <input type ="text" name = "search" placeholder = "Search for a game title">
            <input type = "submit" class = "btn btn-success btn-md" value= "Submit" />
        </form>
      </div><br>
      
      <div>
        <form action = "searchPage.php" method ="get">
        <select id = "platform" action = "searchPage.php">
          <option value="" select = "selected">Select One</option>
          <option value="Console">Console</option>
          <option value="PC">PC</option>
          <option value="Console and PC">Console and PC</option>
        </select>
      </div>
      
    </div><br>
    
  <script>
    $(document).ready( function(){
        $("#platform").change( function () {
                    alert("hi")
                    alert( $("#platform").val());
                    
                    $.ajax({

                        type: "GET",
                        url: "api/getGameByPlatformPI",
                        dataType: "json",
                        data: { "platform": $("#platform").val()},
                        success: function(data,status) {
                        
                        $("#county").html("<option>Select One</option>");
                        for(var i=0; i<data.length; i++)
                        {
                           $("#county").append("<option>" + data[i].county + "</option>"); 
                        }
                        
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                        
                    });//ajax
    });
    
  </script>