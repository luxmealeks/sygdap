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

                        <li class="breadcrumb-item active">Secteurs</li>
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
                        <h3 class="card-title">Tableau des secteurs d'activité</h3>
                        <a href="{{route('secteurs.createsecteur')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter secteur </button></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="table-activite">
                            <thead>
                                <th>ID</th>
                                <th>Nom du secteur</th>
                                <th>Action</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
<div class="modal" id="modal-delete-secteur" tabindex="-1" role="dialog">
 <form method="POST" action="" id="form-delete-secteur">
    @csrf
    @method('DELETE')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Suppression d'un secteur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer le secteur d'activité de la base.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#table-activite').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('secteurs.list')}}",
            columns: [
            { data: 'id', name: 'id' },
            { data: 'libelle', name: 'libelle' },

            // { data: 'prestataire.ninea', name: 'prestataire.ninea' },
            { data: null ,orderable: false, searchable: false}

            ],
            "columnDefs": [
            {
                "data": null,
                "render": function (data, type, row) {
                    url_e =  "{!! route('secteurs.edit',':id')!!}".replace(':id', data.id);
                    url_d =  "{!! route('secteurs.destroy',':id')!!}".replace(':id', data.id);
                    return '<a href='+url_e+'  class="btn btn-primary" ><i class="fa fa-edit"></i> </a>'+
                    '<div class="btn btn-danger delete btn-delete-secteur" data-href='+url_d+'><i class="fa fa-trash"></i> </div>';
                },

                "targets": 2
            },
            // {
                //     "data": null,
                //     "render": function (data, type, row) {
                    //         url =  "{!! route('secteurs.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                    ],
                    //   dom: 'lBfrtip',
                    // buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    // "lengthMenu": [ 10, 25, 50, 75, 100 ]

                });
                  $("#table-activite").off('click', '.btn-delete-secteur').on('click','.btn-delete-secteur', function(){
             var href=$(this).data('href'); //recuperer le code du bouton et le mettre dans le href
             $('#form-delete-secteur').attr('action',href);
               $('#modal-delete-secteur').modal();
          });
            });
        </script>
        @endpush
