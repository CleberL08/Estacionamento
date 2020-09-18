<table>
    <thead>
      <tr>
        <th>asdasd</th>
        <th>asdasd</th>
        <th>asdasd</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($user as $user) 
      <tr>
        <td>{{$user->nome}}</td>
        <td>{{ $user->readableDate()}}</td>     
      </tr>
      @endforeach
      @foreach ($car as $car) 
      <tr>
        <td>{{$car->placa}}</td>
        <td>{{$car->cor}}</td>
        <td>{{$car->marca}}</td>
        <td>{{$car->modelo}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>  