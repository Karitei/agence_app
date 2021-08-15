@extends('layouts.dashboard_layout')


@section('content')

    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Ajouter une nouvelle offre</h4>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('add_offer')}}" >
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Titre</label>
                                <input class="form-control" id="title" type="text"  required="required" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Description</label>
                                <input class="form-control" id="description" type="text"  required="required" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Prix</label>

                                    <input class="form-control" id="price" type="text" required="required" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">image</label>
                                <input class="form-control" id="image" type="file"  />
                            </div>

                        </div>
                        <div class="form-group">

                        </div>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection