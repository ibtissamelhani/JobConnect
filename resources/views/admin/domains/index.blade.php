@extends('layouts.admin.dashboard')
@section('title','Domains table')
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
            <h1 class="text-2xl font-semibold pt-2 pb-6">Dashboard</h1>
        </div>

        <!-- STATISTICS -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 py-6">
            <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                <div class="space-y-2">
                    <p class="text-xs text-gray-400 uppercase">Value</p>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-xl font-semibold">$13,500</h1>
                        <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+4.5</p>
                    </div>
                </div>
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>

            <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                <div class="space-y-2">
                    <p class="text-xs text-gray-400 uppercase">Users</p>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-xl font-semibold">819</h1>
                        <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+7.4</p>
                    </div>
                </div>
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>                    
            </div>

            <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                <div class="space-y-2">
                    <p class="text-xs text-gray-400 uppercase">Orders</p>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-xl font-semibold">121</h1>
                        <p class="text-xs bg-red-50 text-red-500 px-1 rounded">-2.9</p>
                    </div>
                </div>
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>

            <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                <div class="space-y-2">
                    <p class="text-xs text-gray-400 uppercase">Tickets</p>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-xl font-semibold">243</h1>
                        <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+3.1</p>
                    </div>
                </div>
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
            </div>
        </div>
        <!-- END OF STATISTICS -->

              {{-- Add button --}}
        <div class="flex justify-end">
            <button type="button" class="flex items-center justify-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 " data-modal-target="create-modal" data-modal-toggle="create-modal"  > 
                <span>Add</span>
                <svg class="w-5 h-5 ml-2 align-baseline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v14M5 12h14"/>
                </svg>
            </button>
        </div>
        {{-- create modal component --}}

        <x-admin.create-modal :title="'Add domain'" :route="route('admin.domains.store')"/>

        {{-- table component --}}
        <x-admin.table :headers="['Id'=>'text-left','Name'=>'text-center','Action'=>'text-center']" >

        @foreach($domains as $domain)

        <tr class="border-b border-gray-200 hover:bg-gray-100">               
        <td class="py-3 px-6 text-left whitespace-nowrap">
                {{$domain->id}}
            </div>
        </td>
        
   
        <td class="py-3 px-6 text-center">
            {{$domain->name}}
        </td>
    
        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>

                {{-- edit button --}}
                
                <a  type="button" data-modal-target="update-modal-{{$domain->id}}" data-modal-toggle="update-modal-{{$domain->id}}" >
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                </a>

                {{-- update modal component --}}

                <x-admin.update-modal :title="'Update domain name'" :entity="$domain" :route="route('admin.domains.update',['domain'=>$domain->id])" />

                {{-- delete button --}}

                <form action="{{ route('admin.domains.destroy', ['domain' => $domain->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer" aria-label="Delete Domain">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
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