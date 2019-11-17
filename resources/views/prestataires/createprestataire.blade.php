@extends('default')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des agréments </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Agréments</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Enregistrement d'un nouveau prestataire</h3>
                    </div>
                    <div class="card-body">
                        <h4>
                            Type de prestataire: {{$type->libelle ?? 'Aucun type choisi'}}<br/>
                        </h4>
                        <form class="form-horizontal" method="POST" action="{{route('prestataires.store')}}" >
                            {{ csrf_field() }}

                            <input type="hidden" name="type" value="{{$type->id}}" class="form-control" name="inputType" id="inputType" placeholder="">
                            {{-- <input type="hidden" name="piece" value="{{$piece->id}}" class="form-control" name="inputpiece" id="inputpiece" placeholder=""> --}}

                            {{--  <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label  for="input-secteur"><b>Choisir le type  : </b></label>
                                    <select name="type" class="form-control" id="secteur" aria-describedby="secteurActivitelHelp" placeholder="type">

                                        @foreach($types as $type)
                                        <option value=" {{$type->id}}"> {{$type->libelle}}</option>
                                        @endforeach
                                    </select>
                                    <small id="input-nom-help" class="form-text text-muted">
                                        @if ($errors->has('type'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('type') as $message)
                                                <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </small>
                                </div>
                            </div> --}}


                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="inputdateAgrement">Entrer la date de l'agrément</label>
                                    <input type="date" name="dateAgrement" class="form-control" id="dateAgrement" aria-describedby="dateAgrementlHelp" placeholder="Date Agrement">
                                </div>
                                <small id="input-dateAgrement-help" class="form-text text-muted">
                                    @if ($errors->has('dateAgrement'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('dateAgrement') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="inputninea">Renseigner le NINEA</label>
                                    <input type="text" name="ninea" class="form-control" id="inputninea" aria-describedby="ninealHelp" placeholder="NINEA">
                                </div>
                                <small id="input-ninea-help" class="form-text text-muted">
                                    @if ($errors->has('ninea'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('ninea') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="inputregistreCommerce">Entrer le N° du Registre de commerce</label>
                                    <input type="text" name="registreCommerce" class="form-control" id="inputregistreCommerce" aria-describedby="registreCommercelHelp" placeholder="Registre Commerce">
                                </div>
                                <small id="input-registreCommerce-help" class="form-text text-muted">
                                    @if ($errors->has('registreCommerce'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('registreCommerce') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="input-raisonSociale">Donner la Raison Sociale</label>
                                    <input type="text" name="raisonSociale" class="form-control" id="input-raisonSociale" aria-describedby="raisonSocialelHelp" placeholder="Raison Sociale">

                                </div>
                                <small id="input-raisonSociale-help" class="form-text text-muted">
                                    @if ($errors->has('raisonSociale'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('raisonSociale') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label  for="input-secteur"><b>Choisir un secteur d'activité : </b></label>
                                    <select name="libelle" class="form-control" id="secteur" aria-describedby="secteurActivitelHelp" placeholder="Secteur d'activité">

                                        @foreach($secteurs as $secteur)
                                        <option value=" {{$secteur->libelle}}"> {{$secteur->libelle}}</option>
                                        @endforeach
                                    </select>
                                    <small id="input-nom-help" class="form-text text-muted">
                                        @if ($errors->has('libelle'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('libelle') as $message)
                                                <li>{{ $message }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label for="input-telephone">Telephone fixe ou mobile </label>
                                    <input type="int" name="telephone" class="form-control" id="input-telephone" aria-describedby="telephonelHelp" placeholder="Téléphone">
                                </div>
                                <small id="input-telephone-help" class="form-text text-muted">
                                    @if ($errors->has('telephone'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('telephone') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <small id="input-email-help" class="form-text text-muted">
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('email') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 pr-1">
                                    <label  for="input-bp">Boite Postale</label>
                                    <input type="int" name="bp" class="form-control" id="input-bp" aria-describedby="bplHelp" placeholder="Boite postale">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label  for="input-fax">Fax</label>
                                    <input type="int" name="fax" class="form-control" id="input-fax" aria-describedby="faxlHelp" placeholder="FAX">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label  for="input-adresse">Adresse</label>
                                    <input type="texte" name="adresse" class="form-control" id="input-adresse" aria-describedby="adresselHelp" placeholder="Adresse">
                                </div>
                                <small id="input-nom-help" class="form-text text-muted">
                                    @if ($errors->has('adresse'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('adresse') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>
                           {{--  <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label  for="input-adresse">Ajouter la piece</label>
                                    <input type="file" name="piece" class="form-control" id="input-img" aria-describedby=imgHelp" placeholder="Piece agrément">
                                </div>
                                <small id="input-piece-help" class="form-text text-muted">
                                    @if ($errors->has('piece'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('piece') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div> --}}
                            <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>

                        </form>

                    </div>
                </div>
            </div>
            {{--  <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                    </div>

                    <div class="card-body">
                        {{-- <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                <h5 class="title">Mike Andrew</h5>
                            </a>
                            <p class="description">
                                michael24
                            </p>
                        </div> --}}
                        {{--  <div class="card-header">
                            <h4 class="card-title ">Joindre des pièces</h4>
                        </div>
                        <p class="description text-left">
                            <br> Demande :
                            <br> Autre docu"
                        </p>
                    </div>
                    <hr>
                    <div class="button-container mr-auto ml-auto">
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-facebook-square"></i>
                        </button>
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-google-plus-square"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

