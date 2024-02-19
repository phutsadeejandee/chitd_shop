@extends('layout.index')
@section('title','Create Product')

@section('content')
    <div class="my-5">
        
        <div class="container mx-auto max-w-xl shadow py-4 px-10">    

            @if (session()->has('error'))
                <div class="bg-red-500 text-black px-4 py-2">
                    {{session('error')}}
                </div>
            @endif
            
            <main class="form-signin w-100 m-auto">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                        @endif
                        <a href="{{ route('welcome') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>


                </div>
            @endif

                <form action="" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal"><center>Add Product</center></h1>

                    <div class="form-floating">
                        <input type="title" name="title" class="form-control" id="title" placeholder="กรุณากรอกชื่อสินค้า">
                        <label for="title">Title :</label>
                        @error('title')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="url_img" name="url_img" class="form-control" id="url_img" placeholder="กรุณากรอกที่อยู่รูปสินค้า">
                        <label for="url_img">Image_url :</label>
                        @error('url_img')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="detail" name="detail" class="form-control" id="detail" placeholder="กรุณากรอกรายละเอียดสินค้า">
                        <label for="detail">Detail :</label>
                        @error('detail')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-floating">
                        <input type="price" name="price" class="form-control" id="price" placeholder="กรุณาระบุราคาสินค้า">
                        <label for="price">Price :</label>
                        @error('price')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <br>

                    <!-- <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                    </div> -->
                        <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
                    
                    <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
                </form>
            </main>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection