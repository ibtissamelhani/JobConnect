<x-nav>
    <div class="grid p-4 grid-cols-2 gap-4">

        @foreach ($userOffers as $userOffer)
            <div class="bg-white shadow rounded-lg py-4 px-14 my-4">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img src="{{ $userOffer->user->company->getFirstMediaUrl('logos') }}" alt="Company logo"
                            class="h-12 w-12 mr-4">
                        <div>
                            <h2 class="text-xl font-bold text-gray-900">{{ $userOffer->title }} </h2>
                            <p class="text-gray-600">{{ $userOffer->user->company->name }} - {{ $userOffer->city->name }}
                            </p>
                        </div>
                    </div>
                    <div>

                        <button id="dropdownMenuIconHorizontalButton-{{ $userOffer->id }}"
                            data-dropdown-toggle="dropdownDotsHorizontal-{{ $userOffer->id }}"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 16 3">
                                <path
                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDotsHorizontal-{{ $userOffer->id }}"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton-{{ $userOffer->id }}">
                                <li>
                                    <a href="{{ route('agent.offers.edit', $userOffer->id) }}"
                                        class="block px-4 py-2 text-md font-semibold text-yellow-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit
                                        offer</a>
                                </li>

                            </ul>
                            <div class="py-2">
                                <form action="{{ route('agent.offers.destroy', $userOffer->id) }}" method="post"
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

                    </div>
                </div>

                <div class="mt-4 px-20">
                    <p class="text-gray-600">
                        duration : {{ $userOffer->duration }} - {{ $userOffer->period }}
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li class="text-black font-semibold">Contract : {{ $userOffer->contract }}</li>
                        <li class="text-black font-semibold">Experience : {{ $userOffer->experience }}</li>
                        <li class="text-black font-semibold">domain : {{ $userOffer->domain->name }}</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 font-semibold text-lg hover:underline">Salary :
                        {{ $userOffer->min_salary }} $ - {{ $userOffer->max_salary }} $ for months</a>
                </div>
                <div class="flex justify-between mt-4">
                    <p class="text-gray-600">
                        • {{ $userOffer->description }}
                    </p>
                    <div class="flex flex-col gap-4">
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500 ">
                            status:
                            @foreach ($STATUS as $key => $value)
                                @if ($userOffer->status == $key)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </span>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-green-400">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                            </svg>
                            {{ $userOffer->created_at->diffForHumans() }}
                        </span>
                    </div>

                </div>
            </div>
        @endforeach


    </div>
</x-nav>
