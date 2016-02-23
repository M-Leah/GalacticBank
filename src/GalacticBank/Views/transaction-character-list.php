<h1>Transaction Character List</h1>

{% for character in characters %}
  <p><a href="/transaction/list/{{ character.id }}">{{ character.name }}</a></p>
{% endfor %}
