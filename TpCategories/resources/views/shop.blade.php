<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Les Catégories</h2>
<ul>
    @foreach($categories as $cat)
        <li>
            {{ $cat->name }} 
            <a href="{{ url('/category/' . $cat->id) }}">
                    <button>Voir Produits</button>
            </a>
        </li>
    @endforeach
</ul>

<hr>

<div id="products-list">
    <h3>Produits:</h3>
    <ul id="list-items">
        
    </ul>
</div>
</body>
</html>