 <div class="card-body p-0">
                                    <div class="table-responsive">

                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>N° Registre de commerce</th>
                                                    <th>NINEA</th>
                                                    <th>Raison sociale</th>
                                                    <th>Téléphone</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($prestataires as $prestataire)

                                                <tr class="item">
                                                    <td> <span class="badge badge-success">{{$prestataire->registreCommerce}} </span></td>
                                                    <td> {{$prestataire->ninea}}  <br></td>
                                                    <td> {{$prestataire->raisonSociale}} </td>
                                                    <td> {{$prestataire->telephone}} </td>
                                                    @endforeach
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
