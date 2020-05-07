﻿@extends('layouts.app')

@section('content')
        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add Product</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/admin/products" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input id="name"
                                           name="name"
                                           placeholder="name"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-4 col-form-label">Title</label>
                                <div class="col-8">
                                    <input id="title"
                                           name="title"
                                           placeholder="title"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">
                                        Please title is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">SubTitle</label>
                                <div class="col-8">
                                    <input id="subTitle"
                                           name="subTitle"
                                           placeholder="subTitle"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please SubTitle is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Price</label>
                                <div class="col-8">
                                    <input id="price"
                                           name="price"
                                           placeholder="price"
                                           class="form-control here"
                                           type="number" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-4 col-form-label">Description</label>
                                <div class="col-8">
                                    <textarea id="description"
                                              name="description"
                                              placeholder="description"
                                              class="form-control here">
                    </textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Image</label>
                                <div class="col-8">
                                    <input id="image"
                                           name="image"
                                           placeholder="Image"
                                           class="form-control here"
                                           type="file" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Image is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
