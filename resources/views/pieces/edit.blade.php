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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tableau des pièces enregistrés</h3>
                        <a href="{{route('pieces.create')}}"> <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer un agrément </button></a>

                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <div class="row">
                            <div class=" well">
                                <form class="form-vertical" action="{{route('pieces.update',$piece->id)}}" method="post" role="form"
                                    id="create-thread-form">
                                    {{csrf_field()}}
                                    {{method_field('put')}}
                                    <div class="form-group">
                                        <label for="nompiece">Nom de la piece</label>
                                        <input type="text" class="form-control" name="nompiece" id="" placeholder="Input..."
                                        value="{{$piece->nompiece}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Pièce</label>
                                        {{-- <input type="file" class="form-control" name="img" id="" placeholder="..."value="{{$piece->img}}"> --}}
                                        <input type="file" class="form-control-file" name="img" id="exampleInputFile" aria-describedby="fileHelp" "value="{{$piece->img}}">


                                    </div>
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
