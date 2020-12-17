@extends('layouts.dashboard_layout')


@section('content')
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Liste des utilisateurs</h4>

            </div>
            <div class="card-body w-80 ml-auto mr-auto">
                <div class="table-responsive">
                    <table class="display nowrap table table-striped table-bordered" id="scroll_horizontal_table" style="width:100%">
                        <thead>
                        <tr>
                            <th>nom d'utilisateur</th>
                            <th>E-mail</th>
                            <th>Statut</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection