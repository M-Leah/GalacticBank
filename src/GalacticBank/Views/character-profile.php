<h1>Character Profile</h1>

<p>Name: <strong>{{ character.name }}</strong></p>
<p>Faction: <strong>{{ character.faction }}</p></strong>
<p>Balance:
  {% if balance %}
    <strong>{{ balance.amount }}</strong>
  {% else %}
    <strong>0</strong>
  {% endif %}
</p>

{% if balance_request is null %}
  This character currently does not have a balance. Apply for one
  <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>
{% elseif balance_request.complete == 'No' and balance_request.status != 'Rejected' %}
  Your current balance request is: <a href="/balance/apply/view/{{ character.name|replace(' ', '-') | url_encode }}">{{ balance_request.status }}</a>
{% elseif balance_request.complete == 'Yes' and balance_request.status == 'Rejected' %}
  Your balance request has been rejected for the following reason:
  <p>{{ balance_request.decision_reasoning }}</p>
  You may submit a new balance request <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>
{% endif %}
