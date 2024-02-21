<!-- TABLE -->
                
<div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto">
    <table class="min-w-max w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                @foreach ($headers as $header => $alignement)
                <th class="py-3 px-6 {{ $alignement}}">{{$header}}</th>
                @endforeach           
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm">
            {{$slot}}
        </tbody>
    </table>
</div>
<!-- END OF TABLE -->
