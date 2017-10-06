


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aalux</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,400i,500,500i,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    <link href="../assets/css/master.css" rel="stylesheet">


    <!--date picker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--time picker-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <link rel="stylesheet" href="../assets/css/parsley.css">
</head>

@include('includes.header')

    @yield('content')

@include('includes.footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/slick/slick.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.testi').slick({
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000
        });
    });
</script>


<!--date picker-->

<script src="../assets/js/jquery-ui.js"></script>

<script type="text/javascript">
    $(function () {
        $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' });

    });
</script>

<!--time picker-->
<script src="../assets/js/jquery.timepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#timepicker').timepicker({});
    });
</script>


<!--geocomplete-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA63EQfeU9KZGRHViThrJtTUTYH21zD1zQ&libraries=places"></script>
<script src="../assets/js/jquery.geocomplete.js"></script>
<script>
$(document).ready(function () {
$("#pickupaddress").geocomplete();
});
</script>

<script src="../assets/js/parsley.min.js">
</script>

</body>
</html>