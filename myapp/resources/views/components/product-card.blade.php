<div class="col-9 col-lg-3 mx-3">
    <div class="p-1">
        <div class="card" style="width: 18rem;">
            <img src="{{ $photoPath }}" class="card-img-top" alt="{{ $altText }}">
            <div class="card-body">
                    <h5 class="card-title">
                        <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                        href="#">
                            {{ $name }}
                            </a>
                    </h5>
                
                <p class="card-text text-dark display-6 fw-bold"> {{ $price }} € </p>
                <a href="#" class="btn btn-danger">Buy</a>
            </div>
        </div>
    </div>
</div>