<script src="{{asset('pHomeContent/Areas/Admin/assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<script src="p{{asset('HomeContent/js/jquery.min.js')}}"></script>
<script type="text/javascript"> 
var jQuery_1_4_2 = jQuery.noConflict();
</script>
<script src="{{asset('pHomeContent/bundles/jqueryc061?v=FVs3ACwOLIVInrAl5sdzR2jrCDmVOWFbZMY6g6Q0ulE1')}}"></script>
<script src="{{asset('pHomeContent/bundles/bootstrap1b68?v=2Fz3B0iizV2NnnamQFrx-NbYJNTFeBJ2GM05SilbtQU1')}}"></script>
<script type="text/javascript" src="{{asset('pHomeContent/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('pHomeContent/js/main.js')}}"></script>

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





<!--For Start District-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
    
                /*------------------------------------------
                --------------------------------------------
                Country Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
                $('#country-dropdown').on('change', function () {
                    var idCountry = this.value;
                    $("#state-dropdown").html('');
                    $.ajax({
                        url: "{{url('api/fetch-states')}}",
                        type: "POST",
                        data: {
                            country_id: idCountry,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#state-dropdown').html('<option value="">-- Select State --</option>');
                            $.each(result.states, function (key, value) {
                                $("#state-dropdown").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                            $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        }
                    });
                });
    
                /*------------------------------------------
                --------------------------------------------
                State Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
                $('#state-dropdown').on('change', function () {
                    var idState = this.value;
                    $("#city-dropdown").html('');
                    $.ajax({
                        url: "{{url('api/fetch-cities')}}",
                        type: "POST",
                        data: {
                            state_id: idState,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (res) {
                            $('#city-dropdown').html('<option value="">-- Select City --</option>');
                            $.each(res.cities, function (key, value) {
                                $("#city-dropdown").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                });
    
            });
        </script>
<!--For End District-->






<!--For Start writer expand-->
      
<script>
        class readMore {
    constructor() {
        this.content = '.readmore__content';
        this.buttonToggle = '.readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`;
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
    }

    const initReadMore = new readMore();
    initReadMore.bootstrap()
</script>
<!--For End writer expand-->