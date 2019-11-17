
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tableau de bord</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{App\Type::count() }}</h3>

                                <p>AGREMENTS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="#" class="small-box-footer">Afficher détails <i class="fa fa-arrow-circle-right"></i></a>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">
                        <!-- MAP & BOX PANE -->
                        <div class="card"></div>
                        <!-- /.card -->
                        <div class="row">
                            <div class="col-md-6"> </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- TABLE: LATEST ORDERS -->

                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Derniers enregistrements</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body p-0">
                                <div class="table-responsive">

                                    {{--    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>N° Registre de commerce</th>
                                                <th>NINEA</th>
                                                <th>Raison sociale</th>
                                                <th>Date</th>
                                            </tr>
                                            <tr>
                                                @foreach($prestataires as $prestataire)

                                                <td>
                                                    {{$prestataire->registreCommerce}} <br>
                                                </td>
                                                <td>
                                                    {{$prestataire->ninea}}
                                                </td>
                                                <td>
                                                    {{$prestataire->raisonSociale}} <br>
                                                </td>
                                                <td>
                                                    {{$prestataire->created_at}} <br>
                                                </td>
                                                @endforeach

                                            </tr>
                                        </thead>
                                        <tbody>


                                        </table> --}}
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
                            <!-- /.card -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </section>
        </div>
</div>
