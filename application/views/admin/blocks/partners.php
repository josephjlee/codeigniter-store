<?php if(isset($data)){?><table class="table table-striped table-img table-admin">					<thead>		<tr>			<th>#</th>			<th class="th-txtcenter">Image</th>			<th>Company name</th>			<th></th>		</tr>	</thead>	<tbody>		<?php $i=1; foreach($data as $partner) {?>					<tr data-cat="partner" data-id="<?=$partner->ptid?>">				<td><?=$i?></td>				<td class="img-contain text-center"><a href="<?=$this->admin_url?>partner/<?=$partner->ptid?>"><img src="<?=$partner->pt_img?>" alt="<?=$partner->pt_name?>" /></td>				<td><a href="<?=$this->admin_url?>partner/<?=$partner->ptid?>"><?=$partner->pt_name?></td>				<td class="icon-contain text-center"><span class="glyphicon glyphicon-trash btn-delete"></span></td>			</tr>		<?php $i++;} ?>	</tbody>	</table><?php }else { ?>	<div class="sec-wrapper">No data</div><?php } ?>