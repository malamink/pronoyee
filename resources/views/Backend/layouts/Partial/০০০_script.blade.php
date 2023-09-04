<script src="{{asset('pHomeContent/Areas/Admin/assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<script src="p{{asset('HomeContent/js/jquery.min.js')}}"></script>
<script type="text/javascript"> 
var jQuery_1_4_2 = jQuery.noConflict();
</script>
<script src="{{asset('pHomeContent/bundles/jqueryc061?v=FVs3ACwOLIVInrAl5sdzR2jrCDmVOWFbZMY6g6Q0ulE1')}}"></script>
<script src="{{asset('pHomeContent/bundles/bootstrap1b68?v=2Fz3B0iizV2NnnamQFrx-NbYJNTFeBJ2GM05SilbtQU1')}}"></script>
<script type="text/javascript" src="{{asset('pHomeContent/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('pHomeContent/js/main.js')}}"></script>
<script src="{{asset('pHomeContent/js/owl.carousel.min.js')}}"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('pHomeContent/Scripts/english_to_bangla.js')}}"></script>
<script type="text/javascript" src="{{asset('pHomeContent/Scripts/english_to_bangla-v2.js')}}"></script>
<script type="text/javascript" src="{{asset('pHomeContent/Scripts/login-register.js')}}"></script>
<script type="text/javascript" src="{{asset('pHomeContent/Scripts/search-fullscreen.js')}}"></script>
<script src="{{asset('pHomeContent/Areas/Admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('pHomeContent/Scripts/toastr.js')}}"></script>
<script src="{{asset('pHomeContent/Scripts/select2.min.js')}}"></script>

<script>
$('#CountryId').on("change", function () {
    debugger;
    var countryId = $('#CountryId').val();
    var obj = { countryId: countryId };
    $.ajax({
        url: '/Home/GetDistricts/?countryId=' + countryId,
        type: 'GET',
        contentType: 'application/json'
    }).done(function (response) {
        debugger;
        if (response) {
            $('#DistrictId').html('');
            var options = '';
            //options += '<option value="Select">Select Shelve</option>';
            for (var i = 0; i < response.length; i++) {
                options += '<option value="' + response[i].DistrictId + '">' + response[i].Name + '</option>';
            }
            $('#DistrictId').append(options);

        }
    }).fail(function (error) {
        alert(error.StatusText);
    });
    });
    </script>
    <script>
    $(document).ready(function () {
        //cws_page_focus();
        //cws_top_social_icon_animation();
        //cws_top_social_init();
        //scroll_top();
    });
    function printContent() {
        var html_content = $("#printableArea").html();
        newwindow = window.open();
        newdocument = newwindow.document;
        newdocument.write(html_content);
        newdocument.close();
        newwindow.print();
        return false;
    }
    </script>
    <script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1500",
            "timeOut": "8000",
            "extendedTimeOut": "2000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    });
    $(function () { // will trigger when the document is ready
        $('.datepicker').datepicker({
            format: "dd/MM/yyyy",
            autoclose: true,
            todayHighlight: true
        }); //Initialise any date pickers
    });
    </script>
    <script>
    jQuery(".search_btn").click(function () {
        jQuery(".search_btn").toggleClass("open");
        jQuery(".search_holder_input").toggleClass("open");
    });
</script>