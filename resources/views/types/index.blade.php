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
                        <h3 class="card-title">Catégorie de prestataires</h3>
                     {{-- <a href="{{route('types.createtype')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter catégorie </button></a> --}}

                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="table-activite">
                            <thead>
                                <th>ID</th>
                                <th>Catégories de prestataires</th>
                                {{-- <th>Action</th> --}}
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
        $('#table-activite').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('types.list')}}",
            columns: [
            { data: 'id', name: 'id' },
            { data: 'libelle', name: 'libelle' },

            // { data: 'prestataires.id', name: 'prestataires.id' },
            // { data: null ,orderable: false, searchable: false}

            ],
            "columnDefs": [
            {
                // "data": null,
                // "render": function (data, type, row) {
                    // url_e =  "{!! route('types.edit',':id')!!}".replace(':id', data.id);
                    // url_d =  "{!! route('types.destroy',':id')!!}".replace(':id', data.id);
                    // return '<a href='+url_e+'  class="btn btn-primary" ><i class="material-icons">edit</i></a>'+
                    // '<div class="btn btn-danger delete btn-delete-client" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                    //  },
                    "targets": 1
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
                        //   dom: 'lBfrtip',
                        // buttons: [
                        // 'copy', 'csv', 'excel', 'pdf', 'print'
                        // ],
                        // "lengthMenu": [ 10, 25, 50, 75, 100 ]

                    });
                });
            </script>
            @endpush
