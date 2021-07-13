<tr class="tr-shadow">
    <td>
        <label class="au-checkbox">
            <input type="checkbox">
            <span class="au-checkmark"></span>
        </label>
    </td>
    <td><input type="text" placeholder="Title" class="form-control" value="{{$video->title}}" wire:model="video.title"></td>
    <td><input type="text" placeholder="link" class="form-control" value="{{$video->link}}" wire:model="video.link"></td>
    <td><textarea rows="9" placeholder="Video Description" class="form-control" value="{{$video->description}}" wire:model="video.description"></textarea></td>
    <td>
        <div class="table-data-feature">
            <button style="color: red;" class="item" data-toggle="tooltip" data-placement="top" title="Delete" wire:click="deleteVideo({{$video->id}})">
                <i class="zmdi zmdi-delete"></i>
            </button>
        </div>
    </td>
</tr>