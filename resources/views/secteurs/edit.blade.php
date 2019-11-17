@extends('default')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion des secteurs d'activités</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{ route('accueil') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('secteurs.index') }}">Retour</a></li>
              <li class="breadcrumb-item active">Secteurs</li>
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
                        <h3 class="card-title">Modifier les informations d'un secteur</h3>
                        {{-- <p class="card-category">Liste des secteurs enregistrés --}}
                            {{-- <a href="{{route('secteurs.createsecteur')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Nouveau secteur</button></a> --}}
                        </p>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{route('secteurs.update', $secteur->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label for="inputlibelle">Libelle du secteur d'activité</label>
                                                    <input id="inputlibelle" type="text" class="form-control" name="libelle" value="{{ $secteur->libelle }}" required autofocus>

                                                </div>
                                                <small id="input-ninea-help" class="form-text text-muted">
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
                                            <button type="submit" class="btn btn-info btn-fill pull-left">Enregistrer les modifications!</button>
                                            <br>
                                             <br>
                                            <p
                                                {{-- <a href="{{route('secteurs.createsecteur')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Joindre document</button></a> --}}
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
