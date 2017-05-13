<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lessons'), ['controller' => 'Lessons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lesson'), ['controller' => 'Lessons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('portfolio_id', ['options' => $portfolios]);
            echo $this->Form->control('parentcourseId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
