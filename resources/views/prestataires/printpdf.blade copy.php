<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <title>A simple, clean, and responsive HTML invoice template</title>
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

                        <div class="invoice-box">
                            <table cellpadding="0" cellspacing="0">
                                <tr class="top">
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td class="title"> <H5> FICHE PRESTATAIRE TYPE : {{$prestataire->type->libelle}}</H5></td>

                                                <td>Prestataire N°: {{$prestataire->id}}  <br> </td>
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

                                                <td>RAISON SOCIALE : {{$prestataire->raisonSociale}} <br>  NINEA : {{$prestataire->ninea}} <br>

                                                </td>
                                                <tr class="details">
                                                    <td>
                                                        REGISTRE DE COMMERCE :   {{$prestataire->registreCommerce}} </br>
                                                        SECTEUR D'ACTIVITE :   {{$prestataire->secteur}}<br>
                                                        TELEPHONE :   {{$prestataire->telephone}}<br>
                                                        E-MAIL :  {{$prestataire->email}} <br>
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

                                                    @foreach($prestataire->pieces as $piece)
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
                                                        <td>
                                                            <a href="{{ route('pieces.edit',$piece->id)}}" class="btn btn-primary">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('pieces.destroy',$piece->id)}}" data-toggle="modal" onclick="deleteData({{$piece->id}})"
                                                                data-target="#DeleteModal" class="btn btn-xs btn-danger">

                                                                <i class="fa fa-trash"></i> </a>
                                                            </td>
                                                            @endforeach
                                                        </tr>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
