<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Refill My Account</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-default navbar-static-top" id="ibx_navbar" role="navigation">
    <div class="navbar-header grad">
        <span class="nav navbar-nav hidden-xs"></span>
        <a class="navbar-brand" href="<?php echo ''; ?>"></a>
    </div>
</nav>
<script>
  var ua = navigator.userAgent,
    ios = /iPhone|iP[oa]d/.test(ua),
    android = /Android/.test(ua);
  windows_phone = /Windows Phone/.test(ua);
  if (android || ios || windows_phone) {
    $("#ibx_navbar").css("display","none");
  }else {
    $("#ibx_navbar").css("display","block");
  }
</script>
<style>
    @media (max-width:992px){
        #cardModal .modal-dialog{width:80%;margin:20% auto;}
        #cardModal .thumbnail img{width:50%;}
        #cardModal .thumbnail .caption{margin:0 auto;}
    }
</style>

<div class="container">
    <div>{!! $html !!}</div>
</div>
</body>
<script>
    $(function(){
        $err = <?= $err; ?>;
        if ($err) {
            complete_bind_card(2)
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
            var result = {status:res}
            if (isAndroid) {
                window.cardSuccessful_JS.completePayment(JSON.stringify(result));
            } else if (isiOS) {
                window.webkit.messageHandlers.completePayment.postMessage(JSON.stringify(result));
            }
        }
    })
</script>
</html>
