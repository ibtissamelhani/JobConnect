<x-nav>
    <div class="grid grid-cols-3 gap-4">

        @foreach ($appliedOffers as $offer)
            <a href="#"
                class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                <div class="flex justify-between">
                    <h5 class="mb-2 text-2xl  font-bold tracking-tight text-blue-600 dark:text-white">
                        {{ $offer->title }}</h5>

                    <button id="dropdownMenuIconHorizontalButton-{{ $offer->id }}"
                        data-dropdown-toggle="dropdownDotsHorizontal-{{ $offer->id }}"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 3">
                            <path
                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                    </button>

                </div>
                <p class="font-normal text-gray-700 dark:text-gray-400">Company : {{ $offer->user->company->name }}</p>
                <div>
                    <p class="text-gray-600">
                        duration : {{ $offer->duration }} - {{ $offer->period }}
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li class="text-black font-semibold">Contract : {{ $offer->contract }}</li>
                        <li class="text-black font-semibold">Experience : {{ $offer->experience }}</li>
                        <li class="text-black font-semibold">Domain : {{ $offer->domain->name }}</li>
                    </ul>
                    <p class="text-red-600 mt-4 text-center font-semibold text-lg hover:underline">Salary :
                        {{ $offer->min_salary }} $ - {{ $offer->max_salary }} $ for months</p>
                </div>
            </a>
        @endforeach
    </div>
</x-nav>
