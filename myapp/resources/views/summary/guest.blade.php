@extends('layout.summary')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center R1">
            <div class="col-9 col-sm-4 text-center stlpce mx-5">
                <h3 class="pomenovanie">Spôsob dopravy</h3>
                <h5 class="info">{{$shipment->name}} ({{$shipment->price}}€)</h5>
            </div>
            <div class="col-9 col-sm-4 text-center stlpce mx-5">
                <h3 class="pomenovanie">Produkty spolu</h3>
                <h5 class="info">{{$total_price_products}}€</h5>
            </div>
        </div>
        <div class="row justify-content-center align-items-center R2">
            <div class="col-9 col-sm-4 text-center stlpce mx-5">
                <h3 class="pomenovanie">Spôsob platby</h3>
                <h5 class="info">{{$payment->name}} ({{$payment->price}}€)</h5>
            </div>
            <div class="col-9 col-sm-4 text-center stlpce mx-5">
                <h3 class="pomenovanie">Cena spolu</h3>
                <h5 class="info">{{$total_price}}€</h5>
            </div>
        </div>
    </div>
    

        
    <div class="container-fluid">
        <div class="row justify-content-center FU_riadok">
            <div class="col-11 col-sm-9 justify-content-center FU_stlpec">
                <div class="row justify-content-center FU">Fakturačné údaje</div>
                <div class="table-container">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="cast" scope="row">Meno</th>
                                <td class="hodnota">{{$delivery['name']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Priezvisko</th>
                                <td class="hodnota"">{{$delivery['surname']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">E-mail</th>
                                <td class="hodnota"">{{$delivery['email']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Tel. číslo</th>
                                <td class="hodnota">{{$delivery['phone']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Ulica a pop. číslo</th>
                                <td class="hodnota">{{$delivery['street']}} {{$delivery['house_number']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">Mesto</th>
                                <td class="hodnota" style="width: 50%">{{$delivery['city']}}</td>
                            </tr>
                            <tr>
                                <th class="cast" scope="row">PSČ</th>
                                <td class="hodnota">{{$delivery['postcode']}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    


    <div class="container submit-btn">
        <div class="d-flex justify-content-end">
            <form action="/cart/summary/make_order" method="GET">
                <button type="submit" id="button-cart" class="btn btn-primary btn-lg ml-2">
                    <span class="text-default">
                        Potvrdiť objednávku
                    </span>
                </button>
            </form>
        </div>
    </div>
@endsection