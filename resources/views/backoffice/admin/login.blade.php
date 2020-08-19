<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice-login.css')}}">
</head>
<body>

    <div class="container">
        <div class="row m-t-20">
            <div class="col-md-12">
                <h1>STORK</h1>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-4" style="border-right: 2px solid #80808040;">
                <h4>Connexion</h4>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre inforamation avec quelqu'un d'autre.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <a href="http://admin.stork.com/" class="btn btn-primary" style="width:100%">S'identifier</a>
                </form>
                <br>
                <hr>
                <br>
                <button type="submit" class="btn" style="width: 100%;
                border: 1px solid #80808040;">Récupérer votre compte ?</button>

            </div>
            <div class="col-md-8 text-center">
                <img width="293px" src="{{ asset('images/scan_your_badge.png') }}" alt="or scan ur badge"/>
                <h4 style="width: 300px;
                margin: auto;">Scanner votre badge QR pour un accès rapide</h4>
                <br>
                <a href="http://admin.stork.com/"  class="btn" style="width: 50%;
                border: 1px solid #80808040;">Scanner</a>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-12">
                <p style="font-size:11px;">
                    <strong> A propos de la connexion via stork.com</strong>
                    <br>
                    Nobel consulting utilise les informations de votre compte 
                    stork.com pour vous identifier et vous accorder l'accès aux services stork.
                    Votre utilisation de ce site est soumise à nos conditions d'utilisation et à 
                    notre politique de confidentialité, accessibles via les liens ci-dessous. Votre utilisation
                    des produits et services Nobel consulting doit respecter le contrat client stork accessible via
                    le lien ci-dessous, à moins que vous ayez signé un autre contrat avec Nobel consulting ou
                    avec un revendeur à valeur ajoutée stork pour l'achat de ces produits et services. L'Accord Client
                    stork a été modifié le 17 juin 2020. Pour plus d'informations sur ces mises à jour, consultez <a href="javascript:;">Modifications récentes.</a>
                </p>
                
                <br>

                <p style="font-size:11px;">
                    © 2020, Nobel consulting, SARL. ou ses filiales. Tous droits réservés. <a href="javascript:;">Conditions d'utilisation</a> | <a href="javascript:;">Politique de confidentialité</a>
                </p>

            </div>

            
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>