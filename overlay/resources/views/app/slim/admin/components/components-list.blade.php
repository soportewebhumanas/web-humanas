<ul id="sortable" class="col-12">
    @foreach ($user->company->page->components as $component)
    @switch($component->type)
                                    @case(1)
                                        @include('admin.components.company-page.image')
                                        @break
                                    @case(2)
                                        @include('admin.components.company-page.image-link')
                                        @break
                                    @case(3)
                                        @include('admin.components.company-page.text')
                                        @break
                                    
                                    @case(4)
                                        @include('admin.components.company-page.video')
                                        @break
                                        
                                    @case(5)
                                        @include('admin.components.company-page.title')
                                        @break

                                    @case(6)
                                        @include('admin.components.company-page.products')
                                        @break
                                    
                                    @case(7)
                                        @include('admin.components.company-page.galery')
                                        @break
                                    @default
                                @endswitch

    @endforeach
</ul>