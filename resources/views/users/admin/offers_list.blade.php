@extends('layouts.dashboard_layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet" />
@endsection


@section('content')
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Liste des offres</h4>

            </div>
            <div class="col-md-12 mb-4">
            <a href="{{route('create')}}"  class='btn btn-primary' style="float: right"><span class='primary label label-default'>Nouvelle offre</span> </a>

            </div>
                <div class="card-body w-80 ml-auto mr-auto">


                <div class="table-responsive">
                    <!--table class="display nowrap table table-striped table-bordered" id="scroll_horizontal_table" style="width:100%">
                        <thead>
                        <tr>
                            <th>nom d'utilisateur</th>
                            <th>E-mail</th>
                            <th>Statut</th>
                        </tr>
                        </thead>
                        <tbody>


                            </tbody>
                        </table-->

                    <table class="table table-sm" id="offers" aria-describedby="zero_configuration_table_info">
                        <thead>
                        <tr>
                            <th>titre</th>
                            <th>description</th>
                            <th>prix</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(function () {


            var table = $('#offers').DataTable({

                orderCellsTop: true,
                fixedHeader: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                columns: [
                    {"data": "title", "orderable": true, "searchable": true},
                    {"data": "description", "orderable": true, "searchable": true},
                    {"data": "price", "orderable": true, "searchable": true},
                ],
                ajax: {
                    url: '{{route('offers_list_table')}}',
                    type: 'GET',
                    data: {
                        '_token': function () {
                            return $('input[name="_token"]').val();
                        },
                    }

                },
            });
        });



    </script>

@endsection

