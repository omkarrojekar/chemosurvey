<div class="container">
		<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-center">List Of Responses</h1>
		<table class="table table-hover">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Speciality</th>
				<th>Action</th>
			</tr>
			<?php foreach ($allResponses as $row): ?>
				<tr>
				<th><?php echo $row->name; ?></th>
				<th><?php echo $row->email; ?></th>
				<th><?php echo $row->contact; ?></th>
				<th><?php echo $row->speciality; ?></th>
				<th><a href="<?php echo base_url(); ?>/home/view/<?php echo $row->id * 19995; ?>"><button class="btn btn-info">View</button></a></th>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
</div>