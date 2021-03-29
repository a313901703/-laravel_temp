<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding:0;margin:0">
<table width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;font-family:'Times New Roman';">
    <tr align="center"><td><strong>Coffee kiosk short of consumables, please add!</strong></td></tr>
    <tr>
        <td>
            <table align="center" border="1" cellpadding="2" cellspacing="0" style="min-width:600px;margin-top: 30px;">
                <tr><td><strong>tank</strong></td><td><strong>consumable</strong></td><td><strong>amount remaining</strong></td></tr>
                @foreach ($consumables as $consumable)
                    @if(in_array($consumable['consumable_id'], $consumableWarning))
                        <tr>
                            <td>{{$containers[$consumable['container_id']]}}</td>
                            <td>{{$consumable['name']}}</td>
                            <td style="color:red">{{$consumable['quantity'].$consumable['show_unit']}}</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$containers[$consumable['container_id']]}}</td>
                            <td>{{$consumable['name']}}</td>
                            <td>{{$consumable['quantity'].$consumable['show_unit']}}</td>
                        </tr>
                    @endif

                @endforeach
            </table>
        </td>
    </tr>
</table>
</body>
</html>
