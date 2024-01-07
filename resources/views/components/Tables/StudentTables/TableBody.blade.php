@foreach ($students as $key=> $student)
    <tbody>
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $student['Fname'] }}</td>
            <td>{{ $student['Lname'] }}</td>
            <td>{{ $student['address'] }}</td>
            <td>{{ $student['city'] }}</td>
            <td>{{ $student['state'] }}</td>
            <td>{{ $student['Zcode'] }}</td>
            <td>{{ $student['dob'] }}</td>
            <td><a href="" class="btn btn-danger">Delete</a><a href="" class="btn btn-primary">Edit</a></td>
        </tr>
    </tbody>
@endforeach
