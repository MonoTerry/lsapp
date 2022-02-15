@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('img/carousel.jpg') }}" alt="..." class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Join the Choir!</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quo reiciendis fuga iure minus? Ut
                        quos cum ipsum tempore in officiis, iste aliquid nulla corporis dolores consectetur nostrum
                        laudantium! Distinctio!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Connect and Grow!</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum, ex tenetur laboriosam
                        eos ipsa quibusdam maxime nisi distinctio voluptate et quisquam possimus consequuntur ad nesciunt,
                        amet, dolorum nam optio.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sing your heart out!</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatum, ex tenetur laboriosam
                        eos ipsa quibusdam maxime nisi distinctio voluptate et quisquam possimus consequuntur ad nesciunt,
                        amet, dolorum nam optio.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="mt-4 p-4 row">
        <div class="col-sm text-center">
            <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo earum sed error necessitatibus et fugiat consequatur consequuntur a numquam maxime, tempora libero possimus adipisci hic corrupti. Minima enim nam reiciendis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis deleniti quod tenetur corrupti architecto dignissimos, est quas error? Inventore eum molestiae placeat dicta reprehenderit voluptatibus consequuntur consequatur assumenda cum quas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam excepturi nesciunt amet a nulla autem, doloremque accusamus perferendis quos ratione cum, unde aperiam? Atque corrupti corporis excepturi, assumenda sapiente perspiciatis.</h4>
        </div>
        <div class="col-sm text-center">
            <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo earum sed error necessitatibus et fugiat consequatur consequuntur a numquam maxime, tempora libero possimus adipisci hic corrupti. Minima enim nam reiciendis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis deleniti quod tenetur corrupti architecto dignissimos, est quas error? Inventore eum molestiae placeat dicta reprehenderit voluptatibus consequuntur consequatur assumenda cum quas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam excepturi nesciunt amet a nulla autem, doloremque accusamus perferendis quos ratione cum, unde aperiam? Atque corrupti corporis excepturi, assumenda sapiente perspiciatis.</h4>
        </div>
    </div>
    <div class="bg-secondary mt-4">
        <div id="counselling" class="mx-auto w-75 p-5">
            <h2>Free Consultation</h2>
            <p>Get an appointment with the choir</p>
            <form>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="consultName">Name</label>
                            <input type="text" class="form-control" id="consultName" aria-describedby="emailHelp"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="consultEmail">Email address</label>
                            <input type="email" class="form-control" id="consultEmail" aria-describedby="emailHelp"
                                placeholder="Enter E-mail">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="consultphone">Phone Number</label>
                            <input type="number" class="form-control" id="consultPhone" placeholder=" Enter Phone Number">
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
