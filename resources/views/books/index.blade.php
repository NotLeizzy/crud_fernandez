<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Book Information Management System</h1>

    <form action="/booksStore" method="POST" class="books-form">
        @csrf
        <div class="form-group">
            <label for="book_name">Name:</label>
            <input type="text" id="book_name" name="book_name" required>
        </div>
        <div class="form-group">
            <label for="book_author">Author:</label>
            <input type="text" id="book_author" name="book_author" required>
        </div>
        <div class="form-group">
            <label for="book_stock">Stock:</label>
            <input type="number" id="book_stock" name="book_stock" required>
        </div>
        <div class="form-group">
            <label for="book_date">Date:</label>
            <input type="date" id="book_date" name="book_date" required>
        </div>
        <button type="submit" class="btn-submit1">Save Book</button>
    </form>

    <hr>

    <table class="books-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Stock</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->book_name }}</td>
                <td>{{ $item->book_author }}</td>
                <td>{{ $item->book_stock }}</td>
                <td>{{ $item->book_date }}</td>
                <td>
                    <a href="/books/{{ $item->id }}/edit" class="btn-edit">Edit</a>
                    
                    <form action="/books/{{ $item->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Delete this book?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>