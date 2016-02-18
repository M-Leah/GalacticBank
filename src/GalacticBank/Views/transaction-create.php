<h1>New Transaction</h1>

{% if error is defined %}

  {{ error }}

{% else %}
<form method="post">
  <p>
    {% for error in senderError %}
      <p style="color:red;">{{ error }}</p>
    {% endfor %}
    <strong>Transfer funds from:</strong>
    <select name="sender">
      {% for character in characters %}
        <option value="{{ character.id }}">
          {{ character.name }}
        </option>
      {% endfor %}
    </select>
  </p>

  <p>
    {% for error in recipientError %}
      <p style="color:red;">{{ error }}</p>
    {% endfor %}
    <strong>Transfer funds to:</strong>
    <input type="text" name="recipient" />
  </p>

  <p>
    {% for error in amountError %}
      <p style="color:red;">{{ error }}</p>
    {% endfor %}
    <strong>Transfer Amount:</strong>
    <input type="text" pattern="[0-9]+" name="amount" />
  </p>

  <p>
    <input type="submit" value="Transfer" />
  </p>
</form>
{% endif %}
