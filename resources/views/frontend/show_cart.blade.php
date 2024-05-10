<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant</title>
    <!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('frontend/assets/images/klassy-logo.png') }}" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{ url('/show_cart',Auth::user()->id) }}" style="color: orange"><i
                                        class="fa-solid fa-cart-shopping"></i>
                                    Cart[{{ $count }}]</a>
                                @endauth

                                @guest
                                <a href="#" style="color: orange"><i class="fa-solid fa-cart-shopping"></i>
                                    Cart[0]</a>
                                @endguest
                            </li>

                            <li>
                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            </li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>

                </ul>
                {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <!-- ***** Cart Area Starts ***** -->

                <div class="col-lg-6 col-md-6 col-xs-12 stretch-card">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Food Image</th>
                                                <th>Food Name</th>
                                                <th>Food Price</th>
                                                <th>Food Quantity</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form action="{{ url('order_con_details') }}" method="post" enctype="multipart/form-data">

                                            @csrf

                                                @foreach ($data as $cart_item)

                                                <tr>
                                                    <td class="py-1">
                                                        <img src="/food_menu-images/{{ $cart_item->food_image }}"
                                                            alt="image" style="
                                                    height: 75px !important;
                                                    width: 75px !important;">

                                                        <input type="image" name="food_image[]"
                                                            class="form-control file-upload-info" src="/food_menu-images/{{ $cart_item->food_image }}" hidden>

                                                    </td>
                                                    <td>{{ $cart_item->food_name }}
                                                        <input type="text" style="color: black" class="form-control"
                                                            id="exampleInputUsername2" name="food_name[]"
                                                            value="{{ $cart_item->food_name }}"
                                                            hidden>
                                                    </td>
                                                    <td>${{ $cart_item->food_price }}
                                                        <input type="text" style="color: black" class="form-control"
                                                            id="exampleInputUsername2" name="food_price[]"
                                                            value="{{ $cart_item->food_price }}" hidden>
                                                    </td>
                                                    <td>{{ $cart_item->food_quantity }}
                                                        <input type="text" style="color: black" class="form-control"
                                                            id="exampleInputUsername2" name="food_quantity[]"
                                                            value="{{ $cart_item->food_quantity }}" hidden>
                                                    </td>


                                                </tr>

                                                @endforeach

                                                @foreach ($cdata as $rcart_item)
                                                <tr style="position: relative;top: -70px;right: -480px;">
                                                    <td>
                                                        <a href="{{ url('/remove_cart_item',$rcart_item->id) }}">
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                style="color: black">Remove</button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <div align="center" style="padding: 50px">
                                    <button class="btn btn-primary" type="button" id="order_now"
                                        style="color: black">Order
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Cart Area Ends ***** -->

                <!-- ***** Order Details Start ***** -->
                <div class="col-lg-6 col-md-6 col-xs-12 stretch-card" id="appear" style="display: none">
                    <div class="right-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputUsername">Username</label>
                                        <input type="text" class="form-control" id="exampleInputUsername"
                                            name="user_name" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                            name="user_email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPhone">Phone Number</label>
                                        <input type="phone" class="form-control" id="exampleInputPhone"
                                            name="user_phone" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="exampleInputCity">City</label>
                                            <input type="text" class="form-control" id="exampleInputCity"
                                                name="user_city" placeholder="City" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="exampleInputState">State</label>
                                            <input type="text" class="form-control" id="exampleInputState"
                                                name="user_state" placeholder="State" required>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">Your Address</label>
                                        <textarea class="form-control" name="user_address" id="exampleInputAddress"
                                            rows="4" placeholder="Your Full Address" required></textarea>
                                    </div>
                                    <div align="center" class="form-group">
                                        <button type="submit" class="btn btn-success me-2"
                                            style="color: black">Submit</button>
                                        <button class="btn btn-dark" type="button" id="cancel"
                                            style="color: #a03f3f">Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Order Details End ***** -->


            </div>
        </div>
    </section>


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/images/white-logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                            <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
    <script>
        $("#order_now").click(
            function () {

                $("#appear").show();
            }
        )
        $("#cancel").click(
            function () {

                $("#appear").hide();
            }
        )

    </script>
</body>

</html>
