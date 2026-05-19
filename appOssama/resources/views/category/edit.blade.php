<form action="{{ route('categorys.update', $category->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}">
    <input type="text" name="discription" value="{{ $category->discription }}">
    <input type="text" name="icon" value="{{ $category->icon }}">
    <input type="text" name="sulg" value="{{ $category->sulg }}">
    <button type="submit">Modifier</button>
</form>