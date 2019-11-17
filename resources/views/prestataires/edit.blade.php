@extends('default')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des agréments</h1>
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
         @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Modifier les informations d'un prestataire</h3>
                        {{-- <p class="card-category">Liste des prestataires enregistrés --}}
                            {{-- <a href="{{route('prestataires.createprestataire')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Nouveau prestataire</button></a> --}}
                        </p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal" method="POST" action="{{route('prestataires.update', $prestataire->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <br>

                                                    <label for="inputninea">NINEA</label>
                                                    <input id="inputninea" type="text" class="form-control" name="ninea" value="{{ $prestataire->ninea }}" required autofocus>
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
                                                    <label for="inputregistreCommerce">N° du Registre de commerce</label>
                                                    <input id="inputregistreCommerce" type="text" class="form-control" name="registreCommerce" value="{{ $prestataire->registreCommerce }}" required autofocus>
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
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="input-raisonSociale">Raison Sociale</label>
                                                    <input id="input-raisonSociale" type="text" class="form-control" name="raisonSociale" value="{{ $prestataire->raisonSociale }}" required autofocus>
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

                                        @foreach($secteur as $secteur)
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
                                           {{-- <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label  for="input-secteur">Secteur d'activité</label>
                                                    <input id="input-libelle" type="text" class="form-control" name="libelle" value="{{ $secteur->libelle }}" required autofocus>

                                                </div>
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
                                            </div> --}}

                                           <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="input-piece">Piece</label>
                                                    <input id="input-piece" type="file" class="form-control" name="piece" value="{{ $prestataire->piece }}" required autofocus>
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
                                            </div>


                                                {{-- <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label  for="input-secteur"><b>Choisir un secteur d'activité : </b></label>
                                                        <select name="libelle" class="form-control" id="libelle" aria-describedby="libelleActivitelHelp" placeholder="Secteur d'activité">

                                                            @foreach($secteurs as $secteur)
                                                            <option value=" {{$secteur->id}}"> {{$secteur->libelle}}</option>
                                                            @endforeach
                                                        </select>
                                                        <small id="input-nom-help" class="form-text text-muted">
                                                            @if ($errors->has('secteur'))
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->get('secteur') as $message)
                                                                    <li>{{ $message }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label for="input-types">Types de prestataire</label>
                                                        <input id="input-types" type="text" class="form-control" name="types" value="{{ $prestataire->types }}" required autofocus>

                                                    </div>
                                                    <small id="input-types-help" class="form-text text-muted">
                                                        @if ($errors->has('types'))
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->get('types') as $message)
                                                                <li>{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif
                                                    </small>
                                                </div> --}}
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label for="input-telephone">Telephone</label>
                                                        <input id="input-telephone" type="text" class="form-control" name="telephone" value="{{ $prestataire->telephone }}" required autofocus>
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

                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail">Email address</label>
                                                        <input id="exampleInputEmail" type="text" class="form-control" name="email" value="{{ $prestataire->email }}" required autofocus>
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
                                                    <div class="col-md-6 pl-1">
                                                        <label  for="input-bp">Boite Postale</label>
                                                        <input id="input-bp" type="text" class="form-control" name="bp" value="{{ $prestataire->bp }}" required autofocus>
                                                    </div>
                                                </div>

                                                  <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label  for="input-adresse">Fax</label>
                                                        <input id="input-fax" type="int" class="form-control" name="fax" value="{{ $prestataire->fax }}" required autofocus>
                                                    </div>
                                                    <small id="input-nom-help" class="form-text text-muted">
                                                        @if ($errors->has('fax'))
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->get('fax') as $message)
                                                                <li>{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif
                                                    </small>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label  for="input-adresse">Adresse</label>
                                                        <input id="input-adresse" type="text" class="form-control" name="adresse" value="{{ $prestataire->adresse }}" required autofocus>
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
                                                <button type="submit" class="btn btn-info btn-fill pull-left">Enregistrer les modifications!</button>
                                                <br>
                                                <br>
                                                <p
                                                {{-- <a href="{{route('prestataires.createprestataire')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Joindre document</button></a> --}}
                                            </p>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
