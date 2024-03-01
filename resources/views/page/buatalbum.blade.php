@extends('layouts.master2')
@section('content2')
<div class="relative min-h-screen flex items-center justify-center bg-center  py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover "
        style="background-image: url(https://images.unsplash.com/photo-1532423622396-10a3f979251a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-2xl mr-auto mx-auto">Buat Album</h2>
                    </div>
                    <form action="/buat-album" method="POST" enctype="multipart/form-data">
                   @csrf
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-2 w-full text-xs py-3">
                            <label class="font-semibold text-gray-600 py-2">Nama Album</label>
                            <input placeholder="isi" 
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="text" name="nama_album"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">isi disini</p>
                        </div>
                    </div>
                    <div class="mb-3 w-full text-xs py-3">
                        <label class="font-semibold text-gray-600 py-2">Unggah</label>
                        <input placeholder="isi"
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter "
                            required="required" type="file" name="foto"
                            id="integration_shop_name">
                        <p class="text-red text-xs hidden">isi disini</p>
                    </div>
                <div class="flex-auto w-full mb-1 text-xs">
                    <label class="font-semibold text-gray-600">Deskripsi</label>
                    <input required="" name="deskripsi" id=""
                        class="w-full  appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                        placeholder="isi" spellcheck="false"></input>
                </div>

                <div class="text-right md:space-x-3 md:block flex flex-col-reverse">
                    <button
                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                        Cancel </button>
                    <button
                        class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Upload</button>
                </div>
        </form> 
            </div>
        </div>
    </div>
    </div>
    @endsection