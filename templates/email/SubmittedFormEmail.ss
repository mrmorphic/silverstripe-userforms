<html>
	<head>
	</head>
	<body>
		<h1>$Subject</h1>
		<p>
			<% _t('SUBMITTED','The following data was submitted to your website:') %>

		</p>
			$Body

			<table>
			<% control Fields %>
			<tr>
				<td style="padding: 5px"><b>$Title</b></td>
				<td style="padding: 5px">$Value</td>
			</tr>			
			<% end_control %>
			</table>
	</body>
</html>