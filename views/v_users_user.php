<h2>Profile</h2>
<img src="/uploads/avatars/<?php echo $profile['photo'] ?>" class="avatar img-circle"/>
<strong><a href="/posts/user/<?=$profile['user_id'] ?>"><?=$profile['first_name'] ?> <?=$profile['last_name'] ?></a></strong><br>

<!-- if website set -->
<?php if(isset($profile['website'])): ?>
     <a href="<?=$profile['website'] ?>"><?=$profile['website'] ?></a><br>
<?php endif; ?>     

<!-- if bio set -->
<?php if(isset($profile['bio'])): ?>
     <p><?=$profile['bio'] ?><p>
<?php endif; ?> 

<hr/>
<?php if($profile['user_id'] == $user->user_id): ?>
	<a href="/users/profile/">Update your account <span class="glyphicon glyphicon-pencil"></span></a>
<?php endif ?>