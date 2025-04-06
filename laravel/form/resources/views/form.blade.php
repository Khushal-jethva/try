<h1>form</h1>

<form action="hello" method="POST">
    @csrf
    <div>
        <input type="text" name="name" placeholder="name">
    </div>
    <div>
        <button>Submit</button>
    </div>

</form>