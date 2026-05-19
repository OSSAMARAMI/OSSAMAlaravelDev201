<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits de {{ $category->name }}</title>
</head>
<body>

    <h2>Produits de la catégorie : {{ $category->name }}</h2>

    <ul>
        @forelse($category->product as $p)
            <li>{{ $p->name }} - {{ $p->price }} DH</li>
        @empty
            <li>Aucun produit trouvé dans cette catégorie.</li>
        @endforelse
    </ul>

    <hr>
    <a href="{{ url('/') }}">Retour aux catégories</a>

</body>
</html>