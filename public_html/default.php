<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Default page</title>
        <link rel="icon" type="image/x-icon" href="https://hpanel.hostinger.com/favicons/hostinger.png">
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Default page" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">

    </head>
    
    <body>
        <div class="content">
            <p id='demo'>c</p>
        </div>
    </body>
    
     <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
            document.getElementById("demo").innerHTML = "<br>"+
            this.getAllResponseHeaders() + "<br>" + this.responseXML;
          //  alert(this.getAllResponseHeaders());
       }
    xhttp.open("GET", "https://ilay-apis.online/APIs/API-1/index.php/user/list?limit=20", true);
    xhttp.send(); 

        </script>

</html>