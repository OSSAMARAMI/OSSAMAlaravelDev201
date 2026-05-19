<h1>Détails de la catégorie</h1>

<div class="category-details">
    <p><strong>Nom :</strong> {{ $category->name }}</p>
    <p><strong>Slug :</strong> {{ $category->slug }}</p>
    <p><strong>Icône :</strong> {{ $category->icon }}</p>
    <p><strong>Description :</strong> {{ $category->description }}</p>
</div>

<a href="{{ route('categorys.index') }}">Retour à la liste</a>
<a href="{{ route('categorys.edit', $category->id) }}">Modifier</a>

<form action="{{ route('categorys.destroy', $category->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Vous êtes sûr ?')">Supprimer</button>
</form>