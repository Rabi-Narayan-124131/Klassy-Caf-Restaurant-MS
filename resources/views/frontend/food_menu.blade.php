<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach ($data as $foodMenu)

                <form action="{{ url('/add_to_cart',$foodMenu->id) }}" method="post">

                    @csrf

                    <div class="item">
                        <div class='card'
                            style="background-image: url('{{ asset('/food_menu-images/'.$foodMenu->food_image)}}')">
                            <div class="price">
                                <h6>${{ $foodMenu->food_price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $foodMenu->food_name }}</h1>
                                <p class='description'>{{ $foodMenu->food_description }}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <input type="number" name="food_quantity" id="food_quantity" min="1" class="form-control"></div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning" style="border-radius: 100%">Add to Cart</button>
                            </div>
                        </div>


                    </div>
                </form>

                @endforeach

            </div>
        </div>
    </div>
</section>
