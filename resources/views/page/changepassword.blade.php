@extends('layouts.master2')
@section('content2')
<section class="mt-32">
<div class="flex justify-center">
        <div class="w-full md:w-3/5 bg-white p-8 lg:ml-4 shadow-md mt-5">
            <form action="/updatepassword" method="post">
                @csrf
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                <!-- Photo File Input -->
                <input name="pictur" type="file" class="hidden" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                ">

                <label class="block text-gray-700 text-xl font-bold mb-2 text-center" for="photo">
                    Ubah Password <span class="text-red-600"> </span>
                </label>
                <div class="text-center">
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block w-40 h-40 rounded-full m-auto shadow"
                            x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'"
                            style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                        </span>
                    </div>
                </div>
            </div>
            <div class="rounded shadow p-6 mt-4">
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Old Password</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Wajib Di Isi" name="old_password" 
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="password"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">New Password</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Wajib Di Isi" name="new_password" 
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="password" 
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Confirm Password</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Wajib Di Isi" name="confirm_password" 
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="password"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <button
                  type="submit"  class="mb-2 w-full bg-green-400 p-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Simpan</button>
            </div>
        </div>
        </form>
    </div>
    </section>
    @endsection