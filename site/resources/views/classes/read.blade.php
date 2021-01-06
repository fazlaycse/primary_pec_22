@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
    @foreach($getDataFromTable as $row)
        <tr>
            <td>{{ $row->id }} <input type="hidden" value="{{$row->id }}" name="id"/> </td>
            <td>{{ $row->name  }}</td>
            <td><a href="update?id={{$row->id}}">Update</a></td>
            <td><a href="delete?id={{$row->id}}">Update</a></td>
        </tr>
    @endforeach
</table>
