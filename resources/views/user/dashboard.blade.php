<x-app-layout>

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
