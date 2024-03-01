@extends('layouts.master2')
@push('cssjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
@section('content2')
  <!-- component -->
  <section class=" mt-3">
    <div class="w-full max-w-sm mx-auto  bg-white border border-gray-200 rounded-lg shadow-xl dark:bg-white ">
      
      <div class="flex justify-end px-4 pt-4">
          <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-500 focus:ring-4 focus:outline-none  dark:focus:ring-blue-400 rounded-lg text-sm p-1.5" type="button">
              <span class="sr-only">Open dropdown</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                  <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
              </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white">
              <ul class="py-2" aria-labelledby="dropdownButton">
              <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-blue-500 dark:text-gray-200 dark:hover:text-white">Edit Profil</a>
              </li>
              </ul>
          </div>
      </div>
      <div class="flex flex-col items-center pb-10">
          <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/logo.png" id="imageUser"/>
          <h5 class=" text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
          <span class="text-sm text-gray-500 dark:text-black font-bold" id="namaUser">Visual Designer</span><span class="text-sm text-gray-500 dark:text-gray-400" id="alamat"></span>
          <span class="text-sm text-gray-500 dark:text-gray-400" id="bio"></span>
         
      </div>
  </div>
  <br>
  <hr>
  
  @csrf
  <div class="grid grid-cols-1 gap-x-6 mt-3 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 px-16" id="exploredata">
    
  </div>
</div>
</div>
</div>



  </section>
@endsection
@push('footerjsexternal')
<script src="/javascript/otherpin.js"></script>
@endpush