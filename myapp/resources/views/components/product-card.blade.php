<div class="col-9 col-lg-3 mx-3">
    <div class="p-1">
        <div class="card" style="width: 18rem;">
            <img src="{{ $photoPath }}" class="card-img-top" alt="{{ $altText }}">
            <div class="card-body">
                    <h5 class="card-title">
<<<<<<< HEAD
                        <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                        href="#">
                            {{ $name }}
                            </a>
=======
                        <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{'detail/'.$id}}"> {{ $name }}
                        </a>
>>>>>>> 164e927130828272b0a9aaafad1411a5586a2971
                    </h5>
                
                    <p class="card-text text-dark display-6 fw-bold"> {{ $price }} € </p>
                <a href="{{'detail/'.$id}}"" class="btn btn-danger">Buy</a>
            </div>
        </div>
    </div>
</div>