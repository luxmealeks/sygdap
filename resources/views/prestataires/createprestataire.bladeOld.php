@extends('default')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enregistrement d'un nouveau prestataire</h4>
                    </div>
                    <div class="card-body">
                         <div class="row pt-5 pl-5">
                    <h4>
                        Type de prestataire: {{$type->libelle ?? 'Aucun type choisi'}}<br/>
                    </h4>
                </div>
                        <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                            <div class="modal-content">
                                                    <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Register</h4>
                                                    </div>
                                                    <div class="modal-body">
                                        <form id="formRegister" class="form-horizontal" method="POST" action="{{route('prestataires.store')}}">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="type" value="{{$type->id}}" class="form-control" name="inputName" id="inputName" placeholder="">

                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label for="inputninea">NINEA</label>
                                                    <input type="text" name="ninea" class="form-control" id="inputninea" aria-describedby="ninealHelp" placeholder="NINEA">
                                                </div>
                                                <small id="input-ninea-help" class="form-text text-muted">
                                                    @if ($errors->has('ninea'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('ninea') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="inputregistreCommerce">N° du Registre de commerce</label>
                                                    <input type="text" name="registreCommerce" class="form-control" id="inputregistreCommerce" aria-describedby="registreCommercelHelp" placeholder="Registre Commerce">
                                                </div>
                                                <small id="input-registreCommerce-help" class="form-text text-muted">
                                                    @if ($errors->has('registreCommerce'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('registreCommerce') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="input-raisonSociale">Raison Sociale</label>
                                                    <input type="text" name="raisonSociale" class="form-control" id="input-raisonSociale" aria-describedby="raisonSocialelHelp" placeholder="Raison Sociale">

                                                </div>
                                                <small id="input-raisonSociale-help" class="form-text text-muted">
                                                    @if ($errors->has('raisonSociale'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('raisonSociale') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label  for="input-secteurs">Secteur d'activité</label>
                                                    <input type="text" name="secteurs" class="form-control" id="input-secteurs" aria-describedby="secteurslHelp" placeholder="Secteur d'activité">
                                                </div>
                                                <small id="input-nom-help" class="form-text text-muted">
                                                    @if ($errors->has('secteurs'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('secteurs') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="input-types">Types de prestataire</label>
                                                    <input type="text" name="types" class="form-control" id="input-types" aria-describedby="types_atlHelp" placeholder="Types de prestatairet">

                                                </div>
                                                <small id="input-types-help" class="form-text text-muted">
                                                    @if ($errors->has('types'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('types') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 p-1">
                                                <div class="form-group">
                                                    <label for="input-telephone">Telephone</label>
                                                    <input type="int" name="telephone" class="form-control" id="input-telephone" aria-describedby="telephonelHelp" placeholder="Téléphone">
                                                </div>
                                                <small id="input-telephone-help" class="form-text text-muted">
                                                    @if ($errors->has('telephone'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('telephone') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email address</label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                                <small id="input-email-help" class="form-text text-muted">
                                                    @if ($errors->has('email'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('email') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 pr-1">
                                                    <label  for="input-bp">Boite Postale</label>
                                                    <input type="int" name="bp" class="form-control" id="input-bp" aria-describedby="bplHelp" placeholder="Boite postale">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label  for="input-fax">Fax</label>
                                                    <input type="int" name="fax" class="form-control" id="input-fax" aria-describedby="faxlHelp" placeholder="FAX">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label  for="input-adresse">Adresse</label>
                                                    <input type="int" name="adresse" class="form-control" id="input-adresse" aria-describedby="adresselHelp" placeholder="Adresse">
                                                </div>
                                                <small id="input-nom-help" class="form-text text-muted">
                                                    @if ($errors->has('adresse'))
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->get('adresse') as $message)
                                                            <li>{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </small>
                                            </div>



                                            <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>
                                            {{-- <p
                                                <a href="{{route('prestataires.createprestataire')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Joindre document</button></a>
                                            </p> --}}
                                            {{-- <div class="clearfix"></div> --}}
                                        </form>

                                          
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                         
                            <!-- JavaScripts -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                            <script>
                              
                                $(function(){
                                  
                                        $('#register').click(function() {
                                                $('#myModal').modal();
                                        });
                                  
                                        $(document).on('submit', '#formRegister', function(e) {  
                                                e.preventDefault();
                                                  
                                                $('input+small').text('');
                                                $('input').parent().removeClass('has-error');
                                                  
                                                $.ajax({
                                                        method: $(this).attr('method'),
                                                        url: $(this).attr('action'),
                                                        data: $(this).serialize(),
                                                        dataType: "json"
                                                })
                                                .done(function(data) {
                                                        $('.alert-success').removeClass('hidden');
                                                        $('#myModal').modal('hide');
                                                })
                                                .fail(function(data) {
                                                        $.each(data.responseJSON, function (key, value) {
                                                                var input = '#formRegister input[name=' + key + ']';
                                                                $(input + '+small').text(value);
                                                                $(input).parent().addClass('has-error');
                                                        });
                                                });
                                        });
                                  
                                })
                              
                            </script>
                            {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

                    </div>
                </div>
            </div>
            {{--   <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                    </div>

                    <div class="card-body">
                        {{-- <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                <h5 class="title">Mike Andrew</h5>
                            </a>
                            <p class="description">
                                michael24
                            </p>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title ">Joindre des pièces</h4>
                        </div>
                        <p class="description text-left">
                            <br> Demande :
                            <br> Autre docu"
                        </p>
                    </div>
                    <hr>
                    <div class="button-container mr-auto ml-auto">
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-facebook-square"></i>
                        </button>
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-simple btn-link btn-icon">
                            <i class="fa fa-google-plus-square"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
