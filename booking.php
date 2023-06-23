<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-compitable" content="ie=edge">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
          
        <title>make a booking</title>
    
    </head>
    <body>
    <h2><a href='currentbooking.php'>[Current booking]</a><a href="/bnb/">[Return to main page]</a></h2>

        <form action="">
            <div>
            Room (name,type,beds): 
            <input TYPE="TEXT" required placeholder="name"> 
            </div>
            <br>
            <div>
            Checkin date: 
             <input TYPE="text" required placeholder="dd/mm/yyyy" id="datepicker">
            </div>
            
            <br>
            <div>
            Cheackout date: 
             <input type="text" required placeholder="dd/mm/yyyy" id="dateinput"> 
            </div>
            <br>
            <div>
            Contact number:
             <input type="tel"  required placeholder="+00/456/4567" pattern="+[0-9]{2}/[0-9]{3}/[0-9]{4}"  required> 
            </div>
            <br>
            <div>
            Booking extras: 
             
            <textarea name="extras" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="submit">
        </form>
    
    </body>
    <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
         $( function() {
          $( "#dateinput" ).datepicker();
        } );
        </script>
</html>