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
            <h1>USERS - {{$Users->id}}</h1>
        </header>

        <main>
            <p></p>
            <div class='r1'>
                <textarea  cols="10" rows="1">{{$Users->firstname}}</textarea>
            </div>
            <div class='r2'>
                <textarea  cols="10" rows="1">{{$Users->secondname}}</textarea>
            </div>
            <div class='r3'>
                <textarea  cols="10" rows="1">{{$Users->centre}}</textarea>
            </div>
            <div class='r4'>
                <textarea  cols="10" rows="1">{{$Users->email}}</textarea>
            </div>
            <br><br>
            <a href="/">Back</a>
            <a href="/users/edit/{{$Users->id}}">Edit</a>
            <a href="/users/delete/{{$Users->id}}">Delete</a>
        </main>
    </body>
</html>