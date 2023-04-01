
{% extends "layout.tpl.php" %}
{% block content %}
<div class="w3-container w3-center">
  <h2>Torrent list</h2>
</div>
<pre>
<div class="w3-container">
  <table class="w3-table-all">
     <tr>
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

{% for torrent in torrents %}
<tr>
<th><a href="?torrent/details/".{{}}> {{ torrent.name|e }}</a></th>
  <th>{{ torrent.type|e }}</th>
  <th>{{ torrent.gen|e }}</th>
  </tr>
{% endfor %}

</table>
</div>
{% endblock %}
