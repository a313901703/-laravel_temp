<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Refill Success</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
<div>
    <nav class="navbar navbar-default navbar-static-top" id="ibx_navbar" role="navigation">
        <div class="navbar-header grad">
            <span class="nav navbar-nav hidden-xs"></span>
            <a class="navbar-brand" href="<?php echo ''; ?>"></a>
        </div>
    </nav>
    
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Refill Success</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $(function(){

        var balance = <?= $balance; ?>

        init()

        function init() {
             complete_bind_card(1,balance)
        }

        /**
        * add card by ibx
        * Param status Must  int-- result  ,1-- add card success; 0-- fail
        *
        */
        function complete_bind_card(res,balance){
            var ua = navigator.userAgent;
            var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
            var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
            var result = {status:res,balance:balance}
            console.log(result);
            if (isAndroid) {
                window.cardSuccessful_JS.completePayment(JSON.stringify(result));
            } else if (isiOS) {
                window.webkit.messageHandlers.completePayment.postMessage(JSON.stringify(result));
            }
        }
    })
</script>
</html>
