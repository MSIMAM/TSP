
    {{--================= all js links ==============--}}
    <script src="{{asset('styles/assets/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/jquery.slim.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/morris/chart-data.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/toastr/toastr.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('styles/assets/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{ asset('styles/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('styles/assets/plugins/fileupload/fileupload.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('styles/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('styles/js/toastr.min.js')}}"></script>





    <script src="{{asset('styles/assets/js/script.js')}}"></script>
    {{--=================== end js links ========================--}}
    {{-- @notifyJs --}}

    @if (Session::has('message'))
        <script>
            toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
            }
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif