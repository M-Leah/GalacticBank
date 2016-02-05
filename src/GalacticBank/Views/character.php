<h1>Your Characters</h1>

<ul>
{% for character in characters %}
  <li><a href="/character/{{ character.name|replace(' ', '-')|url_encode }}">{{ character.name }}</a></li>
{% endfor %}
</ul>
