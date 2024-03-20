
        <table class="stack">
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="200">Email</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach( $clients as $client )
              <tr>
                <td>{{ $client->title }}. {{ $client->name }} {{ $client->last_name }}</td>
                <td>{{ $client->email }}</td>
                <td>
                <!-- <a class="hollow button" href="{{ route('hotel_clients.Route', ['client_id' => $client->id ]) }}">DELETE</a> -->
                <a class="hollow button" href="{{ route('hotel_show_client.Route', ['client_id' => $client->id ]) }}">EDIT/DELETE</a>
                <a class="hollow button warning" href="{{ route('hotel_check_room.Route', ['client_id' => $client->id ]) }}">BOOK A ROOM</a>
                </td>
              </tr>
          @endforeach

              
                      </tbody>
        </table>

