<h1>Tölts ki a mezőket</h1>
@If ( session()->has("success"))
<h3>{{ session("success") }}</h3>

@endif
<form action="submit-student" method="post">
    {{ csrf_field() }}
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name" placeholder="Név">
    </p>
    <p>
        <label for=""> Email: </label>
        <input type="text" name="email" placeholder="Email">
    </p>
    <p>
        <label for=""> Kurzus: </label>
        <input type="text" name="course" placeholder="course">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
    
</form>