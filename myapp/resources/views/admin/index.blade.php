@extends('layout.admin')

@section('content')
<h2>Zoznam produktov:</h2>
@foreach ($products as $product)
<div class="card mb-3 cart">
    <div class="row g-0 align-items-center">
        <div class="col-2">
            @foreach ( $product->images as $image)
                <img src="{{asset('storage/'.$image->name)}}" class="img-fluid pb" alt="{{$image->alt_text}}">
            @endforeach 
        </div>
        <div class="col-10">
            <div class="card-body">
                <div class="row align-items-center justify-content-between"> 
                    <div class="col-3 me-auto">
                        <h5 class="card-title">{{ $product->producer }}</h5>
                        <p class="card-text text-secondary">{{ $product->model }}</p>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#product-description">
                            Popis produktu
                        </button>
                        <div class="modal fade" id="product-description" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Popis produktu</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                                                <td class="hodnota">{{ $product->rim }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Počet pastorkov</th>
                                                <td class="hodnota">{{ $product->cassette_count }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Počet prevodníkov</th>
                                                <td class="hodnota">{{ $product->front_cassette_count }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Reťaz</th>
                                                <td class="hodnota">{{ $product->chain }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Radenie</th>
                                                <td class="hodnota">{{ $product->drive_train }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Kľuky</th>
                                                <td class="hodnota">{{ $product->cranks }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Kazeta</th>
                                                <td class="hodnota">{{ $product->cassette }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Prehadzovač</th>
                                                <td class="hodnota">{{ $product->derailleur }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Brzdy</th>
                                                <td class="hodnota">{{ $product->brakes }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Predný kotúč</th>
                                                <td class="hodnota">{{ $product->front_rotor }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Zadný kotúč</th>
                                                <td class="hodnota">{{ $product->rear_rotor }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Predstavec</th>
                                                <td class="hodnota">{{ $product->stem }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Riadidlá</th>
                                                <td class="hodnota">{{ $product->handbar }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Rukoväte</th>
                                                <td class="hodnota">{{ $product->grip }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Sedlovka</th>
                                                <td class="hodnota">{{ $product->seat_post }}</td>
                                            </tr>
                                            <tr>
                                                <th class="cast" scope="row">Sedlo</th>
                                                <td class="hodnota">{{ $product->seat }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-3">
                        <h5 class="card-title">{{ $product->price }}</h5>
                    </div> 
                    <div class="col-1">
                        <button type="button" class="btn btn-sm btn-dark mb-1" data-bs-toggle="modal" data-bs-target="#edit">Upraviť</button>
                        <form action="{{ url('admin', [$product->id]) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-sm btn-dark" value="Odstrániť"/>
                        </form>

                        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editalabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editlabel">Edit</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('admin', [$product->id])}}" method="POST" id="edit_product" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                        <label for="producer" class="col-form-label">Výrobca:</label>
                                        <input value="{{ $product->producer }}" name="producer" type="text" class="form-control" id="producer" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="model" class="col-form-label">Model:</label>
                                        <input value="{{ $product->model }}" name="model" class="form-control" id="model" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="col-form-label">Cena:</label>
                                            <input value="{{ $product->price }}" name="price" type="number" class="form-control" id="price" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="model-year" class="col-form-label">Modelový rok:</label>
                                            <input value="{{ $product->model_year }}" name="model_year" class="form-control" id="model-year" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="frame" class="col-form-label">Rám:</label>
                                        <input value="{{ $product->frame }}" name="frame" class="form-control" id="frame" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="fork-type" class="col-form-label">Typ vidlice:</label>
                                        <input value="{{ $product->fork_type }}" name="fork_type" class="form-control" id="fork-type" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="frame-size" class="col-form-label">Veľkosť rámu:</label>
                                        <select name="frame_size" class="form-select" id="frame-size" required>
                                            <option selected>{{ $product->frame_size }}</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="front-lift" class="col-form-label">Predný zdvih (mm):</label>
                                            <input value="{{ $product->front_lift }}" name="front_lift" class="form-control" id="front-lift" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fork" class="col-form-label">Vidlica:</label>
                                            <input value="{{ $product->fork }}" name="fork" class="form-control" id="fork" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rear-shock" class="col-form-label">Tlmič:</label>
                                            <input value="{{ $product->rear_shock }}" name="rear_shock" class="form-control" id="rear-shock" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="front-tire" class="col-form-label">Predný plášť:</label>
                                            <input value="{{ $product->front_tire }}" name="front_tire" class="form-control" id="front-tire" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rear-tire" class="col-form-label">Zadný plášť:</label>
                                            <input value="{{ $product->rear_tire }}" name="rear_tire" class="form-control" id="rear-tire" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rim" class="col-form-label">Zapletané kolesá:</label>
                                            <input value="{{ $product->rim }}" name="rim" class="form-control" id="rim" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cassette-count" class="col-form-label">Počet pastorkov:</label>
                                            <input value="{{ $product->cassette_count }}" name="cassette_count" class="form-control" id="cassette-count" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="front-cassette-count" class="col-form-label">Počet prevodníkov:</label>
                                            <input value="{{ $product->front_cassette_count }}" name="front_cassette_count" class="form-control" id="front-cassette-count" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="chain" class="col-form-label">Reťaz:</label>
                                            <input value="{{ $product->chain }}" name="chain" class="form-control" id="chain" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="drive-train" class="col-form-label">Radenie:</label>
                                            <input value="{{ $product->drive_train }}" name="drive_train" class="form-control" id="drive-train" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cranks" class="col-form-label">Kľuky:</label>
                                            <input value="{{ $product->cranks }}" name="cranks" class="form-control" id="cranks" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cassette" class="col-form-label">Kazeta:</label>
                                            <input value="{{ $product->cassette }}" name="cassette" class="form-control" id="cassette" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="derailleur" class="col-form-label">Prehadzovač:</label>
                                            <input value="{{ $product->derailleur }}" name="derailleur" class="form-control" id="derailleur" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="brakes" class="col-form-label">Brzdy:</label>
                                            <input value="{{ $product->brakes }}" name="brakes" class="form-control" id="brakes" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="front-rotor" class="col-form-label">Predný disk:</label>
                                            <input value="{{ $product->front_rotor }}" name="front_rotor" class="form-control" id="front-rotor" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rear-rotor" class="col-form-label">Zadný disk disk:</label>
                                            <input value="{{ $product->rear_rotor }}" name="rear_rotor" class="form-control" id="rear-rotor" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stem" class="col-form-label">Podstavec:</label>
                                            <input value="{{ $product->stem }}" name="stem" class="form-control" id="stem" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="handbar" class="col-form-label">Riadidla:</label>
                                            <input value="{{ $product->handbar }}" name="handbar" class="form-control" id="handbar" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="grip" class="col-form-label">Rukoväte:</label>
                                            <input value="{{ $product->grip }}" name="grip" class="form-control" id="grip" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seat-post" class="col-form-label">Sedlovka:</label>
                                            <input value="{{ $product->seat_post }}" name="seat_post" class="form-control" id="seat-post" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seat" class="col-form-label">Sedlo:</label>
                                            <input value="{{ $product->seat }}" name="seat" class="form-control" id="seat" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="is_new" class="form-check-label">Je novy?</label>
                                            <input value="1" name="is_new" type="checkbox" class="form-check-input" id="is_new"
                                            {{$product->is_new === true ? 'checked':''}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="is_offer_of_the_week" class="form-check-label">Je to specialna ponuka?</label>
                                            <input value="1" name="is_offer_of_the_week" type="checkbox" class="form-check-input" 
                                            id="is_offer_of_the_week" {{$product->is_offer_of_the_week === true ? 'checked':''}}>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group" for="image-1">Obrázok 1:</label>
                                            <input name="image_1" type="file" class="form-control" id="image-1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group" for="image-2">Obrázok 2:</label>
                                            <input name="image_2" type="file" class="form-control" id="image-2">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group" for="image-3">Obrázok 3:</label>
                                            <input name="image_3" type="file" class="form-control" id="image-3">
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group" for="image-4">Obrázok 4:</label>
                                            <input name="image_4" type="file" class="form-control" id="image-4">
                                        </div>
                                        @foreach ($product->images as $image)
                                            <div class="mb-3">
                                                <label for="{{'alt-text-'.$loop->iteration }}" class="col-form-label">Alt text pre obrazok {{ $loop->iteration }}:</label>
                                                <input value="{{ $image->alt_text }}" name="{{'alt_text_'.$loop->iteration }}" class="form-control" id="{{'alt-text-'.$loop->iteration }}" required>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                        <label for="main-category" class="col-form-label">Hlavna kategoria:</label>
                                        <select name="main_category" class="form-select" id="main-category">
                                            @foreach ($main_categories as $main_category)
                                                <option value="{{ $main_category->id }}" {{ $product->main_categories === $main_category->id ? 'selected' : '' }}> {{ $main_category->category }} </option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <label for="sub-category" class="col-form-label">Podkategoria:</label>
                                        <select name="sub_category" class="form-select" id="sub-category">
                                            @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}" {{ $product->sub_categories === $sub_category->id ? 'selected' : '' }}> {{ $sub_category->category }} </option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button form="edit_product" type="submit" class="btn btn-dark">Upraviť produkt</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>
@endforeach

@endsection