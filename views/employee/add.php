<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <form action="index.php?action=get_form_data" method="POST">
      
            <div class="row">
                <div class="col">
                    <input type="text" name="studentname"  class="form-control" placeholder="First name">
                </div>
                <br>

                <div class="col">
                    <input type="text" name="lastname"  class="form-control" placeholder="Last name">
                </div>
                <br>
             
             </div>

            <div class="row">
                <div class="col">
               
                 <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <br>
                <div class="col">
                    <input type="number" name="salary" class="form-control" placeholder="salary">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="btn-add" >Submit</button>
              
            </div>
            </form>
    </div>
</body>
</html>

