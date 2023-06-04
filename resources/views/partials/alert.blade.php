<div class="mt-2 p-2">
    <?php
    $successMessage = session("message:success",null);
    ?>
    @if($successMessage)
<div class="alert alert-success">
    {{ $successMessage }}
</div>
@endif
</div>
