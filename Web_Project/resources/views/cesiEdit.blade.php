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
                    <label for="firstname">Firstname</label>
                    <textarea name="firstname" cols="10" rows="1">{{$Cesi->firstName}}</textarea>
                </div>
                <div class='r2'>
                    <label for="secondname">Secondname</label>
                    <textarea name="secondname" cols="10" rows="1">{{$Cesi->secondName}}</textarea>
                </div>
                <div class='r3'>
                    <label for="centre">Centre</label>
                    <textarea name="centre" cols="10" rows="1">{{$Cesi->centre}}</textarea>
                </div>
                <div class='r4'>
                    <label >Email</label>
                    <textarea name="email" cols="10" rows="1">{{$Cesi->email}}</textarea>
                </div>
                <div class='r5'>
                    <label >Password</label>
                    <input name="password" type="password" placeholder="{{$Cesi->password}}"></input>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </main>
    </body>
</html>