<h1>Ajouter une nouvelle catégorie</h1>

<form action="{{ route('categorys.store') }}" method="POST">
    @csrf

    <div>
        <label>Nom:</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Description:</label>
        <textarea name="description" required></textarea>
    </div>

    <div>
        <label>Icône:</label>
        <input type="text" name="icon" required>
    </div>

    <div>
        <label>Slug:</label>
        <input type="text" name="slug" required>
    </div>

    <button type="submit">Enregistrer</button>
</form>