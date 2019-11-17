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

                    <h3>{{$piece->nompiece}}</h3>
                    <hr>

                    <div class="piece-details">
                        {{-- {!! \App\Markdown::defaultTransform($piece->piece)  !!} --}}
                    </div>
                    <br>

                    {{--@if(auth()->user()->id == $piece->user_id)--}}
                    @can('update',$piece)
                    <div class="actions">

                        <a href="{{route('piece.edit',$piece->id)}}" class="btn btn-info btn-xs">Edit</a>

                        {{--//delete form--}}
                        <form action="{{route('piece.destroy',$piece->id)}}" method="POST" class="inline-it">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
                        </form>

                    </div>
                    @endcan
                    {{--@endif--}}
                </div>
                <hr>
                <br>

                {{--Answer/prestataire--}}

                {{-- @foreach($piece->prestataires as $prestataire)
                    <div class="prestataire-list well well-lg">
                        @include('piece.partials.prestataire-list')
                    </div>
                    <hr> --}}

                    {{--reply to prestataire--}}
                    {{-- <button class="btn btn-xs btn-default" onclick="toggleReply('{{$prestataire->id}}')">reply</button>
                    <br> --}}
                    {{--//reply form--}}
                    {{-- <div style="margin-left: 50px" class="reply-form-{{$prestataire->id}} hidden">

                        <form action="{{route('replyprestataire.store',$prestataire->id)}}" method="post" role="form">
                            {{csrf_field()}}
                            <legend>Create Reply</legend>

                            <div class="form-group">
                                <input type="text" class="form-control" name="body" id="" placeholder="Reply...">
                            </div>


                            <button type="submit" class="btn btn-primary">Reply</button>
                        </form>

                    </div>
                    <br>

                    @foreach($prestataire->prestataires as $reply)
                    @include('piece.partials.reply-list')

                    @endforeach


                    @endforeach --}}
                    <br><br>
                    {{-- @include('piece.partials.prestataire-form') --}}

                @endsection


                    @section('js')

                    <script>
                        function toggleReply(prestataireId){
                            $('.reply-form-'+prestataireId).toggleClass('hidden');
                        }
                    </script>

                    @endsection
