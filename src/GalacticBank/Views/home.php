<h1>Home Page</h1>

<h3>Some links to routes</h3>
<ul>
  {% if user.permission_level == 'Administrator' %}
  <li><a href="/admin">Administrator Panel</a></li>
  {% endif %}
  <li><a href="/logout">Logout</a></li>
  <li><a href="/character">Charaters Page</a></li>
  <li><a href="/character/create">Create a Character Page</a></li>
  <li><a href="/transaction">View and create new Transactions</a></li>
</ul>

<h3>TODO:</h3>
<ul>
  <li>Transaction Route</li>
  <li>Register Route</li>
</ul>
