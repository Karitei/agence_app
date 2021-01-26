@extends('layouts.dashboard_layout')

@section('content')

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Tableau de bord</h1>

        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <!-- ICON BG-->

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Financial"></i>
                        <div class="content">
                            <a href="#" class="text-muted mt-2 mb-0">portefeuille</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Commandes</p>
                            <p class="text-primary text-24 line-height-1 mb-2">80</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Money-2"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Versements</p>
                            <!--p class="text-primary text-24 line-height-1 mb-2">$1200</p-->
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- end of main-content -->


    </div>
    <!-- Footer Start -->
    <div class="flex-grow-1"></div>
    <div class="app-footer">
        <div class="row">
            <div class="col-md-9">
                <p><strong>@Develloped by kariei</strong></p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. commodi sequi dolor quibusdam

            </div>
        </div>
        <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
            <span class="flex-grow-1"></span>
            <div class="d-flex align-items-center">
                <img class="logo" src="../../dist-assets/images/logo.png" alt="">
                <div>
                    <p class="m-0">&copy; 2020 Kariei</p>
                    <p class="m-0">All rights reserved</p>
                </div>
            </div>
        </div>
    </div>


@endsection