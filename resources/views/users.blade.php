

<style>

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
<h1> They are Users</h1>


<table class="mytable">
    <h1 class="heading">The Last Records</h1>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Password</td>
        <td>Phone Number</td>
        <td>Role</td>

    </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->Role }}</td>

        </tr>
    @endforeach
</table>

</body>





