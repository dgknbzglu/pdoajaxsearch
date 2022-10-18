<?php
include "ayar.php";
?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>!</title>
    <style>
        .sonuc {
        margin: 0;
        padding-left: 1.2rem;
        }
        .sonuc li {
          position: relative;
          list-style-type: none;
          padding-left: 1.5rem;
          margin-bottom: 0.5rem;
          line-height:15px;
        }
        
        .sonuc li:before {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            top: -2px;
            width: 5px;
            height: 11px;
            border-width: 0 2px 2px 0;
            border-style: solid;
            border-color: #00a8a8;
            transform-origin: bottom left;
            transform: rotate(45deg);
        }
        
        
        /* Boilerplate stuff */
        *,
        *:before,
        *:after {
          box-sizing: border-box;
        }

    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto py-5">
                <h3 class="text-center">PHP MySQL AJAX Veri Arama</h3>
                <input type="text" id="ara" class="form-control" autocomplete="off" placeholder="Ara...">
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="sonuc"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        loadData();
        function loadData(veri){
          $.ajax({
            url : "arama.php",
            type: "POST",
            chache :false,
            data:{veri:veri},
            success:function(response){
              $(".sonuc").html(response);
            }
          });  
        }
        
        $("#ara").keyup(function(){
          var ara = $(this).val();
          if (ara !="") {
            loadData(ara);
          }else{
            loadData();
          }
        });
    });
</script>
  </body>
</html>
