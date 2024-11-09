@extends('backend.app')



@push('style')
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatable/css/datatables.min.css') }}">
@endpush

@section('content')
    <div class="content-wrapper">



        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User</h4>
                        <br>
                        <div style="display: flex;justify-content: end;">
                            <h4><span>Total User </span>{{ $user }}</h4>
                        </div><br>
                        <div style="display: flex;justify-content: end;"><a href="#" class="btn btn-primary">Add
                                User</a></div>
                        <div class="p-4 mt-4 table-responsive">
                            <table class="table table-hover" id="data-table">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Profile Picture</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Biography</th>


                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- Datatable --}}
    <script src="{{ asset('backend/vendors/datatable/js/datatables.min.js') }}"></script>
    {{-- sweet alart --}}
    <script src="{{ asset('backend/vendors/sweetalert/sweetalert2@11.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            var searchable = [];
            var selectable = [];
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });
            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    order: [],
                    lengthMenu: [
                        [25, 50, 100, 200, 500, -1],
                        [25, 50, 100, 200, 500, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: `<div class="text-center">
                                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                                </div>`
                    },

                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('user.index') }}",
                        type: "get",
                    },

                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'email',
                            name: 'email',
                            orderable: true,
                            searchable: true
                        },

                        {
                            data: 'contact',
                            name: 'contact',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'profile_pic',
                            name: 'profile_pic',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'address',
                            name: 'address',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'country',
                            name: 'country',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'city',
                            name: 'city',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'biography',
                            name: 'biography',
                            orderable: true,
                            searchable: true
                        },


                    ],
                });

                new DataTable('#example', {
                    responsive: true
                });
            }
        });
    @endpush
