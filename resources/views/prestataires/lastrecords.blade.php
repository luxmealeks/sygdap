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
                        <li class="breadcrumb-item"><a href="{{ route('accueil') }}">Accueil</a></li>
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
                        <h3 class="card-title">Tableau des prestataires enregistrés</h3>
                        <a href="{{route('prestataires.selecttype')}}"> <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer un agrément </button></a>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{App\Type::count() }}</h3>

                                    <p>AGREMENTS</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{App\Secteur::count() }}</h3>

                                    <p>SECTEURS D'ACTIVITES</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{route('secteurs.index')}}" class="small-box-footer">Afficher détails <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{App\Prestataire::count() }}</h3>

                                    <p>PRESTATAIRES ENREGISTRES</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                                <a href="{{route('prestataires.index')}}" class="small-box-footer">Afficher détails <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{App\Type::count() }}</h3>

                                    <p>TYPES DE PRESTATAIRES</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="{{route('types.index')}}" class="small-box-footer">Afficher détails <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!--

                        /.card-header -->

                        <div class="card-body p-0">
                            <div class="table-responsive">

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>N° Registre de commerce</th>
                                            <th>NINEA</th>
                                            <th>Raison sociale</th>
                                            <th>Téléphone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prestataires as $prestataire)

                                        <tr class="item">
                                            <td> <span class="badge badge-success">{{$prestataire->registreCommerce}} </span></td>
                                            <td> {{$prestataire->ninea}}  <br></td>
                                            <td> {{$prestataire->raisonSociale}} </td>
                                            <td> {{$prestataire->telephone}} </td>
                                            @endforeach
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
