<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dark Horse Automat – powered by RC Coffee</title>
  <link rel="icon" href="./image/favicon.ico">
  <link href="{{ URL::asset('css/web_base.css') }}" rel="stylesheet">

  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  <style>
    .page-description {
      padding:0.4rem 1.0rem;
    }
    .page-description .error-msg{
      font-size:0.24rem;
      padding-bottom: 0.4rem;
    }
    .page-description .error-title{
      padding:0.3rem 0.2rem;
      border-top: 1px solid  rgb(207, 171, 130);
    }
    .page-footer .social{
      padding-top:0
    }
    .store-link{
      width:40px;
      height:40px;
    }
    @media (max-width: 640px) {
      .page-description {
        padding:0.8rem 1.0rem;
      }
      .page-description .error-title{
        padding:0.3rem 0;
      }
      .page-footer .social-link a{
        margin:0.2rem 0.18rem;
      }
      .download-left {
        margin-left:0px !important;
      }
    }
  </style>
</head>
<body>
<form method="POST" action="/profile">
@csrf
</form>
  <div class="content hide">
    <div class="page-header">
      <img src="{{ URL::asset('image/retention/email/img_logo.png') }}" alt="logo">
    </div>
    <div class="page-description">
      <p class="error-msg" id="status-msg">Sorry, we'll miss you!</p>
      <p id="content-msg" style="padding:0 0.10rem"> In case you clicked Unsubscribe by mistake, click <a href="javascript:void(0);" id="resubscribe">Re-Subscribe</a></p>
    </div>
    <div class="page-footer">
      <div class="social">
        <p class="social-title">STAY CONNECTED</p>
        <div class="social-link">
          <a class="link-item" href="https://www.twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/twitter.png') }}" alt="twitter"></a>
          <a class="link-item" href="https://www.instagram.com/RCCoffeeBarista/" title="linkedin" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/ins_1.png') }}" alt="ins-circle"></a>
          <a class="link-item" href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/facebook.png') }}" alt="facebook"></a>
          <a class="link-item" href="https://www.linkedin.com/company/RCcoffee" title="ins" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/ins.png') }}" alt="ins-word"></a>
        </div>
        <div class="social-bottom">
          <span style="display: inline-block;">@DARKHORSECAFE</span>
          <span style="display: inline-block;">@RCCOFFEEBARISTA</span>
        </div>
      </div>
      <div class="download">
        <div class="download-left" style="margin-left: 30px;">
          <div class="download-area" style="display:flex;justify-content: flex-start;">
            <a class="store-link" href="https://apps.apple.com/us/app/rc-coffee-automat/id1531999680"><img src="{{ URL::asset('image/refer/App_Store_logo.png') }}" style="display: inline-block;height:100%" alt="qr-code-image"></a>
            <a class="store-link" style="padding-left:10px" href="https://play.google.com/store/apps/details?id=com.kiosoft.rccoffee"><img src="{{ URL::asset('image/refer/Google_Play_Store_logo.png') }}" style="display:inline-block;height:100%" alt="qr-code-image"></a>
          </div>
        </div>

        <div class="rc-logo">
          <div class="regular-font" style="text-align: center;">
            Powered by:
          </div>
          <img src="{{ URL::asset('image/retention/email/black_logo.png') }}" style="padding-top:0.10rem;width:0.6rem;" alt="logo" >
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function(){
      var email = getRequest()['email'] || ''
      init_page(email)
      $("#resubscribe").on('click',function(){
        resubscribe(email)
      })
    })

    function init_page(email){
      var str1 = "Sorry, we'll miss you!"
      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        dataType: "json",
        url:"{{ url('/subscriber') }}",
        data: {email:email,action:0},//action:0--unsubscribe;1--resubscribe
        success:function(res){
          if(res.status_code == 200){
            $(".content").removeClass('hide').addClass('show')
            $("#status-msg").text(str1);
            $('meta[name="csrf-token"]').attr('content', res.data._token)
          }else{
            $(".content").removeClass('hide').addClass('show')
            $("#status-msg").text(res.message);
          }
        },
        error:function(error){
          $(".content").removeClass('hide').addClass('show')
          $("#status-msg").text('Status Code :' + error.status + ';Message: ' + error.statusText);
        }
      })

    }

    function resubscribe(email){
      var str2 = "Welcome back!";
      var str3 = "We’re delighted to have you on-board and look forward to staying in touch.​";
      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        dataType: "json",
        url: "{{ url('/subscriber') }}",
        data: {email:email,action:1},//action:0--unsubscribe;1--resubscribe
        success:function(res){
          if(res.status_code == 200){
            $(".content").removeClass('hide').addClass('show')
            $("#status-msg").text(str2);
            $("#content-msg").text(str3);
          }else{
            $(".content").removeClass('hide').addClass('show')
            $("#status-msg").text(res.message);
          }
        },
        error:function(error){
          $(".content").removeClass('hide').addClass('show')
          $("#status-msg").text('Status Code :' + error.status + ';Message: ' + error.statusText);
        }
      })
    }

    function getRequest() {
       var url_params = location.search;
       var theRequest = new Object();
       if (url_params.indexOf("?") != -1) {
          var str = url_params.substr(1);
          param_str = str.split("&");
          for(var i = 0; i < param_str.length; i ++) {
             theRequest[param_str[i].split("=")[0]]=unescape(param_str[i].split("=")[1]);
          }
       }
       return theRequest;
    }
  </script>
</body>

</html>


