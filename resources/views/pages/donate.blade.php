@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="bg-secondary">
        <div id="donation" class="mx-auto w-75 p-5">
            <form>
                <div class="row">
                    <div class="col-sm">
                        <h2>Select you Donation method</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="don1" id="don1" value="option1" checked>
                            <label class="form-check-label" for="don1">
                                Test Donation
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="don2" id="don2" value="option2">
                            <label class="form-check-label" for="don2">
                                PayPal
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, aspernatur inventore quo neque
                            molestiae
                            sed quod repellat perspiciatis enim rem excepturi id voluptatum nobis animi reiciendis, nemo
                            atque
                            alias
                            necessitatibus!</p>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="donAmount">Amount</label>
                            <div class="row">
                                <div class="w-25 h-25 bg-success">
                                    <p class="text-center">$</p>
                                </div>
                                <div class="w-75">
                                    <input type="number" class="form-control" id="donAmount" placeholder="200.00">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="donFirstName">First Name</label>
                            <input type="text" class="form-control" id="donFirstName" aria-describedby=""
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="donLastName">Last Name</label>
                            <input type="text" class="form-control" id="donLastName" aria-describedby=""
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label for="donEmail">Email address</label>
                            <input type="email" class="form-control" id="donEmail" aria-describedby=""
                                placeholder="Enter E-mail">
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100">Make a Donation</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
