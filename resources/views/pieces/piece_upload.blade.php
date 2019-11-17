@extends('default')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestion des pièces</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
                        <li class="breadcrumb-item active">Pièces</li>
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
                        <h3 align="center">Charger les agréments</h3>
                        <br />
                        {{-- <div class="alert" id="message" style="display: none"></div> --}}
                        <form class="form-horizontal" method="POST" id="upload_form" enctype="multipart/form-data" action="{{route('pieces.store')}} >
                            {{ csrf_field() }}
                            {{-- {{ method_field('GET') }} --}}
                            {{--  <div class="form-group">
                                <table class="table">
                                    <tr>
                                        <td width="40%" align="right"><label>Selectionner le fichier à charger</label></td>
                                        <td width="30"><input type="file" name="select_file" id="select_file" /></td>
                                        <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Téléverser"></td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="right"></td>
                                        <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                        <td width="30%" align="left"></td>
                                    </tr>
                                </table>
                            </div> --}}
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="inputlibelle">Selectionner le fichier à charger</label>
                                   <input type="file" name="select_file" id="select_file" />
                                    <input type="file" name="nompiece" class="form-control" id="select_file" aria-describedby="libellelHelp" placeholder="Agrément">
                                </div>
                                <small id="input-libelle-help" class="form-text text-muted" span class="text-muted"> Types de fichiers supportés : jpg, png, gif</span>
                                    @if ($errors->has('nompiece'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('nompiece') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </small>
                            </div>

                            <br>
                            {{-- <button type="submit" class="btn btn-info btn-fill pull-right">Charger le fichier</button> --}}
                            <button type="submit" class="btn btn-info btn-fill pull-left">Charger le fichier</button>

                        </form>
                        <br />
                        {{-- <span id="uploaded_image"></span> --}}
                    </div>
                    {{-- </body>
                        </html> --}}
                        @endsection
                        <script>
                            $(document).ready(function(){

                                $('#upload_form').on('submit', function(event){
                                    event.preventDefault();
                                    $.ajax({
                                        url:"{{ route('pieceupload.create') }}",
                                        method:"POST",
                                        data:new FormData(this),
                                        dataType:'JSON',
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success:function(data)
                                        {
                                            $('#message').css('display', 'block');
                                            $('#message').html(data.message);
                                            $('#message').addClass(data.class_name);
                                            $('#uploaded_image').html(data.uploaded_image);
                                        }
                                    })
                                });

                            });
                        </script>
                    </section>
