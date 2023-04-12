
  <table >
    <thead>
        <tr> 
            <th scope="col">Product Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">quantity</th>
            <th scope="col">rate</th>
            <th scope="col">Amount</th>
        </tr>
    </thead> 
    <tbody>

    </tbody>
    
        @foreach ($records as $record)
        <tr>
            <td>{{$record['id']}}</td> 
            <td>{{$record['name']}}</td>
            <td>{{$record['quantity']}}</td>
            <td>{{$record['rate']}}</td>
            
        </tr>    
        @endforeach
    

  </table> 
