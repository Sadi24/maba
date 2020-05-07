@extends('layouts.app')

@section('content')
        <div class="py-5 text-center">
            <i class="material-icons"> add_shopping_cart </i>
            <h2>Checkout</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{$totalCount}}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($carts as $cart)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$cart->name}}</h6>
                        <small class="text-muted">{{$cart->subTitle}}</small>
                        </div>
                        <span class="text-muted"> Count({{$cart->pivot->count}})</span>
                        <span class="text-muted"> {{$cart->price}}$ </span>
                    </li>
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span> <strong>{{$total}}$</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text"
                                   class="form-control"
                                   id="firstName"
                                   placeholder=""
                                   value=""
                                   required="" />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text"
                                   class="form-control"
                                   id="lastName"
                                   placeholder=""
                                   value=""
                                   required="" />
                            <div class="invalid-feedback">Valid last name is required.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email<span class="text-muted">(Optional)</span></label>
                        <input type="email"
                               class="form-control"
                               id="email"
                               placeholder="you@example.com" />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text"
                               class="form-control"
                               id="address"
                               placeholder="1234 Main St"
                               required="" />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2<span class="text-muted">(Optional)</span></label>
                        <input type="text"
                               class="form-control"
                               id="address2"
                               placeholder="Apartment or suite" />
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100"
                                    id="country"
                                    required="">
                                <option value="">Choose...</option>
                                <option>Palestine</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100"
                                    id="state"
                                    required="">
                                <option value="">Choose...</option>
                                <option>Gaza</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text"
                                   class="form-control"
                                   id="zip"
                                   placeholder=""
                                   required="" />
                            <div class="invalid-feedback">Zip code required.</div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                        BUY
                    </button>
                </form>
            </div>
        </div>
@endsection
