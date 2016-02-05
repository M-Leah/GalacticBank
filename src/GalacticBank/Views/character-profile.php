<h1>Character Profile</h1>

<p>Name: {{ character.name }}</p>
<p>Faction: {{ character.faction }}</p>
<p>Balance: TBD.</p>

{% if character.user_id == user.id %}
  {% if character.balance_id is null %}
    This character currently does not have a balance. Apply for one <a href="/balance/apply/{{ character.name|replace(' ', '-')|url_encode }}">here</a>
  {% endif %}
{% endif %}
