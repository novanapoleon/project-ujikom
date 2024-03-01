@extends('layouts.master2')
@section('content2')
<section>
<div class="relative min-h-screen flex items-center justify-center bg-center  py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover "
        style="background-image: url(https://images.unsplash.com/photo-1532423622396-10a3f979251a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-2xl mr-auto mx-auto">Upload</h2>
                    </div>
                    
                   <form action="/upload/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 w-full text-xs py-3">
                            <label class="font-semibold text-gray-600 py-2">Judul</label>
                            <input placeholder="isi"
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                required="required" type="text" name="judul_foto"
                                id="integration_shop_name">
                            <p class="text-red text-xs hidden">isi disini</p>
                        </div>

                    </div>
                    <div class="mb-3 space-y-2 w-full text-xs">
                        <label class="font-semibold text-gray-600 py-2">Unggah</label>
                        <div class="extraOutline p-4 bg-white w-max bg-whtie m-auto">
                            <div class="file_upload p-5 relative border-4 border-dotted border-gray-300 rounded-lg" style="width: 300px">
                                <svg class="text-indigo-500 w-24 mx-auto mb-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" /></svg>
                                <div class="input_field flex flex-col w-max mx-auto text-center">
                                    <label>
                                        <input class="text-sm cursor-pointer w-36 hidden" name="url" type="file" multiple />
                                        <div class="text bg-indigo-600 text-white border border-gray-300 rounded font-semibold cursor-pointer p-1 px-3 hover:bg-indigo-500">Select</div>
                                    </label>
                    
                                    <div class="title text-indigo-500 uppercase">isi disini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Album</label>
                      <select name="album"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option selected>Pilih album</option>
                     @foreach ($albums as $album )
                        <option value="{{$album->id}}">{{$album->nama_album}}</option>
                        @endforeach
                        </select>
                <div class="flex-auto w-full mb-1 text-xs">
                    <label class="font-semibold text-gray-600">Deskripsi</label>
                    <textarea required="" name="deskripsi_foto" id="message"
                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                        placeholder="isi" spellcheck="false"></textarea>
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
</section>
@endsection