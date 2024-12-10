<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title><?= $title ?></title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4"><?= $title ?></h1>
        <a href="<?= base_url('home/tambah'); ?>" class="btn btn-primary mb-3">Tambah Kategori</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($kategori as $k) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $k['nama_kategori'] ?></td>
                        <td>
                            <a href="<?= base_url('home/edit/' . $k['id_kategori']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('home/delete/' . $k['id_kategori']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>