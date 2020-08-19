@extends('backoffice.admin.app')
@section('body')

<div class="container-fluid">
    <button type="submit"  style="font-size:13px" class="btn btn-primary">Créer une agence</button>
    <div class="btn-group">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
        border: 1px solid #80808061;font-size:13px;">
            Action
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" style="font-size: 13px;" href="#">Modifier</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" style="font-size: 13px;" href="#">Fermer</a>
        </div>
    </div>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Nombre de staff</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"/></td>
                <td><a href="javascript:;">Rabat</a></td>
                <td>125 Hassan, Rabat, Maroc </td>
                <td><a href="javascript:;">0537373737</a></td>
                <td>3</td>
            </tr>
            <tr>
                <td><input type="checkbox"/></td>
                <td><a href="javascript:;">Casablaca</a></td>
                <td>65 Bourgone, Casablanca, Maroc </td>
                <td><a href="javascript:;">0537373737</a></td>
                <td>4</td>
            </tr>
            <tr>
                <td><input type="checkbox"/></td>
                <td><a href="javascript:;">Marrakech</a></td>
                <td>12 Agdale, Marrakech, Maroc </td>
                <td><a href="javascript:;">0537373737</a></td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
</div>

<style>
    #table_id_wrapper {
        margin-top: 20px;
    }

    body {
        background-color: white;
    }
</style>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                language: {
                    searchPlaceholder: "Filtrer par numero de tracking et adresse d'émission ou adresse de récéption",
                    "sEmptyTable":     "Aucune donnée disponible dans le tableau",
                    "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
                    "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "Afficher _MENU_ éléments",
                    "sLoadingRecords": "Chargement...",
                    "sProcessing":     "Traitement...",
                    "sSearch":         "Rechercher :",
                    "sZeroRecords":    "Aucun élément correspondant trouvé",
                    "oPaginate": {
                        "sFirst":    "Premier",
                        "sLast":     "Dernier",
                        "sNext":     "Suivant",
                        "sPrevious": "Précédent"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                    },
                    "select": {
                            "rows": {
                                "_": "%d lignes sélectionnées",
                                "0": "Aucune ligne sélectionnée",
                                "1": "1 ligne sélectionnée"
                            } 
                    }
                }
            });
        } );
    </script>
@endsection