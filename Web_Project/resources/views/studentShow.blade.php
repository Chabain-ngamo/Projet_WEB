@extends('template.master')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <header>
            <h1>STUDENT - {{$Student->id}}</h1>
        </header>

        <main>
            <p></p>
            <div class='r1'>
                <textarea  cols="10" rows="1">{{$Student->firstname}}</textarea>
            </div>
            <div class='r2'>
                <textarea  cols="10" rows="1">{{$Student->secondname}}</textarea>
            </div>
            <div class='r3'>
                <textarea  cols="10" rows="1">{{$Student->centre}}</textarea>
            </div>
            <div class='r4'>
                <textarea  cols="10" rows="1">{{$Student->email}}</textarea>
            </div>
            <br><br>
            <a href="/">Back</a>
            <a href="/student/edit/{{$Student->id}}">Edit</a>
            <a href="/student/delete/{{$Student->id}}">Delete</a>
        </main>
    </body>
</html>