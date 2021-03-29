<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @font-face {
            font-family: "BarlowCondensed-SemiBold";
            src: url({{ URL::asset('font/BarlowCondensed-SemiBold.ttf')}});
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
<table width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;background-color:rgb(44,85,101);color:rgb(207,171,130);font-family:'Times New Roman'">
    <tr width="100%">
        <td>
            <img src="{{ URL::asset('image/retention/email/inside02.jpg') }}" class="top-img" width="100%" style="display: block;height:400px;" alt="store-front-image">
        </td>
    </tr>
    <tr>
        <td>
            <table colspan="4" align="center" border="0" cellpadding="0" cellspacing="0" class="main-table" width="600" style="border-collapse: collapse;color:rgb(207,171,130)">
            <tr>
                <td colspan="4" align="center" style="padding-top:30px;padding-bottom:10px;"><img src="{{ URL::asset('image/retention/email/img_logo.png') }}" width="40%"  style="display: block;" border="0" alt="logo"> </td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="title" style="font-size:36px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 30px;">QR CODE FOR YOUR FREE COFFEE</td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="subtitle" style="font-size:28px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 20px;">PLEASE SCAN AT AUTOMAT</td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:20px;padding-bottom: 5px;">
                    Scan the code below at 1235 Bay St and the robo-barista
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    will begin your order. Scan the QR code
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 45px;">
                    again for pick up. Enjoy!
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 45px;">
                    <img src="{!! $message->embedData($qrCode,'QrCode.png','image/png') !!}" width="200" height="200" style="display: block;" alt="qr-code-image">
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:25px;">
                    This offer is only valid at the 1235 Bay St Dark Horse Automat location.
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:25px;padding-bottom: 15px;color: rgb(207,171,130);">
                    Hurry, offer expires on {{$endTime}}
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 15px;">
                    STAY CONNECTED
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    <a style="padding-left:10px;padding-right:10px" href="https://twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/qr_twitter.png') }}" alt="twitter"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.instagram.com/RCCoffeeBarista/" title="ins" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/qr_ins_1.png') }}" alt="ins-circle"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/qr_facebook.png') }}" alt="facebook"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.linkedin.com/company/RCcoffee" title="linkedin" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/qr_ins.png') }}" alt="ins-word"></a>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family:'Times New Roman';padding-top:5px;padding-bottom: 25px;">
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
                <td colspan="4" align="center" style="height:30px;font-size:16px;font-family:'Times New Roman';padding-top:25px;padding-bottom: 15px;"></td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</body>
</html>