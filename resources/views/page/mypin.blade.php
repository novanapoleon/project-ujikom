@extends('layouts.master2')
@section('content2')
<section class=" mt-3">
    <div class="w-full max-w-sm mx-auto  bg-white border border-gray-200 rounded-lg shadow-xl dark:bg-white ">
      <div class="flex flex-col items-center py-4 pb-10">
          <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('assets/'.$user->picture)}}" alt="Bonnie image"/>
          <span class="text-sm text-gray-500 dark:text-black text-xl font-bold">{{ $user->nama_lengkap}}</span>
          <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->alamat}}</span>
          <span class="text-sm mb-5 text-center text-gray-500 text-black">{{ $user->bio}}</span>
          <a href="/editprofil"
           class="block lg:inline-block lg:mt-0 text-white px-4 py-2 rounded bg-blue-700 mr-2 text-sm">
            Edit Profil
        </a>
      </div>
  </div>
  <br>
  <hr>
  <div class="grid grid-cols-1 gap-x-6 mt-3 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 px-16 mb-4">
    @foreach($foto as $f)
                <a href="#" class="group bg-white shadow-xl rounded-sm hover:shadow-xl">
                  <div class="w-[280px] h-[280px] aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/'.$f->url)}}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                  </div>
                  <div class="flex flex-wrap items-center justify-between px-2">
                    <div>
                        <div class="flex flex-col mt-2 mb-2">
                            <div>
                                {{ $f->judul_foto }}
                            </div>
                        </div>
                    </div>
                    
                </div>
                </a>
@endforeach
              
              </div>
  
    </section>
    @endsection