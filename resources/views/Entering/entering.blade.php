<style>
    .btn{
        width: 100px;
        height: 100px;
        position: relative;

    }
    .all{

        margin-left:500px;
        margin-top: 200px;
    }


</style>

<body>
<div class="all">
<h class="heading">Wellcome To Our Application</h>
<div>
    <form action="submit1" method="post" >
        @csrf
<button class="btn"  name="submit1" type="submit1"> Register</button>

    </form>

    <form action="submit2" method="post" >
        @csrf
        <button class="btn"  name="submit2" type="submit2"> Login</button>

    </form>
</div>
</div>
</body>
