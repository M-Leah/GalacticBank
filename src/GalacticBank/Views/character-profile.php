<h1>Character Profile</h1>

<p>Name: <strong>{{ character.name }}</strong></p>
<p>Faction: <strong>{{ character.faction }}</p></strong>
<p>Balance:
  {% if balance %}
    <strong>{{ balance.amount }}</strong>
  {% else %}
    <strong>-</strong>
  {% endif %}
</p>

{% if user.id == character.user_id or user.permission_level == 'Administrator' %}
  {% if balance_request is null %}
    This character currently does not have a balance. Apply for one
    <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>
  {% elseif balance_request.completed == 'No' and balance_request.status != 'Rejected' %}
    The current balance request for this character is: <a href="/balance/view-application/{{ character.name|replace(' ', '-') | url_encode }}">{{ balance_request.status }}</a>
  {% elseif balance_request.complete == 'Yes' and balance_request.status == 'Rejected' %}
    Your balance request has been rejected for the following reason:
    <p>{{ balance_request.decision_reasoning }}</p>
    This character may submit a new balance request <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>
  {% endif %}
{% endif %}
