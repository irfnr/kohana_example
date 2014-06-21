<div class="row">
	<h2 class="pull-left"><?= $user->username; ?></h2>
	<div class="pull-right">
		<?= HTML::anchor('user/logout', 'Logout',array('id'=>'logout')); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="row">
	
	<div class="col-md-6">
	<div class="text-right">
		<?= HTML::anchor('user/sub_users', 'Sub Users',array('id'=>'sub_users')); ?>
	</div>
	<div class="user-info">
		<ul>
			<li><label>Email:</label> <?= $user->email; ?></li>
			<li><label>Number of logins: </label><?= $user->logins; ?></li>
			<li><label>Last Login:</label> <?= Date::fuzzy_span($user->last_login); ?></li>
		</ul>
	</div>
		
	</div>
</div>
