
  <table >
    <thead>
        <tr> 
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Birth date</th>
            <th scope="col">Status</th>
            <th scope="col">Record Date</th>
        </tr>
    </thead> 
    <tbody>

    </tbody>
    
        @foreach ($records as $record)
        <tr>
            
            <td>{{$record['name']}}</td>
            <td>{{$record['city']}}</td>
            <td>{{$record['Birth_date']}}</td>
            <td>{{$record['status']}}</td>
            <td>{{$record['Record_Date']}}</td>
        </tr>    
        @endforeach
    

  </table> 
