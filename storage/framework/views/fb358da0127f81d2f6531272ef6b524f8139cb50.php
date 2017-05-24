<br>

<?php if(isset($data['tag'])): ?>
  <div class="form-group">
      <div class="fg-line">
        <label class="fg-label">Tag</label>
        <input type="text" class="form-control" name="tag" id="tag" value="<?php echo e($data['tag']); ?>" placeholder="Tag">
      </div>
  </div>

  <br>
<?php endif; ?>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="<?php echo e($data['title']); ?>" placeholder="Title">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
      <label class="fg-label">Subtitle</label>
      <input type="text" class="form-control" name="subtitle" id="subtitle" value="<?php echo e($data['subtitle']); ?>" placeholder="Subtitle">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">Meta Description</label>
        <textarea class="form-control auto-size" id="meta_description" name="meta_description" placeholder="Meta Description"><?php echo e($data['meta_description']); ?></textarea>
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">Layout</label>
        <input type="text" class="form-control" name="layout" id="layout" value="<?php echo e($data['layout']); ?>" placeholder="Layout" disabled>
    </div>
</div>

<br>

<div class="form-group">
    <label class="radio radio-inline m-r-20">
        <input type="radio" name="reverse_direction" id="reverse_direction" <?php if(! $data['reverse_direction']): ?> checked="checked" <?php endif; ?> value="0">
        <i class="input-helper"></i>
        Normal
    </label>

    <label class="radio radio-inline m-r-20">
        <input type="radio" name="reverse_direction" <?php if($data['reverse_direction']): ?> checked="checked" <?php endif; ?> value="1">
        <i class="input-helper"></i>
        Reverse
    </label>
</div>

<br>