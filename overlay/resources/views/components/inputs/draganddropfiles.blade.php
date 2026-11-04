@props([
    'name',
    'label',
    'archivos',
])

<div x-data='dataFileDnD()'>
    <div class="mb-1">
        @if($label ?? null)
            @include('components.inputs.partials.label')
        @endif    
    </div>
    <div class="bg-white p7 rounded w-12/12 mx-auto">
        <div  class="relative flex flex-col p-4 text-gray-400 ">
            <div x-ref="dnd"
                class="relative flex flex-col text-gray-400 border border-gray-300 hover:border-purple-600 border-dashed rounded cursor-pointer">
                <input accept="*" type="file" id="{{$name}}" name="{{$name.'[]'}}" multiple
                    class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer group-hover:text-purple-600"
                    @change="addFiles($event)"
                    @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                    @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                    @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                    title="" />
        
                <div class="flex flex-col items-center justify-center py-10 text-center hover:text-purple-600">

                    <p class="m-0">Suelta los archivos aquí o cliquea para seleccionarlos.</p>
                </div>
            </div>

            <template x-if="files.length > 0">
                <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                   
                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                    
                    <template x-for="(_, index) in Array.from({ length: files.length })">
                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                            style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                            :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                            <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                            <template x-if="files[index].type.includes('audio/')">
                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                </svg>
                            </template>
                            <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </template>
                            <template x-if="files[index].type.includes('image/')">
                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                    x-bind:src="loadFile(files[index])" />
                            </template>
                            <template x-if="files[index].type.includes('video/')">
                                <video
                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                </video>
                            </template>
        
                            <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                <span class="w-full font-bold text-gray-900 truncate"
                                    x-text="files[index].name">Loading</span>
                                <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                            </div>
        
                            <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                @dragleave="fileDropping = null"
                                :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>

        <script src="https://unpkg.com/create-file-list"></script>
    </div>

    <div>
        <p class="font-mono text-center text-gray-400 hover:text-gray-700"> Cargar nuevos archivos, eliminará los existentes. Si desea conservarlos debe volver a subirlos.</p>
        <span class="label font-medium text-gray-700">
            Archivos cargados previamente:
        </span>
        <ul class="ml-8 mt-2 bg-rose-200">
            @foreach ( json_decode(htmlspecialchars_decode($archivos)) as $key => $archivo)
                @if ( !is_array($archivo) || count($archivo) > 0)                    
                    <li class="mb-4">
                        <a class="" target="blank"  href="{{Storage::disk('public')->url($archivo)}}">{{$key+1}})<span class="hover:text-blue-300 flex-1 button ring-2 ring-yellow-500 ring-opacity-50 ml-3">
                            Descargar 
                        </span>
                        </a>    
                    </li>
                @endif
            @endforeach
        </ul>
        
    </div>
    @error($name)
        @include('components.inputs.partials.error')
    @enderror
</div>

@push('scripts')
    <script>
        function dataFileDnD() {
            return {
                files: [],
                input: document.querySelector('{{"#".$name}}'),
                fileDragging: null,
                fileDropping: null,
                humanFileSize(size) {
                    const i = Math.floor(Math.log(size) / Math.log(1024));
                    return (
                        (size / Math.pow(1024, i)).toFixed(2) * 1 +
                        " " +
                        ["B", "kB", "MB", "GB", "TB"][i]
                    );
                },
                remove(index) {
                    let files = [...this.files];
                    files.splice(index, 1);
        
                    this.files = createFileList(files);
                    this.input.files = this.files
                    
                },
                drop(e) {
                    let removed, add;
                    let files = [...this.files];
        
                    removed = files.splice(this.fileDragging, 1);
                    files.splice(this.fileDropping, 0, ...removed);
        
                    this.files = createFileList(files);
                    this.input.files = this.files
                    this.fileDropping = null;
                    this.fileDragging = null;
                },
                dragenter(e) {
                    let targetElem = e.target.closest("[draggable]");
        
                    this.fileDropping = targetElem.getAttribute("data-index");
                },
                dragstart(e) {
                    this.fileDragging = e.target
                        .closest("[draggable]")
                        .getAttribute("data-index");
                    e.dataTransfer.effectAllowed = "move";
                },
                loadFile(file) {
                    const preview = document.querySelectorAll(".preview");
                    const blobUrl = URL.createObjectURL(file);

                    console.log(file)
                    console.log(preview)
                    console.log(blobUrl)

                    preview.forEach(elem => {
                        elem.onload = () => {
                            URL.revokeObjectURL(elem.src); // free memory
                        };
                    });
        
                    return blobUrl;
                },
                addFiles(e) {
                    console.log(e.target.files)
                    const files = createFileList([...this.files], [...e.target.files]);
                    this.files = files;
                    
                    this.input.files = this.files
                    // console.log(input.form.formData.files = [...files];)
                    
                    console.log(this.input.files)
                }
            };
        }
    </script>
@endpush