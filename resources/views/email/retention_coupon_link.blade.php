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
<table width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;background-color:rgb(245,241,232);font-family:'Times New Roman';">
    <tr width="100%">
        <td>
            <img src="{{ URL::asset('image/retention/email/inside.jpg') }}" class="top-img" width="100%" style="display: block;height:400px;" alt="store-front-image">
        </td>
    </tr>
    <tr>
        <td>
            <table colspan="4" align="center" border="0" cellpadding="0" cellspacing="0" class="main-table" style="border-collapse: collapse;min-width: 400px;max-width: 400px">
                <tr>
                    <td colspan="4" align="center" style="padding-top:30px;padding-bottom:10px;"><img src="{{ URL::asset('image/retention/email/img_logo.png') }}" width="40%"  style="display: block;" border="0" alt="logo"> </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:28px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 30px;">THANK YOU FOR SIGNING UP</td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:28px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 30px;">
                        <img src="{{ URL::asset('image/retention/email/star.png') }}" width="18px" alt="icon" style="vertical-align: middle;padding-bottom: 7px;">
                        2 FREE COFFEES
                        <img src="{{ URL::asset('image/retention/email/star.png') }}" width="18px" alt="icon" style="vertical-align: middle;padding-bottom: 7px;"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="subtitle" style="font-size:24px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 0px;">HERE'S HOW IT WORKS:</td>
                </tr>
                <tr>
                    <td colspan="4" align="left" style="font-size:16px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 5px;padding-left: 10px;">
                        <img src="{{ URL::asset('image/retention/icon/email/num_1.png') }}" width="18px" alt="icon" style="vertical-align: bottom"> Stop by the Automat located at 1235 Bay St.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="left" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;padding-left: 10px;">
                        <img src="{{ URL::asset('image/retention/icon/email/num_2.png') }}" width="18px" alt="icon" style="vertical-align: bottom"> Open <a href="{{$couponLinkFirst}}">this link</a> to get your first free coffee.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="left" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;padding-left: 10px;">
                        <img src="{{ URL::asset('image/retention/icon/email/num_3.png') }}" width="18px" alt="icon" style="vertical-align: bottom"> Order through the online menu.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="left" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-left: 10px;">
                        <img src="{{ URL::asset('image/retention/icon/email/num_4.png') }}" width="18px" alt="icon" style="vertical-align: bottom"> Check your inbox for a QR code that you can redeem at the Automat.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:25px;padding-bottom: 25px;padding-left: 10px;">
                        Repeat the process for your 2nd free coffee with <a href="{{$couponLinkSecond}}">this link</a>.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:12px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                        *Coupons valid for one redemption.
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                        Keep an eye on your inbox for future promotions from us!
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:25px;padding-bottom: 15px;color: rgb(207,171,130);">
                        Hurry, offer expires on {{$endTime}}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 15px;">
                        STAY CONNECTED
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                        <a href="https://twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img style="padding-left:10px;padding-right:10px" src="{{ URL::asset('image/retention/icon/email/twitter.png') }}" alt="twitter"></a>
                        <a href="https://www.instagram.com/RCCoffeeBarista/" title="ins" target="_blank"><img style="padding-left:10px;padding-right:10px" src="{{ URL::asset('image/retention/icon/email/ins_1.png') }}" alt="ins-circle"></a>
                        <a href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img style="padding-left:10px;padding-right:10px" src="{{ URL::asset('image/retention/icon/email/facebook.png') }}" alt="facebook"></a>
                        <a href="https://www.linkedin.com/company/RCcoffee" title="linkedin" target="_blank"><img style="padding-left:10px;padding-right:10px" src="{{ URL::asset('image/retention/icon/email/ins.png') }}" alt="ins-word"></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 15px;">
                        @DARKHORSECAFE &nbsp;&nbsp;&nbsp;&nbsp; @RCCOFFEEBARISTA
                    </td>
                </tr>
                <tr style="padding-bottom:50px">
                    <td colspan="2" align="left" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 0px;padding-left:5px">
                        IOS AND ANDROID <br/>APP COMING SOON
                    </td>
                    <td colspan="2" align="right" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 15px;padding-right:5px">
                        Powered by: <br/>
                        <img src="{{ URL::asset('image/retention/email/black_logo.png') }}" width="60" height="54" style="display: block;" alt="qr-code-image">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:15px;padding-bottom: 15px;">
                        3610 Nashua Drive, Suite 5, Mississauga, ON L4V 1L2
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                        <a href="{{ config('site_info.front_end_url') }}/subscribe.html?email={{$emailSubscribe}}" title="unsubscribe-link" target="_blank">Unsubscribe</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="height:30px;font-size:16px;font-family:'Times New Roman';padding-top:25px;padding-bottom: 15px;"> </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>