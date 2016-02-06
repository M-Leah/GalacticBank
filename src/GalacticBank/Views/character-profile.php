<h1>Character Profile</h1>

<p>Name: <strong>{{ character.name }}</strong></p>
<p>Faction: <strong>{{ character.faction }}</p></strong>
<p>Balance:
  {% if pending_request == 'accepted' %}
    <strong>{{ balance.amount }}</strong>
  {% endif %}
</p>


This character currently does not have a balance. Apply for one
<a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>
