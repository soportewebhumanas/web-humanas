<li id="{{$component->id}}" class="ui-state-default form-group row">
    <div class="card" style="width: 100%;">
        <div class="card-header  container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h4>Video</h4>
                </div>
                <div class="col-md-3">
                    <button type="button" class="float-right btn m-r-5 trash-component" data-component-id="{{$component->id}}"><i class="fa fa-trash"></i>
                    </button>
                    <button type="button" onclick="toogleEditModal({{$component->id}})" class="float-right btn m-r-5 edit-component"><i class="fa fa-edit"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <iframe src="https://www.youtube.com/embed/{{$component->link}}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</li>