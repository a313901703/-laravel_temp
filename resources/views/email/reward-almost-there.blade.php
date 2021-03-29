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
                    <td colspan="4" align="center" width="420" style="padding-bottom:10px;"><img src="{{ URL::asset('image/reward/reward-header.png') }}" alt="50-percent-off" style="display: block;" width="420" border="0"> </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom:20px;border-bottom: 2px solid rgb(181 172 165);">
                      You're <span style="color:rgb(3 169 244)">{{$cups}}</span> Drinks Away From Your Freebie!
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" class="title" style="font-size:20px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:15px;padding-bottom: 15px;">Hey <span> {{$name}}</span> ,</td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 10px;">
                      Thanks for frequenting our coffee robot, we appreciate your support. ❤
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                      We noticed you’re <span style="color:rgb(3 169 244)">{{$cups}}</span> drinks away from earning a free beverage on our RC COFFEE app with RC Rewards...You're almost there, keep going!
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:16px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                      Stop by one of our kiosks and fulfill your destiny. ✨
                    </td>
                </tr>
                <tr>
                  <td colspan="4" align="center" style="font-size:14px;line-height:24px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:10px;padding-bottom: 10px;">
                    <i> As always, when you visit one of our locations, don't forget to tag @rccoffeebarista to be featured on our Instagram!</i>
                  </td>
                </tr>
                <tr>
                  <td colspan="4" align="center" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:15px;padding-bottom: 15px;border-bottom: 2px solid rgb(181 172 165);border-top: 2px solid rgb(181 172 165);">
                    <p style="margin-top:0;"><strong><i>Your Friends At,</i></strong></p>
                    <img src="{{ URL::asset('image/reward/logo.png') }}" width="60" height="54" style="display:block;margin:0 auto" alt="logo-image">
                  </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:14px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:15px;padding-bottom: 15px">
                        <span>
                        &nbsp;&nbsp; <a href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/reward/qr_facebook.png') }}" alt="facebook"></a>
                        &nbsp;&nbsp; <a href="https://www.instagram.com/RCCoffeeBarista/" title="ins" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/reward/qr_ins_1.png') }}" alt="ins-circle"></a>
                        &nbsp;&nbsp; <a href="https://www.linkedin.com/company/RCcoffee" title="linkedin" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/reward/qr_ins.png') }}" alt="ins-word"></a>
                        &nbsp;&nbsp; <a href="https://twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img style="vertical-align: bottom;" src="{{ URL::asset('image/reward/qr_twitter.png') }}" alt="twitter"></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center" style="font-size:12px;font-family:'Times New Roman';color:rgb(225,225,225);padding-top:5px;padding-bottom: 15px;">
                        3610 Nashua Dr, Suite 5, Mississauga, ON L4V 1L2
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
