<?php
// Accepte $message ou $message_flash
if(!isset($message) && isset($message_flash)) $message = $message_flash;
if(!isset($type)) $type = 'danger';
?>
<?php if(isset($message) && $message): ?>
<div style="
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:16px 20px;
    border-radius:16px;
    margin-bottom:24px;
    background:<?= $type === 'success' ? '#f0fdf4' : '#fff1f1' ?>;
    border-left:4px solid <?= $type === 'success' ? '#22c55e' : '#ef4444' ?>;
    box-shadow:0 4px 20px <?= $type === 'success' ? 'rgba(34,197,94,.1)' : 'rgba(239,68,68,.1)' ?>;
">
    <div style="display:flex; align-items:center; gap:12px;">
        <i class="fa-solid <?= $type === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation' ?>"
           style="font-size:20px; color:<?= $type === 'success' ? '#22c55e' : '#ef4444' ?>;"></i>
        <span style="font-size:15px; font-weight:600; color:<?= $type === 'success' ? '#166534' : '#991b1b' ?>;">
            <?= $message ?>
        </span>
    </div>
    <button onclick="this.parentElement.remove()"
        style="background:none; border:none; cursor:pointer; font-size:20px; color:<?= $type === 'success' ? '#166534' : '#991b1b' ?>; padding:0; line-height:1;">
        &times;
    </button>
</div>
<?php endif; ?>
