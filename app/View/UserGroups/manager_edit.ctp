<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('User Groups'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'userGroups', 'action' => 'delete', 'manager' => true, $this->data['UserGroup']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $this->data['UserGroup']['id'])
						);
					?>
				</button>
			</div>
			<div class="btn-group pull-left">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'userGroups', 'action' => 'add', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/magnifier.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('View'))
							) . __('View'),
							array('controller' => 'userGroups', 'action' => 'view', 'manager' => true, $this->data['UserGroup']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'userGroups', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Configuration'),array('controller' => 'configuration', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Core'),array('controller' => 'core', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('User Groups'), array('controller' => 'userGroups', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Edit # ') . $this->data['UserGroup']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
		<?php echo $this->Form->create('UserGroup'); ?>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('archived');
		?>

		<?php
			echo $this->Form->button('Update', array('type' => 'submit', 'class' => 'btn'));
			echo $this->Form->end();
		?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserGroup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserGroup.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>

</div></div>
