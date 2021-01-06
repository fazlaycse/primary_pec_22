@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<form action="create" method="post">
    @csrf <!-- {{ csrf_field() }} -->
   Name: <input type="text" name="name">
    <button type="submit" value="submit">submit</button>
</form>