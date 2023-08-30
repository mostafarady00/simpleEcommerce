<head>
    <!-- Meta Tags -->
   <meta charset="UTF-8">
   <meta name="author" content="Kamran Mubarik">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Title -->
    <title>@yield("title")</title>
    <!-- Style Sheet -->
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <!-- Javascript -->
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
     <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
     <script>
       $(document).ready(function(){
         $('.slider').bxSlider({
             auto: true,
             autoControls: true,
             stopAutoOnClick: true,
             pager: true
           });
       });
    </script>
</head>
