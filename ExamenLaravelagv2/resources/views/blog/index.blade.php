<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog - ExamenLaravelagv2</title>
</head>
<body>

<h1>Blog - Posts con autor y comentarios</h1>

@foreach ($posts as $post)
    <hr>

    <h2>{{ $post->title }}</h2>

    <p>
        <strong>Autor:</strong>
        {{ $post->user->name }} ({{ $post->user->email }})
    </p>

    <p>{{ $post->body }}</p>

    <h3>Comentarios</h3>

    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <strong>{{ $comment->author_name }}:</strong>
                {{ $comment->content }}
            </li>
        @endforeach
    </ul>

@endforeach

</body>
</html>
