
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
<table width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;background-color:rgb(207,171,130);font-family:'Times New Roman'">
    <tr width="100%">
        <td>
            <img src="{{ URL::asset('image/retention/email/store-font.jpg') }}" class="top-img" width="100%" style="display: block;height:400px;" alt="store-front-image">
        </td>
    </tr>
    <tr>
        <td>
            <table colspan="4" align="center" border="0" cellpadding="0" cellspacing="0" class="main-table" width="600" style="border-collapse: collapse;">
            <tr>
                <td colspan="4" align="center" style="padding-top:30px;padding-bottom:10px;"><img src="{{ URL::asset('image/retention/email/img_logo.png') }}" width="40%"  style="display: block;" border="0" alt="logo"> </td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="title" style="font-size:38px;font-family: 'Times New Roman';padding-top:20px;padding-bottom: 30px;">THANK YOU FOR YOUR ORDER</td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="subtitle" style="font-size:28px;font-family: 'Times New Roman';padding-top:20px;padding-bottom: 20px;">LET US KNOW WHAT YOU THINK</td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:20px;padding-bottom: 5px;">
                    We value what our customers have to say so we would
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    love to hear your feedback. Click the survey link <a href="https://surveymonkey.com/r/9MRNZ9M">here</a>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    to answer a few questions to help us be our best.
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="subtitle" style="font-size:28px;font-family: 'Times New Roman';padding-top:40px;padding-bottom: 5px;">YOU STILL HAVE ANOTHER</td>
            </tr>
            <tr>
                <td colspan="4" align="center" class="subtitle" style="font-size:28px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 40px;">FREE COFFEE</td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    Follow the same steps as last time and click
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 15px;">
                    <a href="{{$couponLink}}">this link</a> to get a second free delicious drink!
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:25px;padding-bottom: 15px;">
                    Hurry, offer expires on {{$endTime}}
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 15px;">
                    STAY CONNECTED
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 5px;">
                    <a style="padding-left:10px;padding-right:10px" href="https://twitter.com/RCCoffeeBarista" title="twitter" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/twitter.png') }}" alt="twitter"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.instagram.com/RCCoffeeBarista/" title="ins" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/ins_1.png') }}" alt="ins-circle"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.facebook.com/RCCoffeeBarista/" title="facebook" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/facebook.png') }}" alt="facebook"></a>
                    <a style="padding-left:10px;padding-right:10px" href="https://www.linkedin.com/company/RCcoffee" title="linkedin" target="_blank"><img src="{{ URL::asset('image/retention/icon/email/ins.png') }}" alt="ins-word"></a>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 25px;">
                    @DARKHORSECAFE &nbsp;&nbsp;&nbsp;&nbsp; @RCCOFFEEBARISTA
                </td>
            </tr>
            <tr style="padding-bottom:50px">
                <td colspan="2" align="left" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 0px;padding-left:5px">
                    IOS AND ANDROID <br/>APP COMING SOON
                </td>
                <td colspan="2" align="right" style="font-size:16px;font-family: 'Times New Roman';padding-top:5px;padding-bottom: 15px;padding-right:5px">
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
                <td colspan="4" align="center" style="height:30px;font-size:16px;font-family: 'Times New Roman';padding-top:25px;padding-bottom: 15px;"> </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</body>
</html>