@extends('backend.app')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">CMS</span> Create CMS for your website
            </h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Create CMS for your website</h5>
                            <small class="text-muted float-end">Content Management System</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cms.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Page</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="page"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Section</label>
                                    <div class="col-sm-10">
                                        <select class="Section--select" name="section">
                                            <option selected disabled>Section</option>
                                            <option value="How it Works">How it Works</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Title</label>
                                    <div class="col-sm-10">

                                        <select class="Title--select" name="title">
                                            <option selected disabled>Title</option>
                                            <option value="Selling a car">Selling a car</option>
                                            <option value="Buying a car">Buying a car</option>
                                            <option value="Finalizing a sell">Finalizing the sale</option>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Sub Title
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="basic-default-phone" name="sub_title"
                                            class="form-control phone-mask" placeholder="658 799 8941"
                                            aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Image
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="file" id="basic-default-phone" name="image"
                                            class="form-control phone-mask" placeholder="658 799 8941"
                                            aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="description" name="description" class="form-control form-control-lg"
                                            placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Href</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="href"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="basic-default-name" name="email"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="phone"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Copyright</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name"
                                            name="copyright" placeholder="John Doe" />
                                    </div>
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

        @push('scripts')
            <script>
                ClassicEditor.create(document.querySelector('#description'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        @endpush
    @endsection
