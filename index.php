<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET INSTAGRAM ACCESS TOKEN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css" />
</head>
<body>
<div class="row">
 <h3>Get INSTAGRAM access token:</h3>
  <p>The token will be return as part of the redirect URL, in a hash variable. <br>Example: <i> http://localhost/#access_token=198404w.6b84e3155ac844abb3b6d5ef25654ec8 </i></p>
   
    <?php
        $client_id ='732f5b764d874b439d3078b83ec3cb87';
        $redirect_url = 'http://localhost'; //it needs to match exactly as the one you provided  

    ?>

  <a class="success button" style="color:white;" href="https://api.instagram.com/oauth/authorize/?client_id=<?=$client_id;?>&redirect_uri=<?=$redirect_url;?>&response_type=token">Give me the TOKEN!</a>
  

 </div>
 
</body>
</html>