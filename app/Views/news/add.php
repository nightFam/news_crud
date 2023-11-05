<?php 

$this->extend('layout/main');
$this->section('body');

?>

<h1>Add News</h1>
<form action="/news/store" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">News Title</label>
  <input type="text" class="form-control" id="TITLE" name="TITLE" placeholder="" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="DESCRIPTION" name="DESCRIPTION" rows="3" required></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Author</label>
  <input type="text" class="form-control" id="AUTHOR" name="AUTHOR" placeholder="" required>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection() ?>