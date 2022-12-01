<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap  -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts.inc.frontend-navbar-main')

        @yield('content')

    @include('layouts.inc.frontend-footer')
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
></script>
<script>
    // function add_field()
    // {
    //     var total_text=document.getElementsByClassName("location");
    //     total_text=total_text.length+1;
    //     document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
    //         "<p id='location"+total_text+"_wrapper'>" +
    //         "<input type='text' name='location' class='form-control form-control-lg rounded-pill' id='location"+total_text+"'>" +
    //         "</p>";
    // }

    function GetLocationTextBox(value){
        return '<p id="location _wrapper"><input name = "location[]" class="form-control form-control-lg rounded-pill" type="text" id="location" value = "' + value + '" />'
    }
    function AddTextBox() {
        var div = document.createElement('DIV');
        div.innerHTML = GetLocationTextBox("");
        document.getElementById("TextLocation").appendChild(div);
    }

    function RecreateLocationTextboxes() {
        var values = eval('<%=Values%>');
        if (values != null) {
            var html = "";
            for (var i = 0; i < values.length; i++) {
                html += "<div>" + GetLocationTextBox(values[i]) + "</div>";
            }
            document.getElementById("TextLocation").innerHTML = html;
        }
    }
    window.onload = RecreateLocationTextboxes;

    function saveDisbled() {
        document.getElementById("plus").disabled = true;
        document.getElementById("save").disabled = true;
    }

    function submitDisbled(){
        const btn = document.getElementById('submit');
        btn.style.backgroundColor = 'salmon';
        btn.style.color = 'white';
    }
</script>
</body>
</html>

