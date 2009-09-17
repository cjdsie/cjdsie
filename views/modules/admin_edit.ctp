<div class="modules form">
<?php echo $form->create(null, array('url' => '/admin/modules/edit'));?>
	<table id="newspaper-b" summary="Modules Edit">
	<thead>
		<tr>
			<th scope="col" colspan="11"><?php __('Edit Module');?></th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo $form->input('id');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('name');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('status', array('options' => array(
														'dev'=>'dev',
														'inactive'=>'inactive',
														'active'=>'active'
														)));?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('minSize');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('maxSize');?></td>
	</tr>
	<tr>
		<td><?php 
					echo $form->input('updateType', array('options' => array(
														'prependli'=>'prependli',
														'appendli'=>'appendli',
														'prependdiv'=>'prependdiv',
														'appenddiv'=>'appenddiv',
														'replace'=>'replace',
														'flashjs'=>'flashjs',
														'js'=>'js'
														)));
			?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('updateid');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('updateInSeconds');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('datafeed_id');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('datafeed_tags');?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('datafeed_tag_restriction', array('options' => array(
														'or'=>'or',
														'and'=>'and',
														'not'=>'not'
														)));?></td>
	</tr>
	<tr>
		<td><?php echo $form->input('layout_tag');?></td>
	</tr>
	<tr>
		<td><?php echo $form->end('Submit');?></td>
	</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="13">
				<div class="actions">
					<ul>
						<li><?php echo $html->link(__('Delete', true), '/admin/modules/delete/'.$form->value('Module.id'), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Module.id'))); ?></li>
						<li><?php echo $html->link(__('List Modules', true), array('controller' => 'modules','action' => 'admin_index'));?></li>
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	</table>
</div>
