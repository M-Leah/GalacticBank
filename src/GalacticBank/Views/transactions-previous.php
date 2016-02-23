<h1>Previous Transactions</h1>

<h2>{{ character.name }}'s current balance</h2> {{ balance.amount }}

<h3>{{ character.name }}'s Sent Transactions</h3>

<table border="1">
<tr>
    <td>
      Sender Name
    </td>
    <td>
      Recipient Name
    </td>
    <td>
      Amount
    </td>
</tr>
{% for transaction in sent_transactions %}
<tr>
  <td>
    {{ transaction.senderName }}
  </td>
  <td>
    {{ transaction.recipientName}}
  </td>
  <td>
    {{ transaction.amount}}
  </td>
</tr>
{% endfor %}
</table>

<h3>{{ character.name }}'s Received Transactions</h3>

<table border="1">
<tr>
    <td>
      Sender Name
    </td>
    <td>
      Recipient Name
    </td>
    <td>
      Amount
    </td>
</tr>
{% for transaction in received_transactions %}
<tr>
  <td>
    {{ transaction.senderName}}
  </td>
  <td>
    {{ transaction.recipientName}}
  </td>
  <td>
    {{ transaction.amount}}
  </td>
</tr>
{% endfor %}
</table>
