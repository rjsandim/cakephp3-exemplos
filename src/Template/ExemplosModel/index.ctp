<?php

$this->Form->create($article);

// Article inputs.
echo $this->Form->input('title');

// Author inputs (belongsTo)
echo $this->Form->input('author.id');
echo $this->Form->input('author.first_name');
echo $this->Form->input('author.last_name');

// Author profile (belongsTo + hasOne)
echo $this->Form->input('author.profile.id');
echo $this->Form->input('author.profile.username');

// Tags inputs (belongsToMany)
echo $this->Form->input('tags.0.id');
echo $this->Form->input('tags.0.name');
echo $this->Form->input('tags.1.id');
echo $this->Form->input('tags.1.name');

// Multiple select element for belongsToMany
echo $this->Form->input('tags._ids', [
'type' => 'select',
'multiple' => true,
'options' => $tagList,
]);

// Inputs for the joint table (articles_tags)
echo $this->Form->input('tags.0._joinData.starred');
echo $this->Form->input('tags.1._joinData.starred');

// Comments inputs (hasMany)
echo $this->Form->input('comments.0.id');
echo $this->Form->input('comments.0.comment');
echo $this->Form->input('comments.1.id');
echo $this->Form->input('comments.1.comment');