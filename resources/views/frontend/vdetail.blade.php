{{--<html>--}}
{{--<head>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->--}}
{{--    <script type="text/javascript"--}}
{{--            src="https://app.sandbox.midtrans.com/snap/snap.js"--}}
{{--            data-client-key="SB-Mid-client-KnJEO7jofp26frlp"></script>--}}
{{--    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->--}}
{{--</head>--}}

    <body>
    @extends('layouts.frontend.master')
    @section('content')
    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "assets/img/destinasi/destinasi-1.jpg" alt = "">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "assets/img/destinasi/destinasi-1.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-2.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-3.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-4.jpg"></div>
                    </div>
                </div>

                <div class = "product-div-right">
                    <span class = "product-name">Jelajahi Malioboro yang iconic</span>
                    <div>Harga :</div>
                    <span class = "product-price" style="margin-right: 15px">Rp. 200.000</span>
                    <p class = "product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae animi ad minima veritatis dolore. Architecto facere dignissimos voluptate fugit ratione molestias quis quidem exercitationem voluptas.</p>
                    <div class = "btn-groups">
                        <a href="{{'login'}}"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
{{--                        <a href="{{('midtrans')}}"><button type = "button" id="buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <script type="text/javascript">--}}
{{--        // For example trigger on button clicked, or any time you need--}}
{{--        var payButton = document.getElementById('buy-now-btn');--}}
{{--        payButton.addEventListener('click', function () {--}}
{{--            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token--}}
{{--            window.snap.pay('{{$snap_token}}');--}}
{{--            // customer will be redirected after completing payment pop-up--}}
{{--        });--}}
{{--    </script>--}}

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/css/virtual.css" rel="stylesheet">

    <script src = "assets/js/script.js"></script>
    </body>


@stop
{{--</html>--}}
