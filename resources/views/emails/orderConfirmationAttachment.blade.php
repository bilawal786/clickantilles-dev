<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }
        @media print {
            .pnon{
                display: none;
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
        .button {
            background-color: #abfaf2;
            border: none;
            color: #000000;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
<!-- HIDDEN PREHEADER TEXT -->
{{--<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> Mr. / Mme {{$data->name}}, <br>
    Merci pour le paiement. Votre numéro de billet est {{$data->ticket}}</div>--}}
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
    {{--    <tr>--}}
    {{--        <td bgcolor="#30508a" align="center">--}}
    {{--            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">--}}
    {{--                <tr>--}}
    {{--                    <td align="left" valign="top" style="padding: 40px 10px 40px 10px;">--}}
    {{--                        --}}{{--                                                <img src="{{asset($order->logo)}}" style="height: 100px; display: block;  "  alt="">--}}
    {{--                    </td>--}}
    {{--                </tr>--}}
    {{--            </table>--}}
    {{--        </td>--}}
    {{--    </tr>--}}
    <tr>
        <td align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td  bgcolor="#ffffff" valign="top" style="padding-top: 30px;  color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; ">
                        <img src="{{asset('frontend/assets/images/logo1.png')}}" style="height: 100px; display: block;  "  alt="logo">

                        <div>
                            <h1 style="font-size: 28px;  padding: 20px 0px 0px 20px;">Click Antilles</h1>
                            <h1 style="font-size: 12px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; padding: 0px 20px 20px 20px; margin: 2;">
                                De<br>
{{--                                <strong>{{$order->sitename}}.</strong><br>--}}
                                {{$order->address}}<br>
                                Téléphone: {{$order->phone}}<br>
                                E-mail: {{$order->email}} <br>
{{--                                Siret: 35317286900037--}}
                            </h1>
                        </div>
                    </td>
                    <td bgcolor="#ffffff" align="center" valign="top" style="border-radius: 4px 4px 0px 0px; color: #FFFFFF; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                        <h1 style="font-size: 40px; padding: 20px; font-weight: 400; background-color: #5F195F">Facture: {{$order->order_number}}</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding-left: 10px; text-align: left; padding-top: 40px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px;">
                        <div style="background-color: #5F195F; padding: 10px">
                            <h1 style="font-size: 16px; ">Numéro de commande : #{{$order->order_number}}</h1>
                            <h1 style="font-size: 16px; ">Date : {{$order->created_at->format('d/m/y')}}</h1>
                        </div>
                    </td>
                    <td  bgcolor="#ffffff" valign="top" style="color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; ">
                        <div>
                            <h1 style="font-size: 20px;  padding: 40px 0px 0px 20px;">{{$order->name}}</h1>
                            <h1 style="font-size: 14px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; padding: 0px 20px 20px 20px; margin: 2;">
                                Téléphoner: {{$order->phone}}<br>
                                E-mail: {{$order->email}}
                            </h1>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <thead>
                            <tr style="font-weight: 700;">
                                <td>Nom du produit</td>
                                <td>Quantité</td>
                                <td>Taille</td>
                                <td>Prix</td>
                                <td>Total</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    @foreach(json_decode($order->products) as $item)
                                        {{$item->name}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach(json_decode($order->products) as $item)
                                        {{$item->quantity}}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach(json_decode($order->products) as $item)
                                        {{$item->attributes->size}}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach(json_decode($order->products) as $item)
                                        {{$item->price}} €<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach(json_decode($order->products) as $item)
                                        {{$item->price * $item->quantity}} €<br>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; text-align: right;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td style="padding-right: 40px"><b >Expédition: </b> {{$order->shipping}}  €</td>
                            </tr>
                            <tr>
                                <td style="padding-right: 40px"></td>
                            </tr>
                            <tr>
                                <td style="padding-right: 40px"><b >Total: </b> {{$order->total}}  € <br> (dont TVA 8.5% inclus)</td>
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
