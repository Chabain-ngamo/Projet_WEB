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
            <h1>Activity- {{$Activity->id}}</h1>
        </header>

        <main>
            <p></p>
            <div class='r1'>
                <textarea  cols="10" rows="1">{{$Activity->description}}</textarea>
            </div>
            <div class='r2'>
                <textarea  cols="10" rows="1">{{$Activity->image}}</textarea>
            </div>
            <div class='r3'>
                <textarea  cols="10" rows="1">{{$Activity->dates}}</textarea>
            </div>
            <div class='r4'>
                <textarea  cols="10" rows="1">{{$Activity->status}}</textarea>
            </div>
            <br><br>
            <a href="/">Back</a>
            <a href="/activity/edit/{{$Activity->id}}">Edit</a>
            <a href="/activity/delete/{{$Activity->id}}">Delete</a>
        </main>
    </body>
</html>