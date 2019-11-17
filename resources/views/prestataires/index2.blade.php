@extends('default')
@section('content')
<div class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Liste de prestataires</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active">Prestataires</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            {{--   <div class="modal" id="modal-edit-prestataire" tabindex="-1" role="dialog">
                <form method="POST" action="" id="form-delete-prestataire">
                    @csrf
                    @method('DELETE')
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Suppression </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Vous être sur le point de supprimer un prestataire. Etes vous sûr?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-danger">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> --}}
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Liste de prestataires</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tableprestataire" class="table table-bordered table-striped">
                                    <thead>
                                        <th>NINEA</th>
                                        <th>Raison sociale</th>
                                        <th>type de prestataire</th>
                                        <th>Date d'agrement</th>
                                        <th>Secteur d'activité</th>
                                        <th>Tel</th>
                                        {{-- <th>BP</th> --}}
                                        <th>E-mail</th>
                                        {{-- <th>Adresse</th> --}}
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</div>

@endsection
@push('scripts')



<script type="text/javascript">
    $(document).ready(function () {
        $('#tableprestataire').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('prestataires.list')}}",
            columns: [
            // { data: 'id', name: 'id' },
            { data: 'registreCommerce', name: 'registreCommerce' },
            { data: 'ninea', name: 'ninea' },
            { data: 'raisonSociale', name: 'raisonSociale' },
            { data: 'type.libelle', name: 'type.libelle' },
            { data: 'dateAgrement', name: 'dateAgrement' },
            { data: 'libelle', name: 'libelle' },
            { data: 'telephone', name: 'telephone' },
            // { data: 'bp', name: 'bp' },
            { data: 'email', name: 'email' },
            // { data: 'adresse', name: 'adresse' },
            { data: null , orderable: false, searchable: false}

            ],
            "columnDefs": [
            {
                "data": null,
                "render": function (data, type, row) {
                    url_e =  "{!! route('prestataires.edit',':id')!!}".replace(':id', data.id);
                    url_d =  "{!! route('prestataires.destroy',':id')!!}".replace(':id', data.id);
                    return '<a href='+url_e+'  class="btn btn-primary" ><i class="material-icons">edit</i></a>'+
                    '<div class="btn btn-danger delete btn-delete-prestataire" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                },

                "targets": 8
            },
            // {
                //     "data": null,
                //     "render": function (data, type, row) {
                    //         url =  "{!! route('prestataires.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                    ],
                    dom: 'lBfrtip',
                    buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    "lengthMenu": [ 10, 25, 50, 75, 100 ]

                });
                $("#tableprestataire").off('click', '.btn-delete-prestataire').on('click','.btn-delete-prestataire', function(){
                    var href=$(this).data('href'); //recuperer le code du bouton et le mettre dans le href
                    $('#form-delete-prestataire').attr('action',href);
                    $('#modal-delete-prestataire').modal();
                });
            });
        </script>

        @endpush
