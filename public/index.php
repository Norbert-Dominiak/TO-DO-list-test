<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>TO-DO list</title>
</head>
<body>
    <div class="main">
        <div class="todo-add">
            <form>
                <input type="text" name="task" placeholder="What do you want to do?" />
                <input type="text" name="description" placeholder="Describe what you want to do." />
                <button type="submit">
                    <span> + </span>
                </button>
            </form>
        </div>
        <div class="todo-list">
            <div class="todo-object">
                <p class="title">
                    Task title
                </p>
                <p class="description">
                    Task description
                </p>
                <button>
                    &#10005
                </button>
            </div>
        </div>
    </div>
</body>
</html>
