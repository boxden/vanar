<ul>

{% for user in users %}
  <li>{{ user.nikname|e }}</li>
{% endfor %}

</ul>
