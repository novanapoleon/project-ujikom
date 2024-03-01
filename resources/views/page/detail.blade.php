@extends('layouts.master2')
@push('cssjsexternal')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('content2')
<section>
  @csrf
<div class="mb-4 break-inside p-10 rounded-xl bg-white bg-slate-500 flex flex-col bg-clip-border w-1/2 mx-auto mt-8">
    <div class="flex pb-6 items-center justify-between">
      <div class="flex flex-row items-center">
        <a class="inline-block mr-4" href="#">
          <img id="picture" class="rounded-full max-w-none w-14 h-14" src="" />
        </a>
        <div class="flex flex-col">
          <div class="flex items-center">
            <a class="inline-block text-lg font-bold mr-2" id="username"></a>
            <span>
              <svg class="fill-blue-500 dark:fill-slate-50 w-5 h-5" viewBox="0 0 24 24">
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="">
      <a class="flex-[]" href="#">
        <img  class=" w-full max-[480px]:w-full rounded-lg" id="fotodetail"
         src="" />
      </a>
    </div>
    <a class="inline-block text-lg font-bold mr-2" href="#" id="judulfoto"></a>
    <p id="deskripsifoto"> 
    </p>
    <div class="py-4">
      <a class="inline-flex items-center" href="#">
        <span class="mr-2">
          <svg class="" style="width: 24px; height: 2px;" viewBox="0 0 24 24">
          </svg>
        </span>
      </a>
    </div>
   
    <!-- Comments content -->
    <div class="pt-2 overflow-y-scroll h-52" id="listkomentar">
     
      <!-- comments row -->
      
      <!-- End comments row -->
    </div>
    <div class="relative py-3">
      <input
        class="pt-2 pb-2 pl-3 w-full h-11 bg-slate-100 dark:bg-blue-400 rounded-lg placeholder:text-slate-600 dark:placeholder:text-white font-medium pr-20 "
        type="text" placeholder="Write a comment" name="isi_komentar">
      <button class="flex absolute right-3 top-2/4 -mt-3 items-center" onclick="kirimkomentar()">
        <svg class="fill-blue-500 dark:fill-slate-50 " style="width: 24px; height: 24px;" viewBox="0 0 24 24">
          <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
        </svg>
      </button>
    </div>
    <!-- End Comments content -->
  </div>
</section>
@endsection
@push('footerjsexternal')
<script src="/javascript/detail.js"></script>
@endpush