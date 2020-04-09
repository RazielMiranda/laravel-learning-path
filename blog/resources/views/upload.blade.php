<form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" name="profile_image" id="exampleInputFile">
    </div>
    {{ csrf_field() }}
    <h1>{{session('status')}}</h1>

    <button type="submit" class="btn btn-default">Submit</button>
</form>