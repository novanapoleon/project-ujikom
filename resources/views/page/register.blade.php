@extends('layouts.master')

@section('content')
<section class="flex justify-center p-8">
    <div class="box-content h-99 w-80 p-4 shadow-xl justify-center">
    @if ($message = Session::get('success'))
    <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      <span class="sr-only">Info</span>
                      <div class="text-sm font-medium ms-3">
                       {{$message}}
                      </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                      </button>
                    </div>
                    @endif
    <form action="/registered" method="POST">
      @csrf
        <div class="text-center">
          Registrasi
        </div> 
    <div>

          <label for="email" class="text-black font-dm ml-10">Email</label>
          <div>
          <input type="text" name="email" id="email"
          class="border-2 mb-3 border-gray-400 px-3 rounded-md w-60 py-2 ml-10">
        </div>
      </div>
      <div>
        <label for="password" class="text-black font-dm ml-10">Password</label>
        <div>
        <input type="password" name="password" id="password"
        class="border-2 mb-3 border-gray-400 px-3 rounded-md w-60 py-2 ml-10">
      </div>
      <div>
        <label for="date" class="text-black font-dm ml-10">Tanggal</label>
        <div>
        <input type="date" name="tgl_lahir" id="date"
        class="border-2 mb-3 border-gray-400 px-3 rounded-md w-60 py-2 ml-10">
      </div>
      <div>
        <button type="submit"class="bg-blue-900 mb-3 text-white px-4 py-2 rounded-full w-60 ml-10">Registrasi</button>
        
      </div>
    </div>
      </form>
      <p class="mt-3 text-sm mb-6 text-center">Sudah punya accoun, silahkan klik <a class="text-blue-600" href="login.html">disini</a></p>
    </div>
    
  </section>
  @endsection
