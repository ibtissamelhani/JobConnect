<x-nav>
    <div class="p-6 sm:p-12 border-x text-black">
        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
            <img src="{{ $company->getFirstMediaUrl('logos') }}" alt=""
                class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start bg-gray-500 border-gray-700">
            <div class="flex flex-col">
                <h4 class="text-lg font-semibold text-center md:text-left">{{ $company->name }}</h4>
                <p class="text-gray-400">{{ $company->description }}</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 pt-10">
            <h4 class="text-md text-blue-600 font-medium text-center md:text-left">Domain : <span
                    class="text-gray-800">{{ $company->field }}</span></h4>
            <h4 class="text-md text-blue-600 font-medium text-center md:text-left">Phone : <span
                    class="text-gray-800">{{ $company->phone }}</span></h4>
            <h4 class="text-md text-blue-600 font-medium text-center md:text-left">address : <span
                    class="text-gray-800">{{ $company->adress }}</span></h4>
            <h4 class="text-md text-blue-600 font-medium text-center md:text-left">Number of Employees : <span
                    class="text-gray-800">{{ $numberOfUsers }}</span></h4>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="lg:w-2/3 mx-auto">
                    <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
                        <img alt="gallery"
                            class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                            src="https://dummyimage.com/820x340">
                    </div>
                    <div class="flex flex-wrap -mx-2">
                        <div class="px-2 w-1/2">
                            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                                    src="https://dummyimage.com/542x460">
                            </div>
                        </div>
                        <div class="px-2 w-1/2">
                            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                                <img alt="gallery"
                                    class="w-full object-cover h-full object-center block opacity-25 absolute inset-0"
                                    src="https://dummyimage.com/542x420">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex justify-end">
            <a href="{{route('agent.company.edit', $company->id)}}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
        </div>
        <div class="flex justify-center pt-4 space-x-4 align-center">
            <a rel="noopener noreferrer" href="#" aria-label="Dribble"
                class="p-2 rounded-md text-black hover:text-blue-400">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current">
                    <path
                        d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z">
                    </path>
                </svg>
            </a>
            <a rel="noopener noreferrer" href="#" aria-label="Twitter"
                class="p-2 rounded-md text-black hover:text-blue-400">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current">
                    <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                </svg>
            </a>
            <a rel="noopener noreferrer" href="#" aria-label="Email"
                class="p-2 rounded-md text-black hover:text-blue-400">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current">
                    <path
                        d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</x-nav>
