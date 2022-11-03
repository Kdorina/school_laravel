
<for m action="update-student" method="post">
    {{ csrf_field() }}
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name" value="{{ $student->name }}">
    </p>
    <p>
        <label for=""> Email: </label>
        <input type="text" name="email" value="{{ $student->email }}">
    </p>
    <p>
        <label for=""> Kurzus: </label>
        <input type="text" name="course" value="{{ $student->course->name }}">
    </p>
    <p>
        <button type="submit">Frissítés</button>
    </p>
    
</form>