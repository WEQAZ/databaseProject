<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success" > {{ session('status') }} </h6>
                @endif
                <div class="mx-10 p-10">
                    <div class="card">
                        <div class="bg-white btn">
                            <a href="{{ url('add-product') }}">Add Product</a>
                        </div>
                        <div class="bg-white card-body">
                           
                            <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">quantity</label>
                                    <input type="integer" name="quantity" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">price</label>
                                    <input type="integer" name="price" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">category_id</label>
                                    <input type="number" name="category_id" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">pic</label>
                                    <input type="file" name="pic" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
