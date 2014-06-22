<div class="row">
	<h2 class="pull-left"><?= $user->username; ?></h2>
	<div class="pull-right">
		<?= HTML::anchor('user/logout', 'Logout',array('id'=>'logout')); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div class="row">
	
	<div class="col-md-6">
		<div>
			<ul>
				<li><label>Email:</label> <?= $user->email; ?></li>
				<li><label>Number of logins: </label><?= $user->logins; ?></li>
				<li><label>Last Login:</label> <?= Date::fuzzy_span($user->last_login); ?></li>
			</ul>
		</div>	
	</div>
	<div class="col-md-6">
		 <div class="form-class">
				<?= Form::open('user/sub_users'); ?>
				<div>
					<?= Form::label('username', 'Username'); ?>
					<?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
					<div class="error">
						<?= Arr::get($errors, 'username'); ?>
					</div>
				</div>
				<div>
					<?= Form::label('email', 'Email Address'); ?>
					<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
					<div class="error">
						<?= Arr::get($errors, 'email'); ?>
					</div>
				</div>
				<div>
					<?= Form::label('password', 'Password'); ?>
					<?= Form::password('password'); ?>
					<div class="error">
						<?= Arr::path($errors, '_external.password'); ?>
					</div>
				</div>
				<div>
					<?= Form::submit('create', 'Create User', array('class' => 'btn btn-primary', )); ?>
					<?= Form::close(); ?>
				</div>
			</div>	
	</div>

</div>
