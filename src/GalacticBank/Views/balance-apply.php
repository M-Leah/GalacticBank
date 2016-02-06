<h1>Apply for your balance</h1>

{% if character.balance_id is null %}

  <p>Your character <strong>{{ character.name }}</strong> currently does not have a balance.</p>
  <p>You may submit a value you would like to request, and a reasoning behind the value below.
  The value itself will be relative to other members of the community, so it is less important than your reasoning.</p>

  <p>{{ error.balance_creation}}</p>

  <form method="post">
    <p style="color: crimson">{{ error.value }}</p>
    <p>Value: <input type="text" name="balance_request" /></p>
    <p>Reasoning</p>
    <p style="color: crimson">{{ error.reasoning }}</p>
    <p><textarea name="reason" rows="10" cols="100"></textarea></p>
    <p><input type="submit" value="Process Request"/></p>
  </form>

{% endif %}

{% if not character.balance_id is null %}
  <p>Your character <strong>{{ character.name }}</strong> already has balance, you cannot re-apply once you have received your allocation.</p>
{% endif %}
