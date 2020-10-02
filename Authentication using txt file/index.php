<!-- Coded by: Siddharth Kumar Yadav -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   


</head>
<body>
<div class="container" style="margin: 0 auto; width:fit-content; margin-top:35vh;">
<fieldset>
<legend>Authentication System</legend>
<table>
    <form>
<tr>
<td>Username</td>
<td><input  name="email" id="email" type="email"></td>
</tr>
<td>Password</td>
<td><input name="password" id="password" type="password"></td>
<tr>
<td></td>
<td><button type="submit" name="submit" id="submit">Submit</button></td>
</tr>
    </form>
</table>
</fieldset>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
      $(function () {
        $('#submit').click(function (event) {
            event.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'site.php',
            data: $('form').serialize(), //important line to send data
            success:function(result){
                $('body').append(result);
               
            }

          });
          
        });
      });
    </script>
</body>
</html>



