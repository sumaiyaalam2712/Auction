@extends('backend.app')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Brand</span> Create New Brand for Car
            </h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">BRANDS</h5>
                            <small class="text-muted float-end"></small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Brand</label>
                                    <div class="col-sm-10">
                                        <select class="Brand--select" name="name">
                                            <option selected disabled>Section</option>
                                            <option value="Audi">Audi</option>
                                            <option value="TOYOTA">TOYOTA</option>
                                            <option value="Fort">Fort</option>
                                            <option value="MAZDA">MAZDA</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Acura">Acura</option>
                                            <option value="Fiat">Fiat</option>
                                            <option value="Hyundai">Hyundai</option>
                                        </select>
                                    </div>
                                    @error('name')
                                        <strong style="color:#9966ff">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Basic with Icons -->

            </div>
        </div>
        <!-- / Content -->
    @endsection
