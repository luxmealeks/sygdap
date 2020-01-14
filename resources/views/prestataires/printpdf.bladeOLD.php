<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fiche prestataire</title>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }




    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            @foreach($prestataire->pieces as $piece)
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                {{-- <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;"> --}}
                            </td>

                            <td>
                                Fiche N°: {{$prestataire->id}} <br>
                                Créée le : {{$piece->created_at}} <br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Direction de l'Administration.<br>
                                Générale et de l'Equipement<br>
                                -------------<br>
                                Division des Marchés Publiques (DMP)<br>

                            </td>

                            <td>
                                Raison sociale :{{$prestataire->raisonSociale}}.<br>
                                NINEA: {{$prestataire->ninea}}<br>
                                RC: {{$prestataire->registreCommerce}}<br>
                                E-mail:{{$prestataire->email}}

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            {{-- <td class="title"> <H5> FICHE PRESTATAIRE TYPE : {{$prestataire->type->libelle}}</H5></td> --}}

                            {{-- <td>Prestataire N°: {{$prestataire->id}}  <br> </td> --}}
                            <td>
                                <br>
                                <br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr class="heading">

                            <td>Détails du prestataires <br>

                            </td>
                            <tr class="details">
                                <td>
                                    TYPE PRESTATAIRE : {{$prestataire->type->libelle}}
                                    SECTEUR D'ACTIVITE :   {{$prestataire->secteur}}<br>
                                    TELEPHONE :   {{$prestataire->telephone}}<br>
                                    FAX :   {{$prestataire->fax}}<br>
                                    BP :   {{$prestataire->bp}}<br>
                                    ADRESSE :   {{$prestataire->adresse}}<br>
                                </td>
                            </tr>
                            <tr class="heading">

                                <td>NOM DE LA PIECE<br> </td>
                                <td>PIECE CHARGEE </td>
                                {{-- <td>DATE DE CREATION </td> --}}
                                <td>Actions </td>

                                <tr class="item">
                                </tr>

                                <tr class="details">
                                    <td>
                                        {{$piece->nompiece}} <br>
                                    </td>
                                    <td>
                                        {{$piece->img}}
                                    </td>
                                    <td>
                                        {{$piece->created_at}} <br>
                                    </td>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
