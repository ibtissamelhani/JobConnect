<x-nav>

    <div class=" grid  relative p-4 grid-cols-3 gap-4">
        <div>
            <div class="sticky top-5  border-r-2 pr-4 z-10">
                @auth
                    @can('create', App\Models\Offer::class)
                        <a href="{{ route('agent.offers.create') }}"
                            class="inline-flex items-center justify-center mb-8 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <span class="w-full">create a new offres</span>
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    @endcan
                @endauth

                {{-- search form start --}}

                <form class="max-w-md mx-auto pb-4" action="{{route('offers.search')}} " method="GET" id="searchForm">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="keyword" name="keyword"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search by offers title, cities, domains "  />

                            <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                {{-- search form end --}}

                <div class="flex flex-wrap py-10 border-y">
                    @foreach ($domains as $domain)
                        <a href=""
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-gray-300 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">{{ $domain->name }}</a>
                    @endforeach
                </div>
                <div class="flex flex-col  flex-wrap gap-6 py-10">
                    @foreach ($cities as $city)
                        <a href="#"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-500">
                            <svg class="w-4 h-4 ms-2 rtl:rotate-180 mr-4" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            {{ $city->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class=" col-span-2 searchResults">
            @foreach ($offers as $offer)
                <div class="bg-white shadow rounded-lg py-4 px-14 my-4 ">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <img src="{{ $offer->user->company->getFirstMediaUrl('logos') }}" alt="Company logo"
                                class="h-12 w-12 mr-4">
                            <div>
                                <h2 class="text-xl font-bold text-gray-900">{{ $offer->title }} </h2>
                                <p class="text-gray-600">{{ $offer->user->company->name }} - {{ $offer->city->name }}
                                </p>
                            </div>
                        </div>
                        <div>
                            @auth
                                @if (Auth::user()->roles->contains('name', 'User'))
                                    <a href="{{route('user.offerUser.create', $offer->id)}}" 
                                        class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <img src="{{ asset('images/logo.png') }}" class="w8- h-8 me-3" alt="">
                                        <span class="w-full">Apply Now</span>
                                        <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                @endif
                                @can(['update', 'delete'], $offer)
                                    <button id="dropdownMenuIconHorizontalButton-{{ $offer->id }}"
                                        data-dropdown-toggle="dropdownDotsHorizontal-{{ $offer->id }}"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownDotsHorizontal-{{ $offer->id }}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownMenuIconHorizontalButton-{{ $offer->id }}">
                                            <li>
                                                <a href="{{ route('agent.offers.edit', $offer->id) }}"
                                                    class="block px-4 py-2 text-md font-semibold text-yellow-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit
                                                    offer</a>
                                            </li>

                                        </ul>
                                        <div class="py-2">
                                            <form action="{{ route('agent.offers.destroy', $offer->id) }}" method="post"
                                                class="hover:bg-gray-100">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    class="block px-4 py-2 text-md font-semibold text-red-700  dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                    Delete offer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            @endauth

                        </div>
                    </div>

                    <div class="mt-4 px-20">
                        <p class="text-gray-600">
                            duration : {{ $offer->duration }} - {{ $offer->period }}
                        </p>
                        <ul class="list-disc list-inside text-gray-600 mt-2">
                            <li class="text-black font-semibold">Contract : {{ $offer->contract }}</li>
                            <li class="text-black font-semibold">Experience : {{ $offer->experience }}</li>
                            <li class="text-black font-semibold">domain : {{ $offer->domain->name }}</li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 font-semibold text-lg hover:underline">Salary :
                            {{ $offer->min_salary }} $ - {{ $offer->max_salary }} $ for months</a>
                    </div>
                    <div class="flex justify-between mt-4">
                        <p class="text-gray-600">
                            • {{ $offer->description }}
                        </p>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-green-400">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                            </svg>
                            {{ $offer->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
    <script>
        document.getElementById('keyword').addEventListener('keyup', async function(){
            let query = this.value;
            const offersContainer = document.querySelector('.searchResults');
            const response = await fetch('/offers/search?keyword=' + query);

            if (response.ok) {
                const jsonData = await response.json();
               
                
                let html = '';
                jsonData.forEach(offer => {
                    html += `
                    <div class="bg-white shadow rounded-lg py-4 px-14 my-4">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <img src="${offer.logo}" alt="Company logo" class="h-12 w-12 mr-4">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">${offer.title}</h2>
                                    <p class="text-gray-600">${offer.user.company.name} - ${offer.city.name}</p>
                                </div>
                            </div>

                            @auth
                            @if (Auth::user()->roles->contains('name', 'User'))
                                <a  href="{{ route('user.offerUser.create', $offer->id) }}" class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <img src="{{ asset('images/logo.png') }}" class="w-8 h-8 me-3" alt="">
                                    <span class="w-full">Apply Now</span>
                                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @endif
                            @endauth
                            


                           

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal-${offer.id}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton-${offer.id}">
                                    <li>
                                        <a href="/agent/offers/edit/${offer.id}" class="block px-4 py-2 text-md font-semibold text-yellow-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit offer</a>
                                    </li>
                                </ul>
                                <div class="py-2">
                                    <form action="/agent/offers/destroy/${offer.id}" method="post" class="hover:bg-gray-100">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="block px-4 py-2 text-md font-semibold text-red-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete offer</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 px-20">
                        <p class="text-gray-600">
                            duration : ${offer.duration} - ${offer.period}
                        </p>
                        <ul class="list-disc list-inside text-gray-600 mt-2">
                            <li class="text-black font-semibold">Contract : ${offer.contract}</li>
                            <li class="text-black font-semibold">Experience : ${offer.experience}</li>
                            <li class="text-black font-semibold">domain : ${offer.domain.name }</li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 font-semibold text-lg hover:underline">Salary :
                            ${offer.min_salary} $ - ${offer.max_salary} $ for months</a>
                    </div>
                    <div class="flex justify-between mt-4">
                        <p class="text-gray-600">
                            • ${offer.description}
                        </p>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-green-400">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                            </svg>
                            ${offer.created_at_diff}
                        </span>
                    </div>
                </div>
                </div>
                    `;
                });
                offersContainer.innerHTML = html;

                
            }
        });
    </script>
    
    

    
    
</x-nav>
