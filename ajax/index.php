<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row bg-success-subtle p-2 my-3">
            <div class="col-md-12">
                <h1 class="text-center">AJAX</h1>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">

                <form id="myform">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age: </label>
                        <input type="number" class="form-control" id="age">
                    </div>
                    <button type="button" class="btn btn-primary" id="save-button">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                        </tr>
                    </thead>
                    <tbody id="mytable">
                        <tr>
                            <td colspan="3" class="text-center">No Data Found!!!</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script>
        $(document).ready(function() {


            getData();



            $('#save-button').click(function(e) {
                e.preventDefault();
                
                let myname = $('#name').val();
                let myemail = $('#email').val();
                let myage = $('#age').val();


                $.ajax({
                    url: 'saveData.php',
                    type: 'POST',
                    data: {
                        username: myname,
                        useremail: myemail,
                        userage: myage
                    },
                    success: function(res) {
                        // console.log(res);
                        if(res == 1){
                            $('#myform').trigger('reset');
                            getData();
                        }else{
                            alert('Error in data saving');
                        }

                    }
                })

            });


            function getData() {
                let table = $('#mytable').html('');
                $.ajax({
                    url: 'fetchData.php',
                    type: 'GET',
                    success: function(dataa) {

                        let userData = JSON.parse(dataa)
                        // console.log(userData);
                        // ()=>{}
                        userData.map((user) => {
                            table.append(`<tr><td>${user.username}</td><td>${user.useremail}</td><td>${user.userage}</td></tr>`);
                        });
                    }
                });
            }
        });
    </script>

</body>

</html>