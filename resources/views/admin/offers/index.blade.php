@extends('layouts.admin.dashboard')
@section('title','Job offers table')
@section('content')
 <!-- PAGE CONTENT -->
 <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
    <div class="md:hidden justify-between items-center bg-black text-white flex">
        <h1 class="text-2xl font-bold px-4">JobConnect</h1>
        <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
            <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>
    <section class="max-w-7xl mx-auto py-4 px-5">
        <div class="flex justify-between items-center border-b border-gray-300">
            <h1 class="text-2xl font-semibold pt-2 pb-6">Job Offers</h1>
        </div>

            <!-- STATISTICS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 py-6">
                <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                    <div class="space-y-2">
                        <p class="text-xs text-gray-400 uppercase">Job offers</p>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">{{$offerCount}}</h1>
                            <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+4.5</p>
                        </div>
                    </div>
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3v4a1 1 0 0 0 1 1h4 M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5 M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0  M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>
                </div>
    
                <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                    <div class="space-y-2">
                        <p class="text-xs text-gray-400 uppercase">Users</p>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">{{$userCount}}</h1>
                            <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+7.4</p>
                        </div>
                    </div>
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>                    
                </div>
    
                <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                    <div class="space-y-2">
                        <p class="text-xs text-gray-400 uppercase">Cities</p>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">{{$cityCount}}</h1>
                            <p class="text-xs bg-red-50 text-red-500 px-1 rounded">-2.9</p>
                        </div>
                    </div>
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8 M13 7l0 .01 M17 7l0 .01 M17 11l0 .01 M17 15l0 .01"></path></svg>
                </div>
    
                <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                    <div class="space-y-2">
                        <p class="text-xs text-gray-400 uppercase">Domains</p>
                        <div class="flex items-center space-x-2">
                            <h1 class="text-xl font-semibold">{{$domainCount}}</h1>
                            <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+3.1</p>
                        </div>
                    </div>
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3 M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3 M15 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg>
                </div>
            </div>
            <!-- END OF STATISTICS -->

        {{-- table component --}}
        <x-admin.table :headers="['Title'=>'text-left','Contract'=>'text-left','Min_salary' =>'text-center','Max_salary' =>'text-center', 'Duration' => 'text-center','Experience'=>'text-center','City'=>'text-center','Status'=>'text-center','Action'=>'text-center']" >

        @foreach($offers as $offer) 

        <tr class="border-b border-gray-200 hover:bg-gray-100">
                        
        <td class="py-3 px-6 text-left whitespace-nowrap">
                {{$offer->title}}
            
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->contract}}
        
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->min_salary}}
      
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->max_salary}}
       
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->duration}}
       
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->experience}}
        </td>

        <td class="py-3 px-6 text-left whitespace-nowrap">
            {{$offer->city->name}}
        </td>

        <td class="py-3 px-6 text-center">
            @if($offer->status == 1)
                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs"> {{$offer->getstatus()}}</span>
            @endif

            @if($offer->status == 2)
                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"> {{$offer->getstatus()}}</span>
            
            @endif
            
        </td>
        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                
                {{-- offer status update --}}

                <form action="{{route('admin.offers.updateStatus',['offer' => $offer->id ])}}" method="POST">
                    @csrf
                <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                    </svg>
                </button>
                </form>

               {{-- delete offer --}}
               <form action="{{route('admin.offers.delete',['offer'=>$offer->id])}}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach

   
    </x-admin.table>   
    </section>
    <!-- END OF PAGE CONTENT -->
</main>
@endsection
@section('user')