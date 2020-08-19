@extends('backoffice.admin.app')
@section('body')

<div class="container-fluid">
    <button type="submit"  style="font-size:13px" class="btn btn-primary">Lancer une livraison  </button>
    <div class="btn-group">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="
        border: 1px solid #80808061;font-size:13px;">
            Action
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" style="font-size: 13px;" href="#">Changer a "Retournée"</a>
            <a class="dropdown-item" style="font-size: 13px;" href="#">Modifier</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" style="font-size: 13px;" href="#">Retourner</a>
        </div>
    </div>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th></th>
                <th>Numero de Tracking</th>
                <th>Contre remboursement</th>
                <th>Émetteur</th>
                <th>Récepteur</th>
                <th>Date de collection</th>
            </tr>
        </thead>
        <tbody>
            <td><input type="checkbox"/></td>
            <td><a href="javascript:;">D100008</a></td>
            <td>Non</td>
            <td><a href="javascript:;">GEARUP Casablanca</a></td>
            <td>Mohamed amghar, 134 Firdaous Témara Maroc</td>
            <td>16 juin 2020, 14:56</td>
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