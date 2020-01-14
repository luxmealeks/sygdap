@extends('default')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des Agréments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('prestataires.index') }}">Liste</a></li>
                        <li class="breadcrumb-item active">Agrément</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
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


                                    {{--  <div id="DeleteModal" class="modal fade text-danger" role="dialog">
                                        <form action="{{ route('pieces.destroy', $piece->id)}}" id="deleteForm" method="post">
                                            <div class="modal-dialog " role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="">Suppression de pièces</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Etes-vous  sur de supprimer?
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Oui, Supprimer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div> --}}
                                    <div class="noPrint">
                                        <a class="btn btn-primary" href="{{route('pieces.create')}}?prestataire={{$prestataire->id}}" role="button">Ajouter pièce</a>

                                        <a class="btn btn-primary" href="{!! route('prestataires.printpdf',['download'=>'pdf', 'id'=> $prestataire->id,
                                            'view'=>'prestataires.printpdf',
                                            'name'=>'agrement']) !!}"
                                            class="noPrint">Exporter PDF</a>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endsection
