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
            <h1>CESI - {{$Cesi->id}}</h1>
        </header>

        <main>
            <p></p>
            <div class='r1'>
                <textarea  cols="10" rows="1">{{$Cesi->firstName}}</textarea>
            </div>
            <div class='r2'>
                <textarea  cols="10" rows="1">{{$Cesi->secondName}}</textarea>
            </div>
            <div class='r3'>
                <textarea  cols="10" rows="1">{{$Cesi->centre}}</textarea>
            </div>
            <div class='r4'>
                <textarea  cols="10" rows="1">{{$Cesi->email}}</textarea>
            </div>
            <br><br>
            <a href="/">Back</a>
            <a href="/cesi/edit/{{$Cesi->id}}">Edit</a>
            <a href="/cesi/delete/{{$Cesi->id}}">Delete</a>
        </main>
    </body>
</html>