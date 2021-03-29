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
<style>
   #confirm {
       margin-top: 20px
   } 
</style>
<body>
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
          <h2 class="page-header"><i class="fa fa-cc-card"></i> Select Payment </h2>
            <div class="radio">
                <label>
                    <input type="radio" name="card_type" id="credit" value="credit" checked="checked" />
                    Credit Card
                </label>
                </div>
            <div class="radio">
                <label>
                <input type="radio" name="card_type" id="debit" value="debit" />
                Debit Card
                </label>
            </div>
            <p></p>
            <button type="button" class="btn btn-primary " id="confirm"> Confirm </button>
        </div>
        </div>
    </div>
</div>

<script>
$(function() {
    var token = GetQueryString('token');
    var amount = GetQueryString('amount');
    var creditCardPath = "/register-credit-card"
    var debitPath = "/debit/refill"
    
    $('#confirm').on('click',function(){
        var cardType = $('input:radio:checked').val();
        var url = cardType == "credit" ? creditCardPath : debitPath
        url += '?token=' + token
        if (cardType != "credit") {
            url += '&amount=' + amount;
        }
        //console.log(url)
        window.location.href = url
    });
    
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }
})
</script>
</body>
</html>
