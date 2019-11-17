@extends('default')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Catégories de prestataires</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
                    <li class="breadcrumb-item active">Catégories</li>
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
                        <h3 class="card-title">Type de prestataire</h3>
                    </div>
                    <div class="card-body">
                        <div class="row pt-5 pl-5">

                </div>
                        <form class="form-horizontal" method="POST" action="{{route('types.store')}}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="inputlibelle">Type prestataire</label>
                                    <input type="text" name="libelle" class="form-control" id="inputlibelle" aria-describedby="libellelHelp" placeholder="Type de prestataire">
                                </div>
                                <small id="input-libelle-help" class="form-text text-muted">
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



                            <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>
                            {{-- <p
                                <a href="{{route('types.createprestataire')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Joindre document</button></a>
                            </p> --}}
                            {{-- <div class="clearfix"></div> --}}
                        </form>

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

