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
         @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tableau des pièces enregistrés</h3>
                        <a href="{{route('pieces.create')}}"> <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer un agrément </button></a>

                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="tablepiece">
                            <thead>
                                {{-- <th>ID</th> --}}
                                <th>N°</th>
                                {{-- <th>Prestataire</th> --}}
                                <th>Nom de la pièce</th>
                                 <th>Pièce jointe</th>
                                <th>Date d'agrement</th>
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


<div class="modal" id="modal-delete-piece" tabindex="-1" role="dialog">
 <form method="POST" action="" id="form-delete-piece">
    @csrf
    @method('DELETE')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Suppression de pièce</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous supprimer la pièce de la base.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#tablepiece').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('pieces.list')}}",
            columns: [
            // { data: 'id', name: 'id' },
            { data: 'id', name: 'id' },
            // { data: 'prestataire.piece.raisonSociale', name: 'prestataire.piece.raisonSociale' },
            { data: 'nompiece', name: 'nompiece' },
            { data: 'img', name: 'img' },
            { data: 'created_at', name: 'created_at' },
            { data: null , orderable: false, searchable: false}
            ],
            "columnDefs": [
            {
                "data": null,
                "render": function (data, type, row) {
                    url_e =  "{!! route('pieces.edit',':id')!!}".replace(':id', data.id);
                    url_d =  "{!! route('pieces.destroy',':id')!!}".replace(':id', data.id);

                    return '<a href='+url_e+'  class="btn btn-primary" ><i class="material-icons">edit</i></a>'+
                    '<div class="btn btn-danger delete btn-delete-piece" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                },

                "targets": 4
            },
            // {
                //     "data": null,
                //     "render": function (data, type, row) {
                    //         url =  "{!! route('pieces.edit',':id')!!}".replace(':id', data.id);
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
                $("#tablepiece").off('click', '.btn-delete-piece').on('click','.btn-delete-piece', function(){
                    var href=$(this).data('href'); //recuperer le code du bouton et le mettre dans le href
                    $('#form-delete-piece').attr('action',href);
                    $('#modal-delete-piece').modal();
                });
            });
        </script>
        @endpush
