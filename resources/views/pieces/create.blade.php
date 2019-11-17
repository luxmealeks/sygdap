@extends('default')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des pieces </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Pieces</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ajout de pieces</h3>
                            {{-- <div class="container">
                                <div class="row justify-content-center">
                                    <div class="card">
                                        <div class="card-header">Charger les agréments</div> --}}

                                        <div class="card-body">
                                            @if ($message = Session::get('success'))

                                            <div class="alert alert-success alert-block">

                                                <button type="button" class="close" data-dismiss="alert">×</button>

                                                <strong>{{ $message }}</strong>

                                            </div>

                                            @endif

                                            @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> Quelques problèmes liés à l'entrée de donnée.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif


                                            <form action="{{route('pieces.store')}} " method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="prestataire" value={{$prestataire->id}}>
                                                <div class="form-group">
                                                    <label for="nompiece">Nom de la piece</label>
                                                    <input type="text" class="form-control" name="nompiece" id="img" placeholder="Nom de la piece..."
                                                    value="{{old('nompiece')}}">
                                                </div>

                                                <div class="form-group">
                                                    <input type="file" class="form-control-file" name="img" id="exampleInputFile" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Veuillez télécharger un fichier valide. La taille ne doit pas dépasser 2MB.</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Charger le fichier</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection
