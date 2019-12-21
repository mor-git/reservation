<h1>It work List</h1>
<div>
<form action="{{ url('/compteur') }}" method="post">
    <div class="formgroup">
            <input class="btn btn-success" type="submit" value="Valider" name="btn">
        </div>
        <input type="text" value="{{ $teur }}" name="pwd" id="pwd" class="form-control" readonly>
    </form>
</div>