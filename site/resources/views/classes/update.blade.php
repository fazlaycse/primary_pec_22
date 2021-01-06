<form action="update" method="post">
@csrf <!-- {{ csrf_field() }} -->

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        <tr>
        @foreach($getRow as $row)
            <tr>
                <td>{{ $row->id }} <input type="hidden" value="{{$row->id }}" name="id"/></td>
                <td><input type="text" value="{{ $row->name  }}" name="name"/></td>
                <td><input type="submit" value="Update"/> </td>
            </tr>
            @endforeach
        </tr>
    </table>
</form>