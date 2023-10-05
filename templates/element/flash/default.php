<?php declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 * @var array             $params
 * @var string            $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' '.$params['class'];
}
if (!isset($params['escape']) || false !== $params['escape']) {
    $message = h($message);
}
?>
<div class="<?php echo h($class); ?>" onclick="this.classList.add('hidden');"><?php echo $message; ?></div>
