<form action="{{ route('admin.index.update', Auth::user()->uuid) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" name="profile">
    <button type="submit">Save</button>
</form>
