<x-nav>
   
    

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Application date
                </th>
                <th scope="col" class="px-6 py-3">
                    Candidate
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$request->pivot->id}}
                </th>
                <td class="px-6 py-4">
                    {{$request->pivot->created_at}}
                </td>
                <td class="px-6 py-4">
                    {{$request->name}}
                </td>
                <td class="px-6 py-4">
                   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-nav>