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
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="tableprestataire">
                            <thead>
                                {{-- <th>ID</th> --}}
                                <th>N°RC</th>
                                <th>NINEA</th>
                                <th>Raison sociale</th>
                                <th>Catégories</th>
                                {{-- <th>Date d'agrement</th> --}}
                                {{-- <th>Secteur d'activité</th> --}}
                                <th>Téléphone</th>
                                {{-- <th>BP</th> --}}
                                {{-- <th>E-mail</th>
                                <th>Piece</th>--}}
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


<div class="modal" id="modal-delete-prestataire" tabindex="-1" role="dialog">
 <form method="POST" action="" id="form-delete-prestataire">
    @csrf
    @method('DELETE')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Suppression</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous supprimer l'agrément de la base.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</form>

</form>
</section>
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
            // { data: 'dateAgrement', name: 'dateAgrement' },
        //    { data: 'prestataire.secteur.libelle', name: 'prestataire.secteur.libelle' },

            { data: 'telephone', name: 'telephone' },
            // { data: 'bp', name: 'bp' },
            // { data: 'email', name: 'email' },
            // { data: 'piece', name: 'piece' },
            { data: null , orderable: false, searchable: false}

            ],
            "columnDefs": [
            {
                "data": null,
                "render": function (data, type, row) {
                    url_e =  "{!! route('prestataires.edit',':id')!!}".replace(':id', data.id);
                    //url_d =  "{!! route('prestataires.destroy',':id')!!}".replace(':id', data.id);

                     url_d =  "{!! route('prestataires.show',':id')!!}".replace(':id', data.id);
                    return '<a href='+url_e+'  class="btn btn-primary" ><i class="fa fa-edit"></i> </a>'+
                    '<a href='+url_d+'  class="btn btn-info" ><i class="fa fa-eye"></i> </a>';



                    // '<div class="btn btn-danger delete btn-delete-prestataire" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                },

                "targets": 5
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
