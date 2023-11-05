<?php 

$this->extend('layout/main');
$this->section('body');

?>

<?php if(session()->getFlashData('success')) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<br>
<br>
<h1>List Of News</h1>
<a href="/news/create" class="btn btn-primary">Add New</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">News Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($news as $listnews) : ?>
            <tr>
            <th scope="row"> <?= $listnews['NEWSID'] ?></th>
            <td> <?= $listnews['TITLE'] ?></td>
            <td> <?= $listnews['DESCRIPTION'] ?></td>
            <td> <?= $listnews['AUTHOR'] ?></td>
            <td>
            <a href="/news/edit/<?= $listnews['NEWSID']?>" class="btn btn-primary">EDIT</a>
            <a href="/news/delete/<?= $listnews['NEWSID']?>" class="btn btn-danger">DELETE</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $this->endSection() ?>