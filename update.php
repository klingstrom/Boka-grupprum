<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>

<div class="load">

</div>




    <script type="text/javascript">



    $(document).ready(function(){
          setInterval(function(){
            var dt = new Date();
            var h = dt.getHours();
            var m = dt.getMinutes();


            if (h == 00 && m == 00) {
              $('.load').load('updater.php')
            }

          }, 30000);
      });





    </script>
  </body>
</html>
