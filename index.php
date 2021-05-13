<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vue.js Live Data Search with PHP & Mysql</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	</head>
    <body>
		<div class="container" id="searchApp">

                </div>

<input type="text" class="form-control input-sm" placeholder="Search Data" v-model="query" @keyup="fetchData()" />

<table class="table table-bordered table-striped">
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
							</tr>
							<tr v-for="row in allData">
								<td>{{ row.first_name }}</td>
								<td>{{ row.last_name }}</td>
							</tr>
							<tr v-if="nodata">
								<td colspan="2" align="center">No Data Found</td>
							</tr>
						</table>
                        </body>
</html>