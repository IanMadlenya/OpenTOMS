<!--
	OpenTOMS - Open Trade Order Management System
	Copyright (C) 2012  JOHN TAM, LPR CONSULTING LLP

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<div style="width: 50%; margin-left: 25%; margin-right: 25%;">
	<h1>Chart of Accounting Books</h1>
</div>

<table style="width: 50%; margin-left: 25%; margin-right: 25%;">
	<tr>
		<td colspan="3">
			<div>
				<?php echo $this->Html->link('Add Account', array('controller' => 'accounts', 'action' => 'add')); ?>
			</div>
		</td>
	</tr>
	<tr>
		<th style="width: 20%">Edit</th>
		<th>Book Name</th>
		<th>Book Type</th>
	</tr>
	<?php foreach ($accounts as $account): ?>
		<tr<?php echo $cycle->cycle('', ' class="altrow"');?>>
			<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $account['Account']['id']));?></td>
			<td><?php echo $account['Account']['account_name']; ?></td>
			<td><?php echo $account['Account']['account_type']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
