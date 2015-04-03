<div class="panel panel-white">
	<div class="panel-heading border-light">
		<h4 class="panel-title"><span><i class="fa fa-info fa-2x text-blue"></i>   Informations</span></h4>
		<div class="panel-tools">
			<div class="dropdown">
				<a class="btn btn-xs dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
					<i class="fa fa-cog"></i>
				</a>
				<ul role="menu" class="dropdown-menu dropdown-light pull-right">
					<li>
						<a href="#" class="panel-collapse collapses"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
					</li>
					<li>
						<a href="#" class="panel-refresh">
							<i class="fa fa-refresh"></i> <span>Refresh</span>
						</a>
					</li>
					<li>
						<a data-toggle="modal" href="#panel-config" class="panel-config">
							<i class="fa fa-wrench"></i> <span>Configurations</span>
						</a>
					</li>
					<li>
						<a href="#" class="panel-expand">
							<i class="fa fa-expand"></i> <span>Fullscreen</span>
						</a>
					</li>
				</ul>
			</div>
			<a href="#" class="btn btn-xs btn-link panel-close">
				<i class="fa fa-times"></i>
			</a>
		</div>
	</div>
	<div class="panel-body no-padding">
		<table class="table table-condensed table-hover" >
			<tbody>
				<tr>
					<td>Intitulé</td>
					<td><a href="#"><?php if(isset($event["name"]))echo $event["name"];?></a></td>
				</tr>
				<tr>
					<td>Début</td>
					<td><?php if(isset($event["startDate"]))echo $event["startDate"]; ?></td>
				</tr>
				<tr>
					<td>Fin</td>
					<td><?php if(isset($event["endDate"]))echo $event["endDate"]; ?></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><?php if(isset($event["type"])) echo $event["type"]; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
