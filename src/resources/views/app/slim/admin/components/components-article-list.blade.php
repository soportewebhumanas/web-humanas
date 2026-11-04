<ul id="sortable" class="col-12">
    @foreach ($components as $component)
    @switch($component->type)
                                    @case(1)
                                        @include('admin.components.image')
                                        @break
                                    @case(2)
                                        @include('admin.components.image-link')
                                        @break
                                    @case(4)
                                        @include('admin.components.video')
                                        @break
                                        
                                    @case(5)
                                        @include('admin.components.title')
                                        @break

                                    @case(6)
                                        @include('admin.components.products')
                                        @break
                                    
                                    @case(7)
                                        @include('admin.components.galery')
                                        @break

                                    @case(8)
                                        @include('admin.components.text-article')
                                        @break
                                    @default
                                @endswitch

    @endforeach
</ul>