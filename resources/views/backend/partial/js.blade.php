<!--jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<!-- Vendors JS -->


<!-- Main JS -->
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('backend/assets/js/config.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>
<!-- helper -->
<script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
@stack('scripts')
