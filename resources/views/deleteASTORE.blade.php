<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 40%;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #F44336;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #D32F2F;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Delete Store</h2>
    <form action="/admin/stores" method="POST">
        @csrf
        @method('DELETE')
        <label for="id">Store ID</label>
        <input type="text" id="id" name="id" required>
        <button type="submit">Delete Store</button>
    </form>
</div>

</body>
</html>
