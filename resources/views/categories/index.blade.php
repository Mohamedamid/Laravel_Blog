<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gestion des Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
    </ul>
</nav>
<body class="container mt-5">

    <h2 class="mb-4 text-center">Gestion des Catégories</h2>

    <form id="categoryForm" class="mb-4 p-4 border rounded bg-light">
        <input type="hidden" id="category_id">
        <div class="mb-3">
            <label class="form-label">Nom de la catégorie</label>
            <input type="text" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Enregistrer</button>
    </form>

    <h3 class="mt-5 text-center">Liste des Catégories</h3>
    <table class="table table-bordered mt-3 text-center shadow-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="categoryTable">
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
