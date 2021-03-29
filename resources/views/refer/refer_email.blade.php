<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @font-face {
            font-family: "BarlowCondensed-SemiBold";
            src: url({{ URL::asset('font/BarlowCondensed-SemiBold.ttf') }});
        }
        @font-face {
            font-family: "JuriZaech-FrontageCondensed-3D";
            src: url({{ URL::asset('font/JuriZaech-FrontageCondensed-3D.otf') }});
        }
        @font-face {
            font-family: "MadrasRegular";
            src: url({{ URL::asset('font/MadrasRegular.otf') }});
        }
        @font-face {
            font-family: "MadrasRegularItalic";
            src: url({{ URL::asset('font/MadrasRegularItalic.otf') }});
        }
        @media (max-width: 480px) {
            .main-table{width:100% !important}
            .title{font-size:24px !important}
            .subtitle{font-size: 22px !important;}
            .top-img{height:auto !important}
        }
    </style>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;background-color:rgb(44,85,101);color:rgb(225,225,225);font-family:'Times New Roman';">
    <tr>
        <td>
            <table colspan="4" align="center" border="0" cellpadding="0" cellspacing="0" class="main-table" width="420" style="border-collapse: collapse;min-width: 420px;max-width: 420px">
                <tr>
                    <td width="10%"></td>
                    <td width="30%"></td>
                    <td width="30%"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center" width="420" style="padding-bottom:10px;"><img src="{{ URL::asset('image/refer/50-percent-off.jpg') }}" alt="50-percent-off" style="display: block;" width="420" border="0"> </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:28px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 30px;border-bottom: 2px solid rgb(214,168,130);">
                        Your friend <span>{{$friend}}</span> redeemed your referral for 50% off at <strong>Canada’s First Robotic Café!</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:28px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 20px;">Hi <span> {{$name}}</span> ,</td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 10px;">
                        Thank you for your referral! Your friend {{$friend}} has successfully redeemed a coffee for 50% off. Now its your turn - enjoy 50% off each purchase for two weeks.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        <strong>When purchasing your next coffee, select “Refer a Friend” from My Promotions (in the “Select promotion” dropdown) for 50% Off. This coupon is valid for 2 weeks.</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        Repeat the referral process with another friend for 4 weeks of 50% off – you can keep accumulating weeks!
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:40px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 20px;">
                        <i>enjoy :)</i>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:18px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 20px;">
                        <img src="{{ URL::asset('image/refer/refer-star.png') }}" width="18px" alt="icon" style="vertical-align: middle;padding-bottom: 7px;">
                        Your Friends at Dark Horse Coffee Automat
                        <img src="{{ URL::asset('image/refer/refer-star.png') }}" width="18px" alt="icon" style="vertical-align: middle;padding-bottom: 7px;"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 15px;">
                        STAY CONNECTED
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 15px;padding-left: 80px;border-bottom: 2px solid rgb(214,168,130);">
                        <i style="font-size:10px">@rccoffeebarista<br/>@darkhorsecafe</i>
                    </td>
                    <td colspan="2" align="left" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 15px;border-bottom: 2px solid rgb(214,168,130);">
                        <span style="overflow: hidden;float:left;padding-left: 10px;">
                        &nbsp;&nbsp; <a href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/refer/qr_facebook.png') }}" alt="facebook"></a>
                        &nbsp;&nbsp; <a href="https://www.instagram.com/RCCoffeeBarista/" title="ins" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/refer/qr_ins_1.png') }}" alt="ins-circle"></a>
                        &nbsp;&nbsp; <a href="https://twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/refer/qr_twitter.png') }}" alt="twitter"></a>
                        &nbsp;&nbsp; <a href="https://www.linkedin.com/company/RCcoffee" title="linkedin" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/refer/qr_ins.png') }}" alt="ins-word"></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" style="font-size:12px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:15px;padding-bottom: 15px;">
                        3610 Nashua Drive, Suite 5, Mississauga, ON L4V 1L2
                    </td>
                    <td align="right" style="font-size:12px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 15px;text-align:center;">
                        POWERED BY: <br/>
                        <img src="{{ URL::asset('image/refer/refer-logo.png') }}" width="60" height="54" style="display:block;margin:0 auto" alt="logo-image">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                        <a href="{{ url('/subscriber') }}?email={{urlencode($email)}}&action=0" style="color:rgb(225,225,225);text-decoration: underline;" title="unsubscribe-link" target="_blank">Unsubscribe</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="height:30px;font-size:16px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:25px;padding-bottom: 15px;"> </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
