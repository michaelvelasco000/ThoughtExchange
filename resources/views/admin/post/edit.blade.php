<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
           
                
        
                    @if(Session::has('error'))
                    <div role='alert'>
                        {{Session::get('error')}}
                    </div>
                    @endif
              

                    <form action="{{route ('admin/post/update',$post->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="page">
                                            <div class="margin"></div>
                                            
                                            <h1 class="text-gray-700 text-2xl font-bold">Caption:</h1>
                                            @error('title')
                                            <span class="text-red-500">{{$message}}</span>
                                            @enderror
                                            <div class="flex"> 
                                                <p class="text-dark-500">--></p>
                                                <textarea type="text" style="height: min-content;" class="w-11/12 text-black bg-transparent border-0 focus:outline-none focus:ring-0" name="title" >{{ $post->title}} 
                                                   
                                                </textarea>   
                                            </div>
                                          
                                            <h1 class="text-gray-700 text-2xl font-bold">Description:</h1>
                                            @error('description')
                                            <span class="text-red-500">{{$message}}</span>
                                            @enderror
                                            <div class="flex"> 
                                                <p class="text-dark-500">--></p>
                                                <textarea type="text" style="min-height: 100px;" class="w-11/12 text-black bg-transparent border-0 focus:outline-none focus:ring-0" name="description" >{{ $post->description}} 
                                                </textarea>   
                                            </div>
                                            <input value="{{ Auth()->user()->id}}" type="text" name="userId" id="" hidden>
                                            <div class="flex justify-end">
                                                <button class="border-black border-2 p-1 rounded-lg flex items-center gap-2 text-red-500"> Update</button>
                                                <button class="border-black border-2 p-1 rounded-lg flex items-center gap-2 text-red-500"> 
                                                <a  href="{{route('admin/post')}}">Back</a></button>
                                            </div>
                                            
                                          </div>
                                    </div>
                                </div>
                              
                               
                            </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>