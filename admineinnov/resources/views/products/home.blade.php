@extends('templates.auth')
@section('title')
    {{ $title }}
@endsection
@section('styles')
    <style>
        .color-circle{
            width: 50px;
            height: 50px;
            border-radius: 100%;
            padding: .375em;
            display: block;
        }
    </style>
@endsection
@section('main')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Produits</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                    <li class="breadcrumb-item active">Produits</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <button id="addProductBtn"
                    class="btn waves-effect waves-light btn-success pull-right hidden-sm-down">Ajouter</button>
            </div>
        </div>
        <div id="product-wrapper">
            <div class="add-product">
                <form class="form-horizontal form-material">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group">
                                        <label class="col-md-12">Nom du produit</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                               <div class="card-header">
                                <h3>Autres informations</h3>
                               </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Prix de promotion</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Coleur</label>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="color" class="color-circle">
                                                </div>
                                                <div class="col-4">
                                                    <input type="color" class="color-circle">
                                                </div>
                                                <div class="col-4">
                                                    <input type="color" class="color-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scritps')

@endsection
