<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Book Details</h1>

        <form action="/books/{{ $item->id }}" method="POST" class="books-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="book_name">Name:</label>
                <input type="text" id="book_name" name="book_name" value="{{ $item->book_name }}" required>
            </div>

            <div class="form-group">
                <label for="book_author">Author:</label>
                <input type="text" id="book_author" name="book_author" value="{{ $item->book_author }}" required>
            </div>

            <div class="form-group">
                <label for="book_stock">Stock:</label>
                <input type="number" id="book_stock" name="book_stock" value="{{ $item->book_stock }}" required>
            </div>

            <div class="form-group">
                <label for="book_date">Date:</label>
                <input type="date" id="book_date" name="book_date" value="{{ $item->book_date }}" required>
            </div>

            <button type="submit" class="btn-submit">Update Changes</button>
        </form>
        
        <br>
        <a href="/books" class="btn-back">← Back to Books List</a>
    </div>
</body>
</html>