@extends("layout.app")

@section('content')
<div class="row border">
    <div class="col-md-12  justify-content-center text-center">
        <div class="igns-dashboard-middle">
            <button class="btn btn-danger btn-lg igns-button-dimension border shadow" id="storagemanagement"><i class="fa fa-database"></i> <br /> Lagerverwaltung</button>
            <button class="btn btn-danger btn-lg igns-button-dimension border shadow" id="tcg"><i class="fa fa-id-card-o"></i> <br /> Sammelkarten</button>
            <button class="btn btn-danger btn-lg igns-button-dimension border shadow" id="pos"><i class="fa fa-shopping-cart"></i> <br /> Point of Sale</button>
            <button class="btn btn-danger btn-lg igns-button-dimension border shadow" id="usermanagement"><i class="fa fa-user"></i> <br /> Benutzer</button>
        </div>
    </div>
</div>
@endsection

@section('customJS')
    <script src="js/dashboard.js"></script>
@endsection





