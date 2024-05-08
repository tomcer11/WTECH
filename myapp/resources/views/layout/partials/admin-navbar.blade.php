
<header class="bg-dark">
    <div class="row justify-content-between g-0">
        <div class="col-2">
            <button type="button" class="btn btn-sm btn-dark rounded-0" data-bs-toggle="modal" data-bs-target="#add">+ Pridať produkt</button>

            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="editalabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editlabel">Pridanie produktu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin" method="POST" id="add_product" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="producer" class="col-form-label">Výrobca:</label>
                                <input name="producer" type="text" class="form-control" id="producer" required>
                            </div>
                            <div class="mb-3">
                                <label for="model" class="col-form-label">Model:</label>
                                <input name="model" type="text" class="form-control" id="model" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="col-form-label">Cena:</label>
                                <input name="price" type="number" class="form-control" id="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="model-year" class="col-form-label">Modelový rok:</label>
                                <input name="model_year" type="number" class="form-control" id="model-year" required>
                            </div>
                            <div class="mb-3">
                            <label for="frame" class="col-form-label">Rám:</label>
                            <input name="frame" type="text" class="form-control" id="frame" required>
                            </div>
                            <div class="mb-3">
                            <label for="fork-type" class="col-form-label">Typ vidlice:</label>
                            <input name="fork_type" type="text" class="form-control" id="fork-type" required>
                            </div>
                            <div class="mb-3">
                            <label for="frame-size" class="col-form-label">Veľkosť rámu:</label>
                            <select name="frame_size" class="form-select" id="frame-size" required>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="front-lift" class="col-form-label">Predný zdvih (mm):</label>
                                <input name="front_lift" type="number" class="form-control" id="front-lift" required>
                            </div>
                            <div class="mb-3">
                                <label for="fork" class="col-form-label">Vidlica:</label>
                                <input name="fork" class="form-control" id="fork" required>
                            </div>
                            <div class="mb-3">
                                <label for="rear-shock" class="col-form-label">Tlmič:</label>
                                <input name="rear_shock" class="form-control" id="rear-shock" required>
                            </div>
                            <div class="mb-3">
                                <label for="front-tire" class="col-form-label">Predný plášť:</label>
                                <input name="front_tire" class="form-control" id="front-tire" required>
                            </div>
                            <div class="mb-3">
                                <label for="rear-tire" class="col-form-label">Zadný plášť:</label>
                                <input name="rear_tire" class="form-control" id="rear-tire" required>
                            </div>
                            <div class="mb-3">
                                <label for="rim" class="col-form-label">Zapletané kolesá:</label>
                                <input name="rim" class="form-control" id="rim" required>
                            </div>
                            <div class="mb-3">
                                <label for="cassette-count" class="col-form-label">Počet pastorkov:</label>
                                <input name="cassette_count" class="form-control" id="cassette-count" required>
                            </div>
                            <div class="mb-3">
                                <label for="front-cassette-count" class="col-form-label">Počet prevodníkov:</label>
                                <input name="front_cassette_count" class="form-control" id="front-cassette-count" required>
                            </div>
                            <div class="mb-3">
                                <label for="chain" class="col-form-label">Reťaz:</label>
                                <input name="chain" class="form-control" id="chain" required>
                            </div>
                            <div class="mb-3">
                                <label for="drive-train" class="col-form-label">Radenie:</label>
                                <input name="drive_train" class="form-control" id="drive-train" required>
                            </div>
                            <div class="mb-3">
                                <label for="cranks" class="col-form-label">Kľuky:</label>
                                <input name="cranks" class="form-control" id="cranks" required>
                            </div>
                            <div class="mb-3">
                                <label for="cassette" class="col-form-label">Kazeta:</label>
                                <input name="cassette" class="form-control" id="cassette" required>
                            </div>
                            <div class="mb-3">
                                <label for="derailleur" class="col-form-label">Prehadzovač:</label>
                                <input name="derailleur" class="form-control" id="derailleur" required>
                            </div>
                            <div class="mb-3">
                                <label for="brakes" class="col-form-label">Brzdy:</label>
                                <input name="brakes" class="form-control" id="brakes" required>
                            </div>
                            <div class="mb-3">
                                <label for="front-rotor" class="col-form-label">Predný disk:</label>
                                <input name="front_rotor" class="form-control" id="front-rotor" required>
                            </div>
                            <div class="mb-3">
                                <label for="rear-rotor" class="col-form-label">Zadný disk disk:</label>
                                <input name="rear_rotor" class="form-control" id="rear-rotor" required>
                            </div>
                            <div class="mb-3">
                                <label for="stem" class="col-form-label">Podstavec:</label>
                                <input name="stem" class="form-control" id="stem" required>
                            </div>
                            <div class="mb-3">
                                <label for="handbar" class="col-form-label">Riadidla:</label>
                                <input name="handbar" class="form-control" id="handbar" required>
                            </div>
                            <div class="mb-3">
                                <label for="grip" class="col-form-label">Rukoväte:</label>
                                <input name="grip" class="form-control" id="grip" required>
                            </div>
                            <div class="mb-3">
                                <label for="seat-post" class="col-form-label">Sedlovka:</label>
                                <input name="seat_post" class="form-control" id="seat-post" required>
                            </div>
                            <div class="mb-3">
                                <label for="seat" class="col-form-label">Sedlo:</label>
                                <input name="seat" class="form-control" id="seat" required>
                            </div>
                            <div class="mb-3">
                                <label for="is_new" class="form-check-label">Je novy?</label>
                                <input value="1" name="is_new" type="checkbox" class="form-check-input" id="is_new">
                            </div>
                            <div class="mb-3">
                                <label for="is_offer_of_the_week" class="form-check-label">Je to specialna ponuka?</label>
                                <input value="1" name="is_offer_of_the_week" type="checkbox" class="form-check-input" id="is_offer_of_the_week">
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group" for="image">Obrázok:</label>
                                <input name="image" type="file" class="form-control" id="image" required>
                            </div>
                            <div class="mb-3">
                                <label for="alt-text" class="col-form-label">Alt text pre obrazok:</label>
                                <input name="alt_text" class="form-control" id="alt-text" required>
                            </div>
                            <div class="mb-3">
                            <label for="main-category" class="col-form-label">Hlavna kategoria:</label>
                            <select name="main_category" class="form-select" id="main-category" required>
                                @foreach ($main_categories as $main_category)
                                    <option value="{{ $main_category->id }}"> {{ $main_category->category }} </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="mb-3">
                            <label for="sub-category" class="col-form-label">Podkategoria:</label>
                            <select name="sub_category" class="form-select" id="sub-category" required>
                                @foreach ($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}"> {{ $sub_category->category }} </option>
                                @endforeach
                            </select>
                            </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button form="add_product" type="submit" class="btn btn-dark">Pridať produkt</button>
                    </div>
                    </div>
                </div>
                </div>
                
    </div>
</header>
