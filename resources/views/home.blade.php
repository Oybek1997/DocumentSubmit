
<html>
<style>
    .center {
        position: relative; float: left; width: 440px;
        height: 250px; background-color: lightblue; overall width 248px including 2*3px padding and 2*1px border;
        border: 1px solid black;
    }
    .inputs{
        margin-top: 20px;
        margin-left: 20px;
    }
    .field{
        width: 300px;
        height: 30px;
    }
    .button{
        color: black;
        text-decoration-color: white;
        border: 0.1px solid black;
    }
    .mytable{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        position: relative;
        margin-left: 50%;

        width:350px;
        height: 250px;

    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .heading{
        position: relative;
        text-align: left;
        margin-left: 700px;
        text-decoration-color: blue;
    }

    tr:nth-child(even) {
        background-color: grey;


    }
</style>
<body>
<div class="center">
    <form action="submit1" method="post" >
        @csrf
        <div class="inputs">
            <input class="field" type="text" name="first_name" placeholder="First Name">
            <br><br>
            <input class="field" type="text" name="last_name" placeholder="Last Name">
            <br><br>
            <input class="field" type="text" name="password" placeholder="Password">
            <br><br>
            <input class="field" type="text" name="phone_number" placeholder="Phone Number">
            <br><br>
            <input class="field" type="text" name="Role" placeholder="Role">
            <br><br>
            <button class="button" name="submit" type="submit">Submit</button>
        </div>
    </form>

</div>


<chart>dfefe</chart>

<table class="mytable">
    <h1 class="heading">The Last Records</h1>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Password</td>
        <td>Phone Number</td>
        <td>Role</td>

    </tr>
<?php

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->Role }}</td>

        </tr>
    @endforeach
?>
</table>

</body>
</html>




