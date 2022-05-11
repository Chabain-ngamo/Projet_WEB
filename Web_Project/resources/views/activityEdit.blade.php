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
                    <label>Description</label>
                    <textarea name="description" cols="10" rows="1">{{$Activity->description}}</textarea>
                </div>
                <div class='r2'>
                    <label for="image">Image</label>
                    <textarea name="image" cols="10" rows="1">{{$Activity->imgae}}</textarea>
                </div>
                <div class='r3'>
                    <label for="date">Date</label>
                    <textarea name="dates" cols="10" rows="1">{{$Activity->date}}</textarea>
                </div>
                <div class='r4'>
                    <label for="status">Status</label>
                    <textarea name="status" cols="10" rows="1">{{$Activity->status}}</textarea>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </main>
    </body>
</html>