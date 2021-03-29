<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/femail.js?v=20201113') }}"></script>

    <style>
        .form-control{
            height: 48px;
            padding: 14px 12px;
            border: 1px solid #cb8c3f;
            border-radius: 10px;
        }
        .form-control[disabled]{
            background-color: #fff;
        }
        p{
            margin: 0 0 15px;
        }
        .btn:hover, .btn:focus, .btn:active, .btn:visited {
            outline:none !important;
        }
        .error{
            font-size: 12px;
            color: #a94442 ;
        }
        .has-error{
            color: #a94442;
        }
    </style>
</head>
<body style="padding:20px;color:#402209;background: #FFFAF4">
<header>
    <p style="font-size:22px;text-align: center;">GET 50% OFF</p>
    <p>We can’t wait for your friends to join the RC Coffee family!</p>
    <p style="font-size:12px;color:#cb8c3f">Thanks for the referral! Fill out the form below and your friend will receive 50% off each in-app purchase for two weeks. Best part? You will receive the same offer for every friend you refer, after they make their first purchase! Refer more friends and you can accumulate more weeks of 50% off!</p>
</header>
<main>
    <form action="#" id="referral-form" style="margin-bottom: 40px;">
        <div class="alert alert-danger hide" id="error-msg"><b></b></div>
        <div class="form-group">
            <label for="name">Name <span>*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your friend’s name" autocomplete="off" maxlength="40">
        </div>
        <div class="form-group">
            <label for="email">Email <span>*</span></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Your friend’s email address" autocomplete="off" maxlength="100">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" maxlength="4000">Hi, please enjoy 50% off each purchase at the Automat for 2 weeks. I enjoyed it a lot!</textarea>
            <p class="help-block" style="font-size:12px;color:#cb8c3f">Required fields are marked *</p>
        </div>
        <button type="button" id="btn-send" class="btn btn-default form-control" style="border-radius:24px;background-color: #cb8c3f;color:#fff;font-size:16px;" disabled>SUBMIT</button>
    </form>
</main>
<footer>
    <p>Or you can copy the referral code to invite your friends directly</p>
    <div class="form-group">
        <label for="name">Your referral code</label>
        <div style="display:flex;justify-content: space-between;">
            <input type="button" class="form-control" id="copy-value" disabled value="{{@$user->invite_code}}" style="width:190px">
            <button type="button" id="btn-copy" class="btn btn-default form-control" style="width:115px;border-radius:24px;background-color: #cb8c3f;color:#fff;font-size:16px;">Copy</button>
        </div>
    </div>
</footer>

<script>
    var token = GetQueryString('token');
    $(function(){
        $err = <?= $err; ?>;

        if ($err) {
            complete_referral(2)
        }

        var validator = $("#referral-form").validate({
            rules:{
                name:{
                    required: true,
                },
                email:{
                    required: true,
                    validateName:true
                },
                // message:{
                //   required: true,
                // },
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.form-item').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.form-item').removeClass('has-error');
            },
        })

        $("#referral-form input").on('input',function(){
            if(validator.form()){
                $("#btn-send").removeAttr('disabled')
            }else{
                $("#btn-send").attr('disabled',true)
            }
        })

        $("#btn-send").on('click',function(){
            submit_form(validator)
        })
        $("#btn-copy").on('click',function(){
            var copy_value = $("#copy-value").val()
            complete_copy(copy_value);
        })
    })

    function submit_form(validator){
        if(validator.form()){
            show_loading_for_app();
            var default_message = 'Hi, please enjoy 50% off each purchase at the Automat for 2 weeks. I enjoyed it a lot!'
            var empty_message = false

            if($("#message").val()===""){
                $("#message").val(default_message)
                empty_message = true
            } else {
                $("#message").val($("#message").val())
            }

            var formData = $('#referral-form').serialize()
            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/api/refer/send',
                data: formData,
                 headers: {
                   'Authorization': 'Bearer ' + token,
                 },
                success:function(res) {
                    if(res.status_code == 200){
                        $("#error-msg").removeClass("hide").addClass("show")
                        $("#error-msg").removeClass("alert-danger").addClass("alert-success")
                        $('#error-msg b').text(res.message);
                        complete_referral(1)
                        $("#message").val(default_message)
                        $("#name").val('')
                        $("#email").val('')
                    }else{
                        $("#error-msg").removeClass("hide").addClass("show")
                        $("#error-msg").removeClass("alert-success").addClass("alert-danger")
                        $('#error-msg b').text(res.message);
                        if(empty_message){
                            $("#message").val('')
                        }
                        if(res.status_code == 401){
                            complete_referral(2)
                        }else{
                            complete_referral(0)
                        }
                    }
                },
                error:function(error){
                    $("#error-msg").removeClass("hide").addClass("show")
                    $("#error-msg").removeClass("alert-success").addClass("alert-danger")
                    $('#error-msg b').text('Unable to load: unstable internet connection.');
                    complete_referral(0)
                    if(empty_message){
                        $("#message").val('')
                    }
                }
            })

        }
    }

    function show_loading_for_app(){
        var ua = navigator.userAgent;
        var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
        var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
        if (isAndroid) {
            console.log("android-loading")
            window.cardSuccessful_JS.showLoadingForApp();
        } else if (isiOS) {
            console.log("ios-loading")
            window.webkit.messageHandlers.showLoadingForApp.postMessage("showLoading");
        }
    }
    /**
     * Param status Must  int-- result  ,1--success; 0-- fail
     */
    function complete_referral(res){
        var ua = navigator.userAgent;
        var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
        var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
        var result = {status:res}
        if (isAndroid) {
            console.log("android-refferral")
            window.cardSuccessful_JS.completeReferral(JSON.stringify(result));
        } else if (isiOS) {
            console.log("ios-refferral")
            window.webkit.messageHandlers.completeReferral.postMessage(JSON.stringify(result));
        }
    }

    function complete_copy(value){
        var ua = navigator.userAgent;
        var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
        var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
        var  title = 'GET 50% OFF!';
        var  message = 'We cannot wait for you to join the RC Coffee Family. Please save the referral code "' + value + '", you will get 50% off for 2 weeks.';
        var value1 = 'Find our App at App Store: https://apps.apple.com/us/app/rc-coffee-automat/id1531999680'
        var value2 = 'Google Play: https://play.google.com/store/apps/details?id=com.kiosoft.rccoffee'
        var result = {title:title,message:message,value1:value1,value2:value2}
        if (isAndroid) {
            console.log("android-copy",value)
            window.cardSuccessful_JS.copyReferral(JSON.stringify(result));
        } else if (isiOS) {
            console.log("ios-copy",value)
            window.webkit.messageHandlers.copyReferral.postMessage(JSON.stringify(result));
        }
    }

    function GetQueryString(name) {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }
</script>
</body>
</html>
