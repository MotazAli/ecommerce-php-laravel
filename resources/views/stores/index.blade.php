<x-layouts.app>
    <div class="store-container">

        @foreach ($stores as $store)
            <a href="{{url('/stores'.'/'.$store['id'])}}" class="store-card_container" >
                @csrf
                <div >
                    <img src="{{url('assets/images/'.$store['image'])}}" class="store-card_container_image" alt="{{$store['title']}}" />
                    <div class="store-card_container_image_overlay_shadow"></div>
                    <h3 class="store-card_container_title">
                        {{$store['title']}}
                    </h3>
                </div>
            </a>
        @endforeach
        
    </div>
</x-layouts.app>