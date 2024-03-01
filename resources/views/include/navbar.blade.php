<nav
  class="relative flex w-full flex-wrap items-center justify-between bg-white py-2 text-black shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-3 ml-20 mr-20">
    <div>
      <a
        class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
        href="#">
        <img src="/assets/logo.png"
          class="mr-2"
          style="height: 40px"
          alt="TE Logo"
          loading="lazy" />
      </a>
    </div>
  
    <!-- Hamburger button for mobile view -->
   
    <!-- Collapsible navbar container -->
    <div
      class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
      id="navbarSupportedContent4"
      data-te-collapse-item>
      <!-- Left links -->
      <ul
        class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
        data-te-navbar-nav-ref>
        <!-- Home link -->
        
      </ul>
  
      <div class="flex items-center">
        <button
          type="button"
          data-te-ripple-init
          data-te-ripple-color="light"
          class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out
           hover:bg-blue-600 hover:text-white focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
         <a href="/login"> Login </a>
        </button>
      
      </div>
      <div class="flex items-center">
          <button
            type="button"
            data-te-ripple-init
            data-te-ripple-color="light"
            class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-blue-600 hover:text-white focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
            <a href="/register"> Register </a>
          </button>
        
        </div>
    </div>
  </div>
  </nav> 