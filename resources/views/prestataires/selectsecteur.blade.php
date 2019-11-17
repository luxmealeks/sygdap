@extends('default')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Selectionp du secteur activité</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="table-activite">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nom du secteur d'activité</th>
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
@endsection

@push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-activite').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('activites.list')}}",
            columns: [
                { data: 'id', name: 'id' },
                 { data: 'secteur_activite', name: 'secteur_activite' },

                // { data: 'prestataires.id', name: 'prestataires.id' },
                { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                         "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('activites.create','activite=:id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>';
                        },
                        "targets": 2
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('activites.edit',':id')!!}".replace(':id', data.id);
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
