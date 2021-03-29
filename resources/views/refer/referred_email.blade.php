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
                    <td colspan="4" align="center" width="420" style="padding-bottom:10px;"><img src="{{ URL::asset('image/refer/50-percent-off.jpg') }}"  style="display: block;" width="420" border="0"> </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="color:rgb(225,225,225);font-size:28px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 30px;border-bottom: 2px solid rgb(214,168,130);">
                        Your friend <span>{{$refer_name}}</span> has sent you a coupon for 50% off at <strong>Canada’s First Robotic Café!</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="color:rgb(225,225,225);font-size:28px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 20px;">Hi <span> {{$referred_name}}</span> ,</td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="color:rgb(225,225,225);font-size:16px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 10px;">
                        Here's the message from your friend {{$refer_name}}:
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        <i>{{$hi_message}}</i>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        How to redeem your 50% off coupon:
                    </td>
                </tr>
                <tr>
                    <td align="right" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 10px;vertical-align: top;">
                        <span><img src="{{ URL::asset('image/refer/num_email_1.png') }}" width="18px" alt="icon" style="vertical-align: middle;"></span> &nbsp;&nbsp;
                    </td>
                    <td colspan="3" align="left" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 10px;">
                        <p style="margin:0;line-height:24px;overflow: hidden;">Download our RC COFFEE app and register using  this email OR use referral code <span style="background-color: rgb(255,189,89);color:black;">{{$referral_code}}</span> upon registration.</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        <a href="https://apps.apple.com/us/app/rc-coffee-automat/id1531999680"><img src="{{ URL::asset('image/refer/App_Store_logo.png') }}" height="50" style="display: inline-block;" alt="app-store-image"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://play.google.com/store/apps/details?id=com.kiosoft.rccoffee"><img src="{{ URL::asset('image/refer/Google_Play_Store_logo.png') }}" height="50" style="display:inline-block;" alt="google-store-image"></a>
                    </td>
                </tr>
                <tr>
                    <td align="right" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;vertical-align: top;">
                        <span><img src="{{ URL::asset('image/refer/num_email_2.png') }}" width="18px" alt="icon" style="vertical-align: middle;"></span> &nbsp;&nbsp;
                    </td>
                    <td colspan="3" align="left" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        <p style="margin:0;line-height:24px;overflow: hidden;">Visit the Automat at 1235 Bay St.</p>
                    </td>
                </tr>
                <tr>
                    <td align="right" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;vertical-align: top;">
                        <span><img src="{{ URL::asset('image/refer/num_email_3.png') }}" width="18px" alt="icon" style="vertical-align: middle;"></span> &nbsp;&nbsp;
                    </td>
                    <td colspan="3" align="left" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                        <p style="margin:0;line-height:24px;overflow: hidden;">When purchasing a coffee, select “Referred by a friend” from My Promotions (in the “Select promotion” dropdown) for 50% Off – valid for 2 weeks.</p>
                    </td>
                </tr>
                <tr>
                    <td align="right" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;vertical-align: top;">
                        <span><img src="{{ URL::asset('image/refer/num_email_4.png') }}" width="18px" alt="icon" style="vertical-align: middle;"></span> &nbsp;&nbsp;
                    </td>
                    <td colspan="3" align="left" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;">
                        <p style="margin:0;line-height:24px;overflow: hidden;">Refer other friends to accumulate more weeks of 50% Off!</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:40px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:20px;padding-bottom: 20px;">
                        <i>and enjoy :)</i>
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
