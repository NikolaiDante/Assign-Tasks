<?php

function gravatar_url($email)
{

    return 'http://www.gravatar.com/avatar/'. md5($email) . '?s=40';

}

function link_to_path(Task $task)
{

    return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id] );

}
