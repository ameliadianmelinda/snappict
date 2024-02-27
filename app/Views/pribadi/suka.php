<?= $this->extend('templates/profil'); ?>

<!-- title -->
<?= $this->section('title'); ?>
<title>Snappict | Profil-Suka</title>
<?= $this->endSection(); ?>
<!--  -->

<!-- nav active -->
<?= $this->section('active_nav1'); ?>
<li><a href="/beranda">Beranda</a></li>
<?= $this->endSection(); ?>

<?= $this->section('active_nav2'); ?>
<li><a href="/upload">Upload</a></li>
<?= $this->endSection(); ?>
<!--  -->


<?= $this->section('nav-profil'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/css/profil.css">
<div class="postingan">
    <ul>
        <li><a href="/profil-postingan/<?= session()->get('userid'); ?>"><i class="fa-solid fa-grip-vertical"></i>&nbsp; Postingan</a></li>
        <li style="margin-left:30px;"><a href="/profil-album"><i class="fa-regular fa-folder-open"></i>&nbsp; Album</a></li>
        <li style="margin-left: 30px;"><a href="/profil-suka/<?= session()->get('userid'); ?>" class="active"><i class="fa-solid fa-heart" style="color: red;"></i>&nbsp; Suka</a></li>
    </ul>
</div>

<?= $this->endSection(); ?>

<?= $this->section('suka'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/css/suka.css">

<row class="sukaa">

    <div class="gridds">
        <?php foreach ($foto as $f) : ?>

            <div class="box">

                <a href="/galeri/<?= $f['fotoid']; ?>">
                    <img src="/image_storage/<?= $f['foto']; ?>" alt="">

                    <div class="hover-box">
                        <ul>
                            <li><i class="fa-solid fa-heart" style="color:red;"></i>&nbsp;&nbsp; 2,3rb suka</li>
                            <li style="margin-left:20px;"><i class="fa-regular fa-comment"></i>&nbsp; 45 komentar</li>
                        </ul>
                    </div>
                </a>

            </div>
        <?php endforeach; ?>
    </div>


</row>
<?= $this->endSection(); ?>