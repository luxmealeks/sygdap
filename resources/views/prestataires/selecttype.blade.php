@extends('default')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des catégories de prestataires</h1>
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
                        <h3 class="card-title">Type de prestataires</h3>
                        <a href="{{route('types.createtype')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter catégorie </button></a>

                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="table-type">
                            <thead>
                                <th>ID</th>
                                <th>Type de prestataire</th>
                                <th>Selectionner</th>
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
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#table-type').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('types.list')}}",
            columns: [
            { data: 'id', name: 'id' },
            { data: 'libelle', name: 'libelle' },
            { data: null ,orderable: false, searchable: false}

            ],
            "columnDefs": [
            {
                "data": null,
                "render": function (data, type, row) {
                    url_e =  "{!! route('prestataires.createprestataire','type=:id')!!}".replace(':id', data.id);
                    return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-pencil"></i></a>';
                },
                "targets": 2
            },
            // {
                //     "data": null,
                //     "render": function (data, type, row) {
                    //         url =  "{!! route('types.edit',':id')!!}".replace(':id', data.id);
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
            });
        </script>
        @endpush
