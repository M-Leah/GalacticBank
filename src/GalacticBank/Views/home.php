<h1>Home Page</h1>

<h3>Some links to routes</h3>
<ul>
  {% if user.permission_level == 'Administrator' %}
  <li><a href="/admin">Administrator Panel</a></li>
  {% endif %}
  <li><a href="/logout">Logout</a></li>
  <li><a href="/character">Charaters Page</a></li>
  <li><a href="/character/create">Create a Character Page</a></li>
</ul>

<h3>TODO:</h3>
<ul>
  <li>Transaction Route</li>
  <li>Administrator Panel for Accepting/Rejecting Requests</li>
  <li>Characters Route (In progress...)</li>
  <li>Sort out Balances for Characters</li>
  <li>Bounty Terminal Route</li>
</ul>
