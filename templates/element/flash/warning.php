<?php declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 * @var array             $params
 * @var string            $message
 */
if (!isset($params['escape']) || false !== $params['escape']) {
    $message = h($message);
}
?>
<div class="message warning" onclick="this.classList.add('hidden');"><?php echo $message; ?></div>
