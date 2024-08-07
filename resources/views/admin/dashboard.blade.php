<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden ">
                <div class="p-6 text-gray-900 dark:text-gray-100" style=" display: flex;justify-content: space-between;">
                </div>
                  
                   
                            @forelse ($posts as $post)
                                <div class="page">
                                    <div class="margin"></div>
                                        <div style=" display: flex;  justify-content: space-between;">
                                            <div style=" display: flex;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                </svg>
                                                <h1 class="capitalize">
                                                    {{$post->name}}
                                                </h1>
                                            </div>

                                            <div>
                                                <a href="{{route('admin/post/delete',['id'=>$post->id])}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                      </svg></a>
                                            </div>
                                        </div>
                                    
                                        <h1>
                                        <b><--{{$post->title}} --></b> 
                                        </h1>
                                        <br>
                                        
                                        <p>
                                            {{$post->description}} 
                                        </p>
                              </div>
                              <br>
                            @empty
                            <div class="page">
                                <div class="margin"></div>
                                <div style=" display: flex;  justify-content: space-between;">
                                 <p>
                                    <b><-- Post Not Found --></b>
                                 </p>
                              </div>
                                  
                            </div> 
                            @endforelse
                    
            </div>
        </div>
    </div>
</x-app-layout>
