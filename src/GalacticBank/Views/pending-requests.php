<h1>Balance Requests</h1>

<h3>Pending Requests</h3>
<table>
  <tr>
    <th>Character Name</th>
    <th>Balance Requested</th>
    <th>Date Requested</th>
  </tr>
    {% for request in pending_requests %}
    <tr>
      <td>{{ request.name }}</td>
      <td>{{ request.amount }}</td>
      <td>{{ request.created_at }}</td> <!-- TODO: Using character created date rather than balance date -->
      <td><a href="/admin/balance-request/{{request.name|replace(' ', '-')|url_encode}}">View</a></td>
    </tr>
    {% endfor %}
</table>

<h3>Completed Requests</h3>
<table>
  <tr>
    <th>Character Name</th>
    <th>Balance Requested</th>
    <th>Date Requested</th>
    <th>Status</th>
  </tr>
    {% for request in completed_requests %}
    <tr>
      <td>{{ request.name }}</td>
      <td>{{ request.amount }}</td>
      <td>{{ request.created_at }}</td> <!-- TODO: Using character created date rather than balance date -->
      <td>{{ request.status }}</td>
      <td><a href="/admin/balance-request/{{request.name|replace(' ', '-')|url_encode}}">View</a></td>
    </tr>
    {% endfor %}
</table>
