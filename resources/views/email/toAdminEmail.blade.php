<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0">
                        <img src="https://media-exp1.licdn.com/dms/image/C4D1BAQFRR6Gw59sDwg/company-background_10000/0/1640865358506?e=2159024400&v=beta&t=RAcxfLXaPaYi-I0S27DbwbGO7FBF2cS_ns5kBFdvDJQ" style="height:auto;display:block;background-size:cover;background-position:center;
			  background-repeat:no-repeat;" />
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <tr>
                                <td style="padding:0 0 36px 0;color:#153643;">
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Właśnie otrzymałes email od:</h1>
                                    <h3>{{ $details['name'] }} {{$details['email']}}</h3>
                                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Z wiadomościa:</h1>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['message'] }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
