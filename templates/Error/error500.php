<?php declare(strict_types=1);

/**
 * @var \App\View\AppView                 $this
 * @var \Cake\Database\StatementInterface $error
 * @var string                            $message
 * @var string                            $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) {
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.php');

    $this->start('file');
    ?>
<?php if (!empty($error->queryString)) { ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?php echo h($error->queryString); ?>
    </p>
<?php } ?>
<?php if (!empty($error->params)) { ?>
    <strong>SQL Query Params: </strong>
    <?php Debugger::dump($error->params); ?>
<?php } ?>
<?php if ($error instanceof Error) { ?>
    <?php $file = $error->getFile(); ?>
    <?php $line = $error->getLine(); ?>
    <strong>Error in: </strong>
    <?php echo $this->Html->link(sprintf('%s, line %s', Debugger::trimPath($file), $line), Debugger::editorUrl($file, $line)); ?>
<?php } ?>
<?php
    echo $this->element('auto_table_warning');

    $this->end();
}
?>
<h2><?php echo __d('cake', 'An Internal Error Has Occurred.'); ?></h2>
<p class="error">
    <strong><?php echo __d('cake', 'Error'); ?>: </strong>
    <?php echo h($message); ?>
</p>
