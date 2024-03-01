@extends('layouts.master2')
@section('content2')
<section>   
    <div class="flex justify-center">
        <div class="w-full md:w-3/5 bg-white p-8 lg:ml-4 shadow-md mt-5">
            <form action="/update" method="post" enctype="multipart/form-data">
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

                <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                    Edit Profil <span class="text-red-600"> </span>
                </label>

                <div class="text-center">
                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ asset('assets/'.$user->picture)}}"
                            class="w-40 h-40 m-auto rounded-full shadow">
                    </div>
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block w-40 h-40 rounded-full m-auto shadow"
                            x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'"
                            style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                        </span>
                    </div>
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                        x-on:click.prevent="$refs.photo.click()">
                        Select New Photo
                    </button>
                </div>
            </div>
            <div class="rounded shadow p-6 mt-4">
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Nama</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Nama Baru" name="nama_lengkap" value="{{ $user->nama_lengkap}}"
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="text" name="integration[shop_name]"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Alamat</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Alamat Baru" name="alamat" value="{{ $user->alamat}}"
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="text" name="integration[shop_name]"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Bio</label>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs">
                            <input placeholder="Bio Baru" name="bio" value="{{ $user->bio}}"
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="text" name="integration[shop_name]"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                        </div>
                    </div>
                </div>
                <button
                    class="mb-2 w-full bg-green-400 p-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Simpan</button>
            </div>


        </div>
        </form>
    </div>
    </section>
    
    @endsection