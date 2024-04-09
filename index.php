<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form action="save_todo.php" method="post">
            <input type="text" name="todo" placeholder="Add a new todo">
            <button type="submit">Add Todo</button>
        </form>
        <ul id="todo-list">
            <?php
            // Include the file to get todos
            include 'get_todos.php';
            ?>
        </ul>
    </div>
</body>
</html>
