<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Blog Hotspot</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('/images/LOGO.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .clamp.one-line {
            -webkit-line-clamp: 1;
        }
    </style>

    <link href="{{ asset('Backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/css/demo.css') }}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <x-dashboard.sidebar />
        <div class="main-panel">
            <x-dashboard.navbar />
            {{$slot}}

            </div>
        <x-dashboard.footer />
    </div>

    <script src="{{ asset('Backend/assets/js/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/chartist.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/bootstrap-notify.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="{{ asset('Backend/assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>
    <script src="{{ asset('Backend/assets/js/demo.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        if (!localStorage.getItem("scriptExecuted")) {
            demo.initChartist();
            $.notify({
                icon: "pe-7s-gift",
                message: "You are logged in as Admin, <b>Now you can see the dashboard</b>",
            }, {
                type: "info",
                timer: 4000
            });

            // Set flag in localStorage
            localStorage.setItem("scriptExecuted", "true");
        }
    });
</script>

</body>
</html>
