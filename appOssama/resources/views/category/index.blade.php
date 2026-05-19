
<h1>Liste des categorys</h1>

<a href="{{ route('categorys.create') }}">Ajouter un category</a>

<table>
    <tr>
        <th>Nom</th>
        <th>description</th>
        <th>icon</th>
        <th>slug</th>
        <th>Actions</th>
    </tr>
    @foreach ($categorys as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>{{ $category->icon }}</td>
        <td>{{ $category->slug }}</td>
        <td>
            <a href="{{ route('categorys.edit', $category->id) }}">Modifier</a>
            <form action="{{ route('categorys.destroy', $category->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>