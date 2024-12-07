<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="relative overflow-hidden bg-white rounded-lg">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h3 class="text-2xl tracking-tight text-gray-900 sm:text-4xl">Hello Everyone, I am</h3>
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Ahmad Maulana Subandrio.</h1>
              <p class="mt-2 text-xl text-gray-500">welcome to my personal website portofolio.</p>
            </div>
            <div>
              <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                      </div>
                      <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                      </div>
                      <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ asset('assets/profile.jpg') }}" alt="" class="size-full object-cover">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <a href="#" class="inline-block rounded-md border border-transparent bg-sky-600 px-8 py-3 text-center font-medium text-white hover:bg-sky-700">Let's go &raquo;</a>
              </div>
            </div>
          </div>
        </div>
    </div>      
</x-layout>