<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')


    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/produkt.css') }}" rel="stylesheet">
    
<body>
    <header>
        @include('layout.partials.nav-bar')
    </header>

    <br>
    <br>
    <br>
    <main>
        <div class="container-fluid">
            <div class="row riadok_1">
                
                <div class="col-sm-5 col-12 stlpec1">
                    <div id="carouselExample" class="carousel slide">
                        
                    <div class="carousel-inner">

                        @foreach ($product->images as $image) 
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                                <img src="{{ asset('storage/'.$image->name) }}" class="d-block w-100" alt="{{ $image->altText }}">
                            </div>
                        
                        @endforeach

                    </div>
                    
                        <!-- <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../Obrazky/enduro/pivot/pivot_switchblade.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../Obrazky/enduro/pivot/22.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../Obrazky/enduro/pivot/11.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../Obrazky/enduro/pivot/33.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div> -->


                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>

                <div class="col-sm-7 col-12 stlpec2">
                    <h3 class="nazov_bicykla">{{ $product->producer }} | {{ $product->model }}</h3>
                    <p class="zvysok">{{ $product->price }}€</p>
                    <p class="zvysok">{{ $product->frame_size }}</p>
                    
                    

                    <div class="row" id="stlpec_2_riadok_2">
                                               
                        <div id="button-cart-wrap" class="d-flex flex-wrap flex-sm-nowrap align-items-center my-2 my-sm-4">
                        <form action="{{url('/category/'.$product->main_category_id.'/sub-category/'.$product->sub_category_id.'/detail/'.$product->id.'/cart_add/'.$product->id.'/5')}}" method="POST">
                            <div class="input-group no-input-arrows input-cart-amount flex-shrink-1">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary border-right-0 btn-cart-amount-minus" type="button">-</button>
                                </div>
                                <input class="form-control text-center font-weight-bold" required type="number" step="1" min="1" name="quantity" id="quantity" value="1" max="999">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary border-left-0 btn-cart-amount-plus" type="button">+</button>
                                </div>
                            </div>
                                @csrf
                                <button type="submit"  id="button-cart" class="btn btn-primary flex-grow-1 ml-2">
                                    
                                    <span class="text-default">
                                        Vložiť do košíka
                                    </span>
                                    
                                </button>
                            </form>
                           
                        </div>
                        
                    
 
                    </div>

                </div>

            </div>

            

            
        
        
            <hr>

            <div class="row">
                <div class="col-12">
                    <h6 id="popis_produktu">Popis produktu</h6>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12 col-sm-9" id="nazvy_casti">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="cast" scope="row">Výrobca</th>
                                <td class="hodnota"> {{ $product->producer }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Modelový rok</th>
                                <td class="hodnota"> {{ $product->model_year }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Rám</th>
                                <td class="hodnota"> {{ $product->frame }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Typ vidlice</th>
                                <td class="hodnota"> {{$product->fork_type}} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Predný zdvih (mm)</th>
                                <td class="hodnota"> {{ $product->front_lift }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Vidlica</th>
                                <td class="hodnota"> {{ $product->fork }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Tlmič</th>
                                <td class="hodnota"> {{ $product->rear_shock }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Predný plášť</th>
                                <td class="hodnota"> {{ $product->front_tire }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Zadný plášť</th>
                                <td class="hodnota"> {{ $product->rear_tire }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Zapletané kolesá</th>
                                <td class="hodnota"> {{ $product->rim }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Počet pastorkov</th>
                                <td class="hodnota"> {{ $product->cassette_count }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Počet prevodníkov</th>
                                <td class="hodnota"> {{ $product->front_cassette_count }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Reťaz</th>
                                <td class="hodnota"> {{ $product->chain }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Radenie</th>
                                <td class="hodnota"> {{ $product->drive_train }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Kľuky</th>
                                <td class="hodnota"> {{ $product->cranks }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Kazeta</th>
                                <td class="hodnota"> {{ $product->cassette }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Prehadzovač</th>
                                <td class="hodnota"> {{ $product->derailleur }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Brzdy</th>
                                <td class="hodnota"> {{ $product->brakes }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Predný kotúč</th>
                                <td class="hodnota"> {{ $product->front_rotor }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Zadný kotúč</th>
                                <td class="hodnota"> {{ $product->rear_rotor }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Predstavec</th>
                                <td class="hodnota"> {{ $product->stem }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Riadidlá</th>
                                <td class="hodnota"> {{ $product->handbar }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Rukoväte</th>
                                <td class="hodnota"> {{ $product->grip }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Sedlovka</th>
                                <td class="hodnota"> {{ $product->seat_post }} </td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Sedlo</th>
                                <td class="hodnota"> {{ $product->seat }} </td>
                            </tr>
                            <!-- ďalšie riadky -->
                        </tbody>
                    </table>
                </div>

            
            </div>
        
        </div>

    </main>

    <br>
    
    @include('layout.partials.footer')
    
    @include('layout.partials.script')

</body>


</html>