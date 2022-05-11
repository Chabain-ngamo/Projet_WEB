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
            <h1>Edit</h1>
        </header>

        <main>
            <form method="POST">
                @csrf
 

                <div class='r1'>
                    <label for="name">Name: </label>
                    <textarea  name="name" cols="10" rows="1">{{$Product->name}}</textarea>
                </div>
                <div class='r2'>
                    <label for="description">Description: </label>
                    <textarea name="description" cols="10" rows="1">{{$Product->description}}</textarea>
                </div>
                <div class='r3'>
                    <label for="price">Price: </label>
                    <textarea name="price" cols="10" rows="1">{{$Product->price}}</textarea>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </main>
    </body>
</html>