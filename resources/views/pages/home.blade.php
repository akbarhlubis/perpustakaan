@extends('layouts.app')

@section('title', $title)

@section('body')
    <div class="row min-vh-100">
        <div class="col-lg-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1>{{ $title }}</h1>
            </div>
            <div class="d-flex">
                <div class="card mr-2" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">Total Buku</h3>
                        <h1 class="font-weight-bold text-primary">{{ $totalBooks }}</h1>
                    </div>
                </div>
                <div class="card mr-2" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">Total User</h3>
                        <h1 class="font-weight-bold text-primary">{{ $totalUsers }}</h1>
                    </div>
                </div>
                <div class="card mr-2" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">Total Buku Dipinjam </h3>
                        <h1 class="font-weight-bold text-primary">{{ $totalBooksBorrowed }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection