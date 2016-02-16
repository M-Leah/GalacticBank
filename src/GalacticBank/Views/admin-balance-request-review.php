<h1>Balance Request #{{ balance_request.id }}</h1>

{% if error is not defined %}

  <p>You are reviewing a balance request for the character <strong>{{ balance_request.name }}</strong>
  you should remember to be impartial and assess the claims to the best of your ability. If you
  are unsure on whether a claim is factual or not, you should seek out aid from the community
  rather than performing guess work. Your request reviews are logged.</p>

  <h3>Requested Amount</h3>
  {{ balance_request.amount }}

  <h3>Requested Reason</h3>
  {{ balance_request.reason }}

  <hr/>

  {% if balance_request.completed != 'Yes' %}
  <form method="post">
    <p>Is the requested amount feasiable?
      <select name="accepted">
        <option value="accepted">Yes</option>
        <option value="rejected">No</option>
      </select>
    </p>
    <p><h4>Reasoning</h4><textarea name="decision_reasoning" cols="100" rows="10"></textarea></p>
    <p><input type="submit" value="Save Review" /></p>
  </form>
  {% else %}
    <p>
      This request has already been completed. The balance request was <strong>{{ balance_request.status }}</strong>
      for the following reasons:
    </p>
    <p>
      {{ balance_request.decision_reasoning }}
    </p>
  {% endif %}

{% else %}

<p>
  {{ error }}
</p>

{% endif %}
