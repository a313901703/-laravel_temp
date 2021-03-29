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
    .newview form .form-control{border:0;border-radius:0;border-bottom:1px solid #ccc;box-shadow:0 0 0;font-weight:bold;}
    .newview form label{color:#ccc;}
    .newview #toggle-btn{position:absolute;bottom:8px;right:20px;width:20px}
    .newview #toggle-btn:hover{cursor:pointer;}
    .newview form .form-control:focus{border-color:#66afe9;}
    .newview #imgbox{position:absolute;bottom:12px;right:0;width:72px;height:16px;border:1px solid #ccc;background:url({{asset('image/cnd_credit_card_logos.gif')}}) no-repeat;background-size: auto 100%;background-position-x:0px;}
    .newview .btn-primary[disabled]{background-color:#ccc;border-color:#ccc;}
    .newview .payment .error{color:red;}
    #cardModal .modal-header{border-bottom:0;}
    #cardModal .modal-body{position:inherit;bottom:0;}
    #cardModal .thumbnail{border:0;}
    #cardModal .thumbnail img{width:50%;}
    #cardModal .thumbnail .caption{font-weight:bold;}
    #cardModal .thumbnail p{text-align:center;}
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {-webkit-appearance: none;appearance: none;  margin: 0;}
</style>

<div class="container">
    <div hidden id="token"></div>
  <div class="bound_message alert alert-success fade in hidden" style="margin-bottom:0;margin-top:20px;"><b></b></div>
      <div class="col-md-offset-2 col-md-8">
          <div class="box">
              <h2 class="header bg-blue"><i class="fa fa-cc-card"></i> Credit Card Registration</h2>
              <div class="panel-body newview">
                <!-- New View as blow: -->
                <form id="payment" role="form" method="POST">
                    @if ($last_four)
                    <div class="form-group">
                        <label style="display:block;">You already registered a credit card with last four digits {{$last_four}}.</label>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="firstNameOnCard" style="display:block;visibility:hidden;">First Name on Card</label>
                        <input id="firstNameOnCard" type="text" class="form-control" placeholder="First Name on Card" value="" maxlength="40" data-ibx="firstNameOnCard" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="lastNameOnCard" style="display:block;visibility:hidden;">Last Name on Card</label>
                        <input id="lastNameOnCard" type="text" class="form-control" placeholder="Last Name on Card" value="" maxlength="40" data-ibx="lastNameOnCard" required autocomplete="off">
                    </div>
                    <div class="form-group" style="position:relative">
                        <label for="cardNumber" style="display:block;visibility:hidden;">Card Number</label>
                        <input id="cardNumber" type="tel" class="form-control" placeholder="Card Number" value="" maxlength="19" data-ibx="cardNumber" required autocomplete="off">
                        <div id="imgbox"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-xs-7">
                            <label for="expirationDate" style="display:block;visibility:hidden;">MM/YYYY</label>
                            <input id="expirationDate" type="tel" class="form-control" placeholder="MM/YYYY" value="" maxlength="7" data-ibx="expirationDate" required autocomplete="off">
                        </div>
                        <div class="col-md-4 col-xs-5">
                            <label for="cvv" style="display:block;visibility:hidden;">CVV</label>
                            <input id="cvv" type="tel" class="form-control" placeholder="CVV" value="" maxlength="3" data-ibx="cvv" required autocomplete="off">
                            <a data-toggle="modal" data-target="#cardModal" id="toggle-btn" href="" οnclick="return false;"><i style="font-size:16px;">?</i></a>
                        </div>
                    </div>
                    <div class="form-group col-md-8 col-xs-7" style="padding-left:0;">
                        <button id="btn-bind" class="btn btn-primary btn-block" type="button" disabled>Add Your Card</button>
                    </div>
                </form>
          </div>
      </div>
    </div>
</div>

    <!-- mobole UI modal -->
    <div class="modal fade bs-example-modal-sm" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="thumbnail">
                        <img src="{{asset('image/cvv_icon.png')}}" alt="">
                        <div class="caption">
                            <p>The CVV is a 3-digit code </p>
                            <p>you can find on the back of </p>
                            <p>your credit card</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(function() {
var token = GetQueryString('token');

$("#payment .form-control").focus(function(){
    $(this).prev().css("color","#66afe9").css("visibility","visible");
    $(this).attr("placeholder","");
})
$("#payment .form-control").blur(function(){$(this).prev().css("color","#ccc");})

$("#payment  #expirationDate").keyup(function(){
    var Ovalue = this.value;
    var first_word = Ovalue.slice(0,1);
    var sec_word = Ovalue.slice(1,2);
    var year = Ovalue.slice(2)
    if(/[^0-1]/.test(first_word)){
        first_word = first_word.replace(/[^0-1]/,'');
    }
    if(first_word == 0){
        sec_word = sec_word.replace(/[^1-9]/,'');
    }
    if(first_word == 1){
        sec_word = sec_word.replace(/[^0-2]/,'');
    }
    if(/[^\d]/.test(year)){
        year = year.replace(/[^\d]/,'')
    }
    if(sec_word && !Ovalue[2] || Ovalue[3]){
        sec_word = sec_word + '/';
    }
    this.value = first_word + sec_word + year;
})

$("#payment .form-control").keyup(function(){
    var OcardFirstName = $("#firstNameOnCard").val();
    var OcardLastName = $("#lastNameOnCard").val();
    var OcardNumber = $("#cardNumber").val();
    var OexpirationDate = $("#expirationDate").val();
    var Ocvv = $("#cvv").val();
    var Ostreet = $("#street").val();
    var OzipCode = $("#zipcode").val();
    var condition = '';
    if($("#street").length>0&&$("#zipcode").length>0){
        condition = OcardLastName&&OcardFirstName&&OcardNumber&&OexpirationDate&&Ocvv&&OcardNumber.length>=13&&Ocvv.length>=3&&Ostreet&&OzipCode;
    }else{
        condition = OcardFirstName&&OcardLastName&&OcardNumber&&OexpirationDate&&OexpirationDate.length==7&&Ocvv&&OcardNumber.length>=13&&Ocvv.length>=3;
    }
    if(condition){
      $("#btn-bind").removeAttr("disabled");
    }else{
      $("#btn-bind").attr("disabled","disabled");
     }
});

$("#payment .form-control").blur(function(){
    var NumOfValue = this.value;
    var id_name = this.id;
    var place_holder_value = null;
    switch(id_name){
        case "firstNameOnCard" :
        place_holder_value = "First Name on Card";
        break;
        case "lastNameOnCard" :
        place_holder_value = "Last Name on Card";
        break;
        case "cardNumber":
        place_holder_value = "Card Number";
        break;
        case "expirationDate":
        place_holder_value = "MM/YYYY";
        break;
        case "cvv":
        place_holder_value = "CVV";
        break;
        case "street":
        place_holder_value = "Street";
        break;
        case "zipcode":
        place_holder_value = "Zip Code";
        break;
        default:
        place_holder_value = null;
        break;
    }
if(!NumOfValue){
    $(this).prev().css("visibility","hidden");
    $(this).attr("placeholder",place_holder_value)
}
})

$("#cardNumber").keyup(function(){
    var v = this.value;
    var TypeOfCard = v.substr(0,1);
    var GroundPos;
    switch(TypeOfCard){
        case "4":
        GroundPos = "0px";
        break;
        case "5":
        GroundPos = "-24px";
        break;
        case "3":
        GroundPos = "-48px";
        break;
        default:
        GroundPos = null;
        console.log("error card number")
        break;
    }
    if(GroundPos){
        $("#imgbox").css("width","24px").css("background-position-x",GroundPos);
    }else{
         $("#imgbox").css("width","72px").css("background-position-x","0px");
     }
    this.value = this.value.replace(/\s/g,'').replace(/(\d{4})(?=\d)/g,"$1 ");
})

$("#btn-bind").on('click',function(){
    var oVal = $("#cardNumber").val().replace(/\s*/g,"");
    $("#cardNumber").val(oVal)
    bindCard();
    show_loading_for_app()
})

function bindCard()
{
    var date = $("#expirationDate").val();
    date = date.split('/');

    var data = {
        firstname : $("#firstNameOnCard").val(),
        lastname : $("#lastNameOnCard").val(),
        card_number : $("#cardNumber").val(),
        exp_month : date[0],
        exp_year : date[1],
        cid : $("#cvv").val()
    }
    $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo url("/api/user/register-card")?>',
        headers: {
            'Authorization': 'Bearer ' + token,
        },
        data: data,
        success:function(res){
            if(res.status_code == 200){
                $('.bound_message').removeClass("alert-danger").addClass("alert-success").html('<b>Thanks. Your credit card is now registered.</b>');
                complete_bind_card(1)
            }else{
                complete_bind_card(0)
              $('.bound_message').removeClass("alert-success").addClass("alert-danger").html('<b>'+res.message+'</b>');
            }
            $('.bound_message').removeClass("hidden");
          },
          error:function(error,a,b){
              if (error.status == 401) {
                complete_bind_card(2)
              }else{
                complete_bind_card(0)
              }
            $('.bound_message').removeClass("alert-success").addClass("alert-danger").html('<b>Unable to load:unstable internet connection.</b>');
            $('.bound_message').removeClass("hidden");
          }
    })
}

var $form = $('#payment');
$form.submit(function(event) {
    IBX.createToken($form, ISVIBXResponseHandler);
    event.preventDefault();
});

function ISVIBXResponseHandler(response) {

    var $form = $('#payment');

    if (response.result) {

        $form.append($('<input type="hidden" name="card_token">').val(response.token));
        $form.append($('<input type="hidden" name="card_brand">').val(response.cardData.cardBrand));
        $form.append($('<input type="hidden" name="card_type">').val(response.cardData.cardType));
        $form.append($('<input type="hidden" name="expiry_date">').val(response.cardData.expirationDate));
        $form.append($('<input type="hidden" name="last_four">').val(response.cardData.lastFour));
        $form.append($('<input type="hidden" name="name_on_card">').val(response.cardData.nameOnCard));
        var Ostreet = $("#street").val();
        $form.append($('<input type="hidden" name="avs_bind">').val((Ostreet !== '' && typeof Ostreet !== 'undefined') ? '1' : '0'));

        // Submit the form:
        //$form.get(0).submit();
        submit_ibx()
    } else {
        // the errors on the form:
        $form.append($('<input type="hidden" name="payment_error_code" size="50">').val(response.error.code));
        $form.append($('<input type="hidden" name="payment_error_msg" size="50">').val(response.error.message));
        // Submit the form:
        //$form.get(0).submit();
        submit_ibx()
        }
    }

//   function submit_ibx(){

//         $.ajax({
//           type: "POST",
//           dataType: "json",
//           url: '<?php echo url("/api/user/register_card")?>',
//           data: $('#payment').serialize(),
//           headers: {
//             'Authorization': 'Bearer ' + token,
//           },
//           success:function(res){
//             if(res.status_code == 200){
//                 $('.bound_message').html('<b>'+res.message+'</b>');
//                 complete_bind_card(1)
//             }else{
//                 complete_bind_card(0)
//               $('.bound_message').html('<b>'+res.message+'</b>');
//             }
//           },
//           error:function(error){
//             complete_bind_card(0)
//             $('.bound_message').html('<b>Unable to load:unstable internet connection.</b>');
//           }
//         })
//     }

});
function show_loading_for_app(){
    var ua = navigator.userAgent;
    var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
    var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
    if (isAndroid) {
      window.cardSuccessful_JS.showLoadingForApp();
    } else if (isiOS) {
      window.webkit.messageHandlers.showLoadingForApp.postMessage("showLoading");
    }
}
  /**
   * add card by ibx
   * Param status Must  int-- result  ,1-- add card success; 0-- fail
   *
   */
function complete_bind_card(res){
    var ua = navigator.userAgent;
    var isAndroid = ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1; //android   
    var isiOS = !ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios 
    var result = {status:res}
    if (isAndroid) {
      window.cardSuccessful_JS.completeBindCard(JSON.stringify(result));
    } else if (isiOS) {
      window.webkit.messageHandlers.completeBindCard.postMessage(JSON.stringify(result));
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
