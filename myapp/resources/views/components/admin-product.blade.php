<div class="card mb-3 cart">
                <div class="row g-0 align-items-center">
                  <div class="col-1">
                    <img src="../Obrazky/enduro/pivot/1.jpg" class="img-fluid pb" alt="...">
                    <img src="../Obrazky/enduro/pivot/2.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="col-1">
                    <img src="../Obrazky/enduro/pivot/3.jpg" class="img-fluid" alt="...">
                    <img src="../Obrazky/enduro/pivot/11.jpg" class="img-fluid" alt="...">
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
                                                            <td class="hodnota">DT Swiss XM1700 w/ DT Swiss 350 hub & 36t Star Ratchet 30mm - 29" 15x110 F/12x157 R</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Počet pastorkov</th>
                                                            <td class="hodnota">12</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Počet prevodníkov</th>
                                                            <td class="hodnota">1</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Reťaz</th>
                                                            <td class="hodnota">Shimano CN-M8100</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Radenie</th>
                                                            <td class="hodnota">Shimano XT M8100 ISPEC EV 12s</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Kľuky</th>
                                                            <td class="hodnota">RaceFace Æffect R 32t</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Kazeta</th>
                                                            <td class="hodnota">Shimano XT M8100 10-51t</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Prehadzovač</th>
                                                            <td class="hodnota">Shimano XTR M9100 SGS 12s</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Brzdy</th>
                                                            <td class="hodnota">Shimano XT M8120 4-piston</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Predný kotúč</th>
                                                            <td class="hodnota">Shimano XT CenterLock - 203mm</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Zadný kotúč</th>
                                                            <td class="hodnota">Shimano XT CenterLock - 180mm</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Predstavec</th>
                                                            <td class="hodnota">Phoenix Team Enduro/Trail</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Riadidlá</th>
                                                            <td class="hodnota">Phoenix Team Low Rise Carbon</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Rukoväte</th>
                                                            <td class="hodnota">Phoenix Factory Lock-On</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Sedlovka</th>
                                                            <td class="hodnota">Fox Factory Transfer</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="cast" scope="row">Sedlo</th>
                                                            <td class="hodnota">Phoenix WTB Pro High Tail Trail</td>
                                                        </tr>
                                                        <!-- ďalšie riadky -->
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-3">
                                    <h5 class="card-title">2500€</h5>
                                </div> 
                                <div class="col-1">
                                    <button type="button" class="btn btn-sm btn-dark mb-1" data-bs-toggle="modal" data-bs-target="#edit">Upraviť</button>
                                    <button type="button" class="btn btn-sm btn-dark" >Odstrániť</button>

                                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editalabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="editlabel">Edit</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin" method="POST" id="edit_product">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                    <label for="producer" class="col-form-label">Výrobca:</label>
                                                    <input name="producer" type="text" class="form-control" id="producer">
                                                    </div>
                                                    <div class="mb-3">
                                                    <label for="model" class="col-form-label">Model:</label>
                                                    <input name="model" class="form-control" id="model">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price" class="col-form-label">Cena:</label>
                                                        <input name="price" type="number" class="form-control" id="price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="model-year" class="col-form-label">Modelový rok:</label>
                                                        <input name="model_year" class="form-control" id="model-year">
                                                    </div>
                                                    <div class="mb-3">
                                                    <label for="frame" class="col-form-label">Rám:</label>
                                                    <input name="frame" class="form-control" id="frame">
                                                    </div>
                                                    <div class="mb-3">
                                                    <label for="fork-type" class="col-form-label">Typ vidlice:</label>
                                                    <input name="fork_type" class="form-control" id="fork-type">
                                                    </div>
                                                    <div class="mb-3">
                                                    <label for="frame-size" class="col-form-label">Veľkosť rámu:</label>
                                                    <select name="fram_size" class="form-select" id="frame-size">
                                                        <option selected>Vyber...</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                    </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="front-lift" class="col-form-label">Predný zdvih (mm):</label>
                                                        <input name="front_lift" class="form-control" id="front-lift">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="fork" class="col-form-label">Vidlica:</label>
                                                        <input name="fork" class="form-control" id="fork">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="rear-shock" class="col-form-label">Tlmič:</label>
                                                        <input name="rear_shock" class="form-control" id="rear-shock">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="front-tire" class="col-form-label">Predný plášť:</label>
                                                        <input name="front_tire" class="form-control" id="front-tire">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="rear-tire" class="col-form-label">Zadný plášť:</label>
                                                        <input name="rear_tire" class="form-control" id="rear-tire">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="rim" class="col-form-label">Zapletané kolesá:</label>
                                                        <input name="rim" class="form-control" id="rim">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cassette-count" class="col-form-label">Počet pastorkov:</label>
                                                        <input name="cassette_count" class="form-control" id="cassette-count">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="front-cassette-count" class="col-form-label">Počet prevodníkov:</label>
                                                        <input name="front_cassette_count" class="form-control" id="front-cassette-count">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="chain" class="col-form-label">Reťaz:</label>
                                                        <input name="chain" class="form-control" id="chain">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="drive-train" class="col-form-label">Radenie:</label>
                                                        <input name="drive_train" class="form-control" id="drive-train">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cranks" class="col-form-label">Kľuky:</label>
                                                        <input name="cranks" class="form-control" id="cranks">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="cassette" class="col-form-label">Kazeta:</label>
                                                        <input name="cassette" class="form-control" id="cassette">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="derailleur" class="col-form-label">Prehadzovač:</label>
                                                        <input name="derailleur" class="form-control" id="derailleur">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="brakes" class="col-form-label">Brzdy:</label>
                                                        <input name="brakes" class="form-control" id="brakes">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="front-rotor" class="col-form-label">Predný disk:</label>
                                                        <input name="front_rotor" class="form-control" id="front-rotor">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="rear-rotor" class="col-form-label">Zadný disk disk:</label>
                                                        <input name="rear_rotor" class="form-control" id="rear-rotor">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="stem" class="col-form-label">Podstavec:</label>
                                                        <input name="stem" class="form-control" id="stem">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="handbar" class="col-form-label">Riadidla:</label>
                                                        <input name="handbar" class="form-control" id="handbar">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="grip" class="col-form-label">Rukoväte:</label>
                                                        <input name="grip" class="form-control" id="grip">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="seat-post" class="col-form-label">Sedlovka:</label>
                                                        <input name="seata_post" class="form-control" id="seat-post">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="seat" class="col-form-label">Sedlo:</label>
                                                        <input name="seat" class="form-control" id="seat">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="is_new" class="form-check-label">Je novy?</label>
                                                        <input name="is_new" type="checkbox" class="form-check-input" id="is_new">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="is_offer_of_the_week" class="form-check-label">Je to specialna ponuka?</label>
                                                        <input name="is_offer_of_the_week" type="checkbox" class="form-check-input" id="is_offer_of_the_week">
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
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button form="edit_product" type="button submit" class="btn btn-dark">Upraviť produkt</button>
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