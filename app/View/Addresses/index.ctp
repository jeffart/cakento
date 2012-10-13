<div class="addresses">

	<header>
		<h1><?php echo __('Customers'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'addresses', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('entity_id'); ?></th>
				<th><?php echo $this->Paginator->sort('firstname'); ?></th>
				<th><?php echo $this->Paginator->sort('lastname'); ?></th>
				<th><?php echo $this->Paginator->sort('city'); ?></th>
				<th><?php echo $this->Paginator->sort('created_at'); ?></th>
				<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($addresses as $address): ?>
				<tr>
					<td><?php echo h($address['Address']['entity_id']); ?>&nbsp;</td>
					<td><?php echo h($address['Attribute']['firstname']); ?>&nbsp;</td>
					<td><?php echo h($address['Attribute']['lastname']); ?>&nbsp;</td>
					<td><?php echo h($address['Attribute']['city']); ?>&nbsp;</td>
					<td><?php echo h($address['Address']['created_at']); ?>&nbsp;</td>
					<td><?php echo h($address['Address']['updated_at']); ?>&nbsp;</td>
					<td class="actions">
						<i class="icon-file"></i>
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $address['Address']['entity_id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
