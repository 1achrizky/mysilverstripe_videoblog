<div class="container">
	<% loop $VideoObjects.limit(3) %>
		<h1>$Title</h1>
		<video height="225" width="400" controls>
			<source src="$VideoSource.URL" type="video/mp4">
		</video>
		<% if $Description %>
			<p>$Description</p>
		<% end_if %>

		<ul>
			<% loop $VideoCategories %>
			    <li>$Title</li>
			<% end_loop %>
		</ul>
	<% end_loop %>
</div>