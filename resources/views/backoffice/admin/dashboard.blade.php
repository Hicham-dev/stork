@extends('backoffice.admin.app')
@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">État des Livraisons</h5>
                        <div class="card-body">
                            <p class="card-text">Coup d'oeup sur les états des livaisons de mois Juin regardant toutes les agences</p>
                            <div class="row">
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">Collecté <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">En préparation <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">Préparée <span>1</span></a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">En attente de livraison <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">En cours de livraison <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">Livrée <span>1</span></a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">En retour <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">En attente de retour <span>1</span></a></div>
                                <div class="col-md-4"><a class="delevery-card-button" href="javascript:;">Retournée <span>1</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">Nos top 5 clients</h5>
                        <div class="card-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>GEARUP</td>
                                        <td>Casablanca</td>
                                        <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 5 120,07 DHs</td>
                                    </tr>
                                    <tr>
                                        <td>GAMING SPECIALISTE</td>
                                        <td>RABAT</td>
                                        <td class="card-sum-down"><i class="fas fa-arrow-down"></i> 4 145,97 DHs</td>
                                    </tr>
                                    <tr>
                                        <td>TOUTE A 50DH !</td>
                                        <td>Casablanca</td>
                                        <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 2 450,07 DHs</td>
                                    </tr>
                                    <tr>
                                        <td>Kaltoum accessoires</td>
                                        <td>RABAT</td>
                                        <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 1 371,23 DHs</td>
                                    </tr>
                                    <tr>
                                        <td>Pain de pomme</td>
                                        <td>Casablanca</td>
                                        <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 826,92 DHs</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Tracking rapide</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-radius: 0;" id="basic-addon1"><i class="fas fa-qrcode"></i></span>
                                            </div>
                                            <input style="border-radius: 0;" type="text" class="form-control" placeholder="Entrer le numero de tracking" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Top agences</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Casablanca</td>
                                                <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 9 120,07 DHs</td>
                                            </tr>
                                            <tr>
                                                <td>Rabat</td>
                                                <td class="card-sum-up"><i class="fas fa-arrow-up"></i> 4 145,97 DHs</td>
                                            </tr>
                                            <tr>
                                                <td>Marrakech</td>
                                                <td class="card-sum-down"><i class="fas fa-arrow-down"></i> 450,07 DHs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Chiffre d'affaire du mois</h5>
                                <div class="card-body">
                                    <p class="card-text">Solde cumulatif actuel pour juin 2020</p>
                                    <h2 style="font-weight: bold;">13 467,33 DHs</h2>
                                    <a href="javascript:;"><i class="fas fa-external-link-alt"></i> Crédit</a>
                                    <br>
                                    <a href="javascript:;"><i class="fas fa-external-link-alt"></i> Revenue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Paiements du mois</h5>
                                <div class="card-body">
                                    <p class="card-text">Cumulatif des Paiements pour le mois juin 2020</p>
                                    <h2 style="font-weight: bold;">7 134,27 DHs</h2>
                                    <a href="javascript:;"><i class="fas fa-external-link-alt"></i> Paiements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Collections du mois</h5>
                                <div class="card-body">
                                    <p class="card-text">Nombre de collections effectuées tout au leng du mois Juin 2020</p>
                                    <h2 style="font-weight: bold;">54</h2>
                                    <a href="javascript:;"><i class="fas fa-external-link-alt"></i> Collections</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Voyages du mois</h5>
                                <div class="card-body">
                                    <p class="card-text">Totale des voyages de collection pour le mois Juin 2020</p>
                                    <h2 style="font-weight: bold;">12</h2>
                                    <a href="javascript:;"><i class="fas fa-external-link-alt"></i> Voyages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection