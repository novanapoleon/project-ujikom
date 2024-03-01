<nav
class="flex items-center justify-between flex-wrap bg-white py-4 lg:px-12 shadow border-solid border-t-2 border-blue-700">
<div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
    <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
        <span class="font-semibold text-xl tracking-tight">nvnpict</span>
    </div>
    <div class="block lg:hidden ">
        <button
            id="nav"
            class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
</div>

<div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
    <div class="text-md font-bold text-blue-700 lg:flex-grow">
        <a href="/explore"
           class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">
            Home
        </a>
        <a href="/upload"
           class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2 ">
            Upload
        </a>
        <a href="/album"
        class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2">
            Album
     </a>
    </div>
  
    
</div>
<div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
  <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-blue-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 rounded-full" src="{{ asset('/assets/'.$user->picture)}}" alt="user photo">
  </button>
  <!-- Dropdown menu -->
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-white dark:divide-gray-600" id="user-dropdown">
   
     
    <ul class="py-2" aria-labelledby="user-menu-button">
     
      <li>
        <a href="/mypin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-blue-600 dark:text-black dark:hover:text-white">Profile</a>
      </li>
      <li>
        <a href="/changepassword" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-blue-600 dark:text-black dark:hover:text-white">ChangePassword</a>
      </li>
      <li>
        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:zbg-gray-100 dark:hover:bg-blue-600 dark:text-black dark:hover:text-white">Log Out</a>
      </li>
     
    </ul>
  </div>
</div>

</nav>